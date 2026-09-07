<?php
    class TipoProduto{
        //Atributos
        private $idTipoProduto;
        private $descricao;

        //Métodos de encapsulamento
        public function getIdTipoProduto(){
            return $this->idTipoProduto;
        }
        public function setIdTipoProduto($idTipoProduto){
            $this->idTipoProduto = $idTipoProduto;
        }

        public function getdescricao(){
            return $this->descricao;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
    }
?>