<?php
include 'database.php';
$id=$_POST['id'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$sql="UPDATE contacts SET Name='$name', Contact='$contact' WHERE id=$id";

$result=mysqli_query($conn, $sql);
if($result)
{
    header("location: ./index.php");
}

?>