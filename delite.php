<?php
 include ('../config/db.php');

$id = $_GET['id'];
$query = "DELETE FROM personas where (id = '$id')";
$result = mysqli_query($conn,$query);
if($query){
    header('location:list.php');
}

?>