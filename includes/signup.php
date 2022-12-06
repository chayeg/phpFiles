<?php

include_once'config.php';

$first=mysqli_real_escape_string($conn, $_POST['first']);//used for security  we can change thee value/varible name below
$last=mysqli_real_escape_string($conn, $_POST['last']);//simply we are "escaping" our code 
$email=mysqli_real_escape_string($conn, $_POST['email']);
$uid=mysqli_real_escape_string($conn, $_POST['uid']);
$pwd=mysqli_real_escape_string($conn, $_POST['pwd']);

$sql="INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
mysqli_query($conn, $sql);
header("Location: ../practice.php?signup=Success");


