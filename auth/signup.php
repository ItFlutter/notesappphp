<?php
include"../connect.php";
$email=$_POST['email'];
$password=sha1($_POST['password']);
$stmt=$con->prepare("SELECT * FROM users WHERE users_email=?");
$stmt->execute(array($email));
$count=$stmt->rowCount();
if($count>0){
    echo json_encode(array("status"=>"failure email"));
}else{
    $stmt1=$con->prepare("insert into users (users_email,users_password) values(?,?)");
    $stmt1->execute(array($email,$password));
    $count1=$stmt1->rowCount();
    if($count1>0){
    echo json_encode(array("status"=>"success"));

    }else{
    echo json_encode(array("status"=>"failure"));

    }
}

?>