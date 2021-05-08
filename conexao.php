<?php // Classe para conexão de banco de dados
    class Conexao {
            private static $dbNome = "rodeio"; 
            private static $dbHost = "localhost";
            private static $dbUser = "root"; 
            private static $password = ""; 

            private static $con = null; 

            public function __construct()
            {
                die("A Função init não é permitida...");
            }

            public static function conectar(){
                if (self::$con == null){
                    try {
                        self::$con =  new PDO("mysql:host=" . self::$dbHost . 
                                               ";dbname=". self::$dbNome, self::$dbUser, self::$password); 
                    } catch (PDOException $exception) {
                        die("Erro conexao " . $exception->getMessage()); 
                    }
                }
                return self::$con; 
            }

            public static function desconectar(){
                self::$con = null; 
            }

    }
?> 