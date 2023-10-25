<?php
include "../connect.php";
$title=$_POST['title'];
$note=$_POST['note'];
$userid=$_POST['userid'];

$color=$_POST['color'];

$stmt=$con->prepare("insert into notes (notes_title,notes_note,notes_user,notes_color) values(?,?,?,?) ");
$stmt->execute(array($title,$note,$userid,$color));
$count=$stmt->rowCount();
if($count>0){
echo(json_encode(array("status"=>"success")));
}else{
    echo(json_encode(array("status"=>"failure")));


}

?>