<?php 
    class TipoprodutoDAO{
        public function read() {
            try {
                $query = BD::getConexao()->prepare("SELECT * FROM tipo_produto");
                
                if(!$query->execute()) {
                    print_r($query->errorInfo());
                }

                $listaTipoprodutos = array();
                foreach($query->fetchALL(PDO::FETCH_ASSOC) as $linha) {
                    $tipoproduto = new Tipoproduto(); //Classe bean
                    $tipoproduto->setIdTipoproduto($linha['idtipo_produto']);
                    $tipoproduto->setdescricao($linha['descricao']);

                    array_push($listaTipoprodutos, $tipoproduto);
                }

                return $listaTipoprodutos;

            }
            catch(PDOException $e){
                echo "Erro #2: " . $e->getMessage();
            }
        }
    }
?>
    