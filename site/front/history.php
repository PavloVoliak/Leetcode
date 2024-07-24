<?php

require_once 'C:\wamp64\www\projects\practice\site\connection_and_entering\database_connection.php';
require_once 'C:\wamp64\www\projects\practice\site\connection_and_entering\function.php';

session_start();

$query_1 = "SELECT reciepts.user_number AS user_number, reciepts.date AS `date`, reciepts.pokaznik AS pokaznik, reciepts.total AS total FROM reciepts 
INNER JOIN users ON reciepts.fr_id_users = users.id_users WHERE users.email = ? ";

$statement = $pdo->prepare($query_1);
$statement->execute([$_SESSION['email']]);
$result = $statement->fetchAll();

?>