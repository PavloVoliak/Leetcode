<?php

require_once 'C:\wamp64\www\projects\practice\site\connection_and_entering\database_connection.php';
require_once 'C:\wamp64\www\projects\practice\site\connection_and_entering\function.php';

$query = "SELECT `name` FROM cities";

$statement = $pdo->query($query);
$result = $statement->fetchAll(PDO::FETCH_COLUMN);

foreach($result as $items);

?>



