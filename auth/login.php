<?php
include "../connect.php";
$email=$_POST['email'];
$password=sha1($_POST['password']);
$data=array();
$stmt=$con->prepare("select * from users where users_email=? and users_password=?");
$stmt->execute(array($email,$password));
$count=$stmt->rowCount();
if($count>0){
    $data=$stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode(array("status"=>"success","data"=>$data));
}else{
    echo json_encode(array("status"=>"failure"));


}

?>