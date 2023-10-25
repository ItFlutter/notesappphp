<?php
include "connect.php";

$search=$_POST['search'];
$data=array();
$stmt=$con->prepare("select * from notes where notes_title  or notes_note like '%$search%'");
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);

$count=$stmt->rowCount();
if($count>0){
echo(json_encode(array('status'=>'success',"data"=>$data)));

}else{
echo(json_encode(array('status'=>'failure')));

}


?>
