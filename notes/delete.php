<?php
include "../connect.php";
$noteid=$_POST['noteid'];
$stmt=$con->prepare("delete from notes where notes_id=?");
$stmt->execute(array($noteid));
$count=$stmt->rowCount();
if($count>0){
echo json_encode(array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"failure"));

}
?>