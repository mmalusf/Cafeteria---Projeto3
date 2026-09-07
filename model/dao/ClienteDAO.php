<?php
    class ClienteDAO {
        public function read() {
            try {
                $query = BD::getConexao()->prepare("SELECT * FROM Cliente");
                
                if(!$query->execute()) {
                    print_r($query->errorInfo());
                }

                $listaClientes = array();
                foreach($query->fetchALL(PDO::FETCH_ASSOC) as $linha) {
                    $cliente = new Cliente(); //Classe bean
                    $cliente->setIdCliente($linha['idCliente']);
                    $cliente->setNome_Cliente($linha['nome_cliente']);
                    $cliente->setCpf($linha['cpf_cliente']);
                    $cliente->setEndereco($linha['endereco']);

                    array_push($listaClientes, $cliente);
                }

                return $listaClientes;

            }
            catch(PDOException $e){
                echo "Erro #2: " . $e->getMessage();
            }
        }
    }
?>