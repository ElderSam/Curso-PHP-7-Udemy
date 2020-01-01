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
    public function loadById($id){

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

    public function __toString(){
        return json_encode(array(
            "idusuario" =>$this->getIdusuario(),
            "deslogin" =>$this->getDeslogin(),
            "dessenha" =>$this->getDessenha(),
            "dtcadastro" =>$this->getDtcadastro()->format("d/m/Y H:i:s"),
        ));
    }
}

?>