<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border=1>
        <tr>
            <td>S.No</td>
            <td>NAME</td>
            <td>AGE</td>
            <td>PLACE</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        <?php

        include 'db.php';
        $select = "SELECT * FROM `buyers`";
        $got_data = $connection->query($select);

        if ($got_data->num_rows > 0) {
            while ($row = $got_data->fetch_assoc()) {
                echo "<tr>
                 <td>" . $row['id'] . "</td>
                 <td>" . $row['name'] . "</td>
                 <td>" . $row['age'] . "</td>
                 <td>" . $row['place'] . "</td>
                 <td><a href="."update.php?id=".$row['id'].">EDIT</a></td>
                 <td><a href="."delete.php?id=".$row['id'].">DELETE</a></td>
                 </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>THERE IS NO DATA..</td></tr>";
        }

        ?>

    </table>
    <?php 
    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }
    ?>
</body>

</html>