<?php

require_once 'C:\wamp64\www\projects\practice\site\connection_and_entering\database_connection.php';
require_once 'C:\wamp64\www\projects\practice\site\connection_and_entering\function.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $phone = trim($_POST['phone']);
    $city = trim($_POST['city']);
    $street = trim($_POST['street']);
    $flat = trim($_POST['flat']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($name) && !empty($surname) && !empty($phone) && !empty($city) && !empty($street) && !empty($flat) && !empty($email) && !empty($password)) {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query_1 = "INSERT INTO users (`name`, surname, phone, city, street, flat, email, `password`, fr_id_cities) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $query_2 = "SELECT id_cities FROM cities WHERE `name` = ?";

        $statement_2 = $pdo->prepare($query_2);
        $statement_2->execute([$city]);
        $result = $statement_2->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $fr_id_cities = $result['id_cities'];

            $statement_1 = $pdo->prepare($query_1);
            $statement_1->execute([$name, $surname, $phone, $city, $street, $flat, $email, $hashed_password, $fr_id_cities]);

            $_SESSION['email'] = $email;

            header('Location: /projects/practice/site/front/done.php');
            exit();
        } else {
            echo "City not found";
        }
    } else {
        echo "No input provided";
    }
} else {
    echo "Form not submitted";
}

?>
