<?php
include 'database.php';
$name=$_POST['name'];
$contact=$_POST['contact'];

$sql="INSERT INTO contacts(Name, Contact) VALUES ('$name', '$contact')";

$result=mysqli_query($conn, $sql);

if($result)
{
    header("location: ./index.php");
}

?>