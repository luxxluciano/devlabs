<?php
                $conn;
                $host = 'mysql.lucianofagundes.kinghost.net';         
                $user= 'lucianofagunde02';
                $pass = 'devlabs231212';
                $db = 'lucianofagunde02';
                $message_error = 'Erro na conexão';  
               
                try{
                    $conn = new PDO(
                        'mysql:host='.$host.';dbname='.$db,
                        $user,
                        $pass
                    );
                  
                   
                } catch (PDOException $e) {
                    die($message_error." Erro ".$e->getMessage());
                }
               
                echo 'Conexão com sucesso!';
    ?>