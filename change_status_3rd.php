<?php


include('dbConnect.php');

if(isset($_REQUEST['status'])){
    $status = $_REQUEST['status'];
    $id = $_REQUEST['id'];

    $sql = "update candidate_3rd set approve_status=:status where id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':status',$status);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    header("location:user_cand_3.php");
}

?>