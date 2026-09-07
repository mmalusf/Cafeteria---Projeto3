<?php
    class Funcionario{
        //Atributos
        private $idFuncionario;
        private $nomeFuncionario;

        //Métodos de encapsulamento
        public function getIdFuncionario(){
            return $this->idFuncionario;
        }
        public function setIdFuncionario($idFuncionario){
            $this->idFuncionario = $idFuncionario;
        }

        public function getNomeFuncionario(){
            return $this->nomeFuncionario;
        }
        public function setNomeFuncionario($nomeFuncionario){
            $this->nomeFuncionario = $nomeFuncionario;
        }
    }
?>