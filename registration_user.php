<?php
include 'confing.php';

$name =  ($_POST['name']);
$email = ($_POST['email']);
$password = ($_POST['password']);

$name =  filter_var(trim($_POST['name']));
$email = filter_var(trim($_POST['email']));
$password = filter_var(trim($_POST['password']));

if(mb_strlen($name) < 5 or mb_strlen($name) > 100){
    echo('недопустимая длина');
}elseif(mb_strlen($email) < 10 or mb_strlen($email) > 50){
    echo('недопустимая длина почты');
}elseif(mb_strlen($password) < 8 or mb_strlen($password) > 32){
    echo('недопустимая длина почты пароля');
}

$check = "SELECT * FROM `translator_sait` WHERE  email = $email";
$result = mysqli_query($connect, $check);

 
if($result){
    echo('зарегистрированный user вы не можете повторно регистрировать');
}else{
    $add_user = "INSERT INTO `translator_sait` (`name`, `email`, `password`) VALUES('$name', '$email', '$password')";
    mysqli_query($connect, $add_user);
}



setcookie('users' , $email, time() + 36000, "/");


header('location: /')
?>