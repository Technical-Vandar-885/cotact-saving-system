<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Contact Saving System Using PHP!</title>
  </head>
  <body>
  <?php
    include 'database.php';
    $id=$_GET['id'];
    $sql="SELECT * FROM contacts WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        $name=$row['Name'];
        $contact=$row['Contact'];
    }
  
  ?>
    <div class="container w-50 m-auto">
        <div class="text my-2">
            <h1 class="text-center">Contact Saving System Using PHP</h1>
        </div>
        <form action="editaction.php" autocomplete="off" method="POST">
            <div class="form-group">
                <label for="name">Name: </label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="<?php global $name;echo $name ?>" required>
            </div><br>
            <div class="form-group">
                <label for="contact">Contact: </label>
                <input class="form-control" type="number" name="contact" id="contact" placeholder="Contact" required value="<?php global $contact;echo $contact ?>">
            </div><br>
            <input type="hidden" name="id" id="id" value="<?php global $id;echo $id ?>">
            <button class="btn btn-success">Update Contact</button>
        </form>
    </div
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>