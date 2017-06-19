<?php
define('KEY_SALT','34353dfjjdfdh');
$username = $_POST['username'];
$sex = $_POST['gender'];
$email =$_POST['email'];
$password =$_POST['password'];


require_once('dbconfig.php');
$password = crypt($password, KEY_SALT);
$sql = "insert into account (username, sex, email,password) values('$username', '$sex','$email','$password')";
$result = $connect->query($sql);
if($result){
    echo "New word created";
}else{
    echo "Fail to create new word";
}
//header("location: index.php");
?>