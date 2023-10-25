<?php
include "../connect.php";
$title=$_POST['title'];
$note=$_POST['note'];
$noteid=$_POST['noteid'];
$color=$_POST['color'];
$stmt=$con->prepare("update notes set notes_title=?,notes_note=?,notes_color=? where notes_id=?");
$stmt->execute(array($title,$note,$color,$noteid));
$count=$stmt->rowCount();
if($count>0){
echo(json_encode(array("status"=>"success")));
}else{
    echo(json_encode(array("status"=>"failure")));


}

?>