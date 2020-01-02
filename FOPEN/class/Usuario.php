<?php

class Usuario{

    //Atributos
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    //Getters
    public function getIdusuario(){
        return $this->idusuario;
    }

    public function getDeslogin(){
        return $this->deslogin;
    }

    public function getDessenha(){
        return $this->dessenha;
    }

    public function getdtCadastro(){
        return $this->dtcadastro;
    }

    //Setters
    public function setIdusuario($value){
        $this->idusuario = $value;
    }

    public function setDeslogin($value){
        $this->deslogin = $value;
    }

    public function setDessenha($value){
        $this->dessenha = $value;
    }

    public function setDtcadastro($value){
        $this->dtcadastro = $value;
    }

    //Construtor
    public function __construct($login = "", $password = ""){
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }

    //Métodos
    public function __toString(){ //quando for pedido para imprimir o objeto, esse método mágico é chamado para retornar um JSON
        return json_encode(array(
            "idusuario" =>$this->getIdusuario(),
            "deslogin" =>$this->getDeslogin(),
            "dessenha" =>$this->getDessenha(),
            "dtcadastro" =>$this->getDtcadastro()->format("d/m/Y H:i:s"),
        ));
    }

    public function loadById($id){ //retorna dados do usuário de um ID

        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
                ":ID" =>$id
        ));
        
        if(count($results) > 0){
            
           $this->setData($results[0]);
        }else{
            throw new Exception("Registro com esse ID não encontrado!");
        
        }
    }

    public static function getList(){ //Retorna uma lista Usuários
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }

    public static function search($login){
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
                ':SEARCH'=>"%".$login."%"
        ));
    }

    public function login($login, $password){
        
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
                                ":LOGIN" =>$login,
                                ":PASSWORD" =>$password
        ));

        if(count($results) > 0){

            $this->setData($results[0]);
            
        }else{

            throw new Exception("Login e/ou senha inválidos!");
        }
    }

    public function setData($data){// configura dados

        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    public function insert(){
        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array( //chama a procedure sp_usuarios_insert criada no Mysql
                ':LOGIN'=>$this->getDeslogin(),
                ':PASSWORD'=>$this->getDessenha()
        ));

        if(count($results) > 0){
            $this->setData($results[0]);
        }
    }

    public function update($login, $password){

        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha(),
            ':ID'=>$this->getIdusuario()
        ));
    }

    public function delete(){

        $sql = new Sql();

        $sql->query("DELETE FROM  tb_usuarios WHERE idusuario = :ID", array(
            ':ID'=>$this->getIdusuario()
        ));

        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setDessenha("");
        $this->setDtcadastro(new DateTime());
        
    }
}

?>