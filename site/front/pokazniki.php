<?php

require_once 'C:\wamp64\www\projects\practice\site\connection_and_entering\database_connection.php';
require_once 'C:\wamp64\www\projects\practice\site\connection_and_entering\function.php';

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $code = trim($_POST['code']);
    $codel = trim($_POST['codel']);


        if(!empty($code) && !empty($codel)){
            $query_1 = "INSERT INTO reciepts (user_number,pokaznik,total,fr_id_users,fr_id_cities) VALUES(?,?,?,?,?)";
            $query_2 = "SELECT id_users,fr_id_cities FROM users WHERE email = ?";
            $query_3 = "SELECT cities.price AS price, reciepts.pokaznik AS pokaznik FROM reciepts INNER JOIN users ON reciepts.fr_id_users = users.id_users INNER JOIN cities ON reciepts.fr_id_cities = cities.id_cities WHERE users.email = ?";
    
            $statement_2 = $pdo->prepare($query_2);
            $statement_2->execute([$_SESSION['email']]);
            $result_1= $statement_2->fetch();
    
            $statement_3 = $pdo->prepare($query_3);
            $result_2= $statement_3->execute([$_SESSION['email']]);
            $result_2= $statement_3->fetch();
    
            if(!empty($result_2)){
                $totalcost = sprintf(($codel - $result_2['pokaznik']) * $result_2['price']);
            }
    
    
            $statement_1 = $pdo->prepare($query_1);
            $statement_1->execute([$code,$codel,$totalcost,$result_1['id_users'],$result_1['fr_id_cities']]);

            header('Location: /projects/practice/site/front/done_pokaznik.php');

    
        }
        else{
            header('Location: /projects/practice/site/front/fail_pokaznik.php');
        }

}




?>