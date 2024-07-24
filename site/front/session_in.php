<?php

require_once 'C:\wamp64\www\projects\practice\site\connection_and_entering\database_connection.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if (!empty($email) && !empty($pass)) {

        $query = "SELECT `password` FROM users WHERE email = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$email]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($result && password_verify($pass, $result['password'])) {

            $_SESSION['email'] = $email;
            header('Location: /projects/practice/site/front/done.php');
            exit();
        } else {

            header('Location: /projects/practice/site/front/fail.php');
            exit();
        }
    } else {
        echo "The field is empty";
    }
} else {
    echo "Form not submitted";
}

?>
