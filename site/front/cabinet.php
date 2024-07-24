<?php

require_once 'C:\wamp64\www\projects\practice\site\connection_and_entering\database_connection.php';
require_once 'C:\wamp64\www\projects\practice\site\connection_and_entering\function.php';

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if (isset($_POST['oldpassword']) && isset($_POST['newpassword'])) {
        $oldpassword = trim($_POST['oldpassword']);
        $newpassword = trim($_POST['newpassword']);

        if(!empty($oldpassword) && !empty($newpassword)){

            $query_1 = "SELECT `password` FROM users WHERE email = ?";
            $statement_1 = $pdo->prepare($query_1);
            $statement_1->execute([$_SESSION['email']]);
            $result_1 = $statement_1->fetch();
    
            if(password_verify($oldpassword,$result_1['password'])){

                $hashed_password = password_hash($newpassword, PASSWORD_DEFAULT);
    
                $query_2 = "UPDATE users SET `password`= ? WHERE email = ?";
                $statement_2 = $pdo->prepare($query_2);
                $statement_2->execute([$hashed_password,$_SESSION['email']]);

                header('Location: done_substitute_pass.php');
        
            }
            else{
                header('Location: fail_substitute_pass.php');
            }
        }
        else{
    
        }
    }
}
else{

}

if (isset($_POST['oldemail']) && isset($_POST['newemail'])) {
    $oldemail = trim($_POST['oldemail']);
    $newemail = trim($_POST['newemail']);

    $oldemail = trim($_POST['oldemail']);
    $newemail = trim($_POST['newemail']);

    if(!empty($oldemail && !empty($newemail))){

        $query_1 = "SELECT email FROM users WHERE email = ?";
        $statement_1 = $pdo->prepare($query_1);
        $statement_1->execute([$_SESSION['email']]);
        $result_1 = $statement_1->fetch();

        if($oldemail === $result_1['email']){

            $query_2 = "UPDATE users SET email = ? WHERE email = ?";
            $statement_2 = $pdo->prepare($query_2);
            $statement_2->execute([$newemail,$_SESSION['email']]);
            $_SESSION['email'] = $newemail;

            header('Location: done_substitute_email.php');
    
        }
        else{
            header('Location: fail_substitute_email.php');
        }

    }
}


?>