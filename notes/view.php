<?php
include "../connect.php";
$userid=$_POST['userid'];
$data=array();
$stmt=$con->prepare("select * from notes where notes_user=?");
$stmt->execute(array($userid));
$count=$stmt->rowCount();
if($count>0)
{
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode(array("status"=>"success","data"=>$data));


}else{
echo json_encode(array("status"=>"failure"));

}
?>