<?php
include 'mysql.php';

$email = $_POST['email'];
$hash = $_POST['hash'];


mysqlconnect();
checklogin($email,$hash);


echo json_encode(array("loginsuccess"=>$loginsuccess,"email"=>$email));
?>