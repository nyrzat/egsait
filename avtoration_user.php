<?php
include 'confing.php';
    $email = filter_var(trim($_POST['email']));

    $password = filter_var(trim($_POST['password']));


    echo($email . $password);

    $sql= "SELECT * FROM `translator_sait` WHERE email = '$email' and password = '$password";

    $result = mysqli_query($connect, $sql);
   
   


        header("Location: /");
?>