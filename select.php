<?php 
include'db.php';
echo "  
<tr>
    <td>ID</td>
    <td>NAME</td>
    <td>AGE</td>
    <td>MOBILE</td>
    <td>EDIT</td>
    <td>DELETE</td>
</tr>";
$select = "SELECT * FROM `student`";

$exe = $connection->query($select);

if($exe->num_rows > 0){
    while($row = $exe->fetch_assoc()){
        echo " <tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['age']."</td>
        <td>".$row['mobile']."</td>
        <td><button data-id=".$row['id']."  "."class='btn_ss'>Edit</button></td>
        <td><button data-id=".$row['id']."  "."class='btn_s'"."  "."style='background-color:red;'>Delete</button></td>
      </tr>";
    }
}else{
    echo "DATA COULDN'T ACCESS";
}
?>