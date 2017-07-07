<?php
$title = $_POST['title'];
$comment = $_POST['comment'];
require_once('dbconfig.php');
$sql = "insert into chart (title, comment) values('$title', '$comment')";
$result = $connect->query($sql);
if($result){
    echo "New word created";
}else{
    echo "Fail to create new word";
}
//header("location: index.php");
?>