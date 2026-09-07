<?php 
    class FormaPagamento{
        //Atributos
        private $idFormaPagamento;
        private $nomePagamento;

        //Métodos de encapsulamento
        public function getIdFormaPagamento(){
            return $this->idFormaPagamento;
        }
        public function setIdFormaPagamento($idFormaPagamento){
            $this->idFormaPagamento = $idFormaPagamento;
        }

        public function getNomePagamento(){
            return $this->nomePagamento;
        }
        public function setNomePagamento($nomePagamento){
            $this->nomePagamento = $nomePagamento;
        }
    }