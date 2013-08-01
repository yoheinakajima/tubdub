<?php
include 'mysql.php';

$email = $_POST['email'];
$hash = $_POST['hash'];



mysqlconnect();
checkuserexists($email);


if ($userexists==0){
  adduser($email,$hash);
} else {
}

echo json_encode(array("userexists"=>$userexists));
?>