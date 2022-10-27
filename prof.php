<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_GET['msg'])) {
        echo "<h4>" . $_GET['msg'] . "</h4>";
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <label for="fn">name</label>
        <input type="text" id="fn" name="fname" value="">
        <label for="age">age</label>
        <input type="number" id="age" name="age" value="">
        <label for="place">place</label>
        <input type="text" id="place" name="place" value="">
        <input type="submit" value="submit">
    </form>
    <div>
        <a href="desire.php">REVIVE DATA</a>
    </div>
    <?php 
    include'db.php';
    if($_SERVER["REQUEST_METHOD"] == 'POST'){

        extract($_POST);
        $one = $_POST['fname'];
        $two = $_POST['age'];
        $three = $_POST['place'];

        $insert = "INSERT INTO `buyers`(`name`,`age`,`place`)VALUES('$one','$two','$three')";


        if($connection->query($insert)){
            echo "DATA INSERTED..";
        }else{
            echo "DATA DIDN'T INSERT";
        }
    }

    ?>

</body>

</html>