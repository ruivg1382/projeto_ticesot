<?php

session_start();


$email=$_POST['email'];
$senha=$_POST['senha'];




if($email=='ruivg1382@gmail.com' && $senha=='EmmaYasminRoana2022'){

    $email =$_SESSION($email);

    header('location:logon.php');

}
else{

    header('location:login.php?&error');
}








?>