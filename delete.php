<?php 
include'db.php';

$_id = $_GET['id'];

$delete = "DELETE FROM `buyers` WHERE `id`=$_id";

if($connection->query($delete)){
    header("Location:desire.php?msg=DATA DELETED SUCCESSFULLY");
}else{
    header("Location:desire.php?msg=DATA DELETED SUCCESSFULLY");
}
?>
