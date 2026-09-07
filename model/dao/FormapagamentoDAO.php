<?php 
    class FormaPagamentoDAO{
        public function read() {
            try {
                $query = BD::getConexao()->prepare("SELECT * FROM formapagamento");
                
                if(!$query->execute()) {
                    print_r($query->errorInfo());
                }

                $listaFormaPagamentos = array();
                foreach($query->fetchALL(PDO::FETCH_ASSOC) as $linha) {
                    $formaPagamento = new FormaPagamento(); //Classe bean
                    $formaPagamento->setIdFormaPagamento($linha['idFormaPagamento']);
                    $formaPagamento->setNomePagamento($linha['nome_pagamento']);

                    array_push($listaFormaPagamentos, $formaPagamento);
                }

                return $listaFormaPagamentos;

            }
            catch(PDOException $e){
                echo "Erro #2: " . $e->getMessage();
            }
        }
    }
?>
    