<?php
include('db.php');
$id_value = $_GET['id'];

$select = "SELECT * FROM `buyers` WHERE `id`=$id_value";

$gave_data = $connection->query($select);

$row = $gave_data->fetch_assoc();

?>
<form action="" method="post">

    <label for="fn">name</label>
    <input type="text" id="fn" name="fname" value="<?php echo $row['name']; ?>">
    <label for="age">age</label>
    <input type="number" id="age" name="age" value="<?php echo $row['age']; ?>">
    <label for="place">place</label>
    <input type="text" id="place" name="place" value="<?php echo $row['place']; ?>">
    <input type="submit" value="submit">
</form>
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    extract($_POST);

    $update = "UPDATE `buyers` SET name='$fname',age='$age',place='$place' WHERE `id`= $id_value";

    if($connection->query($update)){
        echo "UPDATED SUCCESSFULLY";
    }else{
        echo "COULDN'T UPDATED";
    }
}
?>