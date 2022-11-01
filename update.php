<?php 
include'db.php';
extract($_POST);
// if (!empty($_POST['fname'])) {
//     print_r($_POST);}else{
//         echo "dgdfsgf"; 
//     }
$update = "UPDATE `student` SET `name`='$fname',`age`='$age',`mobile`='$mob' WHERE `id`='$id' ";

if($connection->query($update)){
    echo "UPDATED SUCCESSFULLY";
}else{
    echo "COULDN'T UPDATED";
}

?>