<?php

include 'db.php';

if (!empty($_POST['fname'])) {
    extract($_POST);
    $insert = "INSERT INTO `student`(`name`,`age`,`mobile`)VALUES('$fname','$age','$mob')";
    if ($connection->query($insert)) {
        echo "DATA INSERTED SUCCESSFULLY...";
    } else {
        echo "DATA NOT INSERTED...";
    }
}else{
    echo 0;
}
?>