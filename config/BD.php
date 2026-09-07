<?php
    class BD {
        public static function getConexao(){
            
            $conn = new PDO(
                "mysql:host=localhost;port= 3306;dbname=cafeteriabd",
                "root",
                ""
            );

            return $conn;
        }
    }
?>