<?php 
    class FuncionarioDAO{
        public function read() {
            try {
                $query = BD::getConexao()->prepare("SELECT * FROM funcionario");
                
                if(!$query->execute()) {
                    print_r($query->errorInfo());
                }

                $listaFuncionarios = array();
                foreach($query->fetchALL(PDO::FETCH_ASSOC) as $linha) {
                    $funcionario = new Funcionario(); //Classe bean
                    $funcionario->setIdFuncionario($linha['idFuncionario']);
                    $funcionario->setnomefuncionario($linha['nome_funcionario']);

                    array_push($listaFuncionarios, $funcionario);
                }

                return $listaFuncionarios;

            }
            catch(PDOException $e){
                echo "Erro #2: " . $e->getMessage();
            }
        }
    }
?>
    