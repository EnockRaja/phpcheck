
<?php
include('db.php');
extract($_POST);
print_r($_POST);
$delete = "DELETE FROM `student` WHERE `id`=$id";

if($connection->query($delete)){
    echo "DATA DELETED";
}else{
    echo "DATA NOT DELETED..";
}

?>