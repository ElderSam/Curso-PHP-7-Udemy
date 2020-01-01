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

    //Métodos
    public function loadById($id){ //retorna dados do usuário de um ID

        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",
                            array(
                                ":ID" =>$id
                            ));

        if(isset($results)){
            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }
    }

    public static function getList(){ //Retorna uma lista Usuários
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }

    public function __toString(){
        return json_encode(array(
            "idusuario" =>$this->getIdusuario(),
            "deslogin" =>$this->getDeslogin(),
            "dessenha" =>$this->getDessenha(),
            "dtcadastro" =>$this->getDtcadastro()->format("d/m/Y H:i:s"),
        ));
    }

    public static function search($login){
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
                ':SEARCH'=>"%".$login."%"
        ));
    }

    public function login($login, $password){
        
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD",
                            array(
                                ":LOGIN" =>$login,
                                ":PASSWORD" =>$password
                            ));

        if(count($results) > 0){
            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }else{

            throw new Exception("Login e/ou senha inválidos!");
        }
    }
}

?>