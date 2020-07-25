<?php 

require_once 'db_connect.php';

if ($_GET) {
     $name = $_GET['name'];
     $photo = $_GET['photo'];
     $age = $_GET['age'];
     $description = $_GET['description'];
     $hobbies = $_GET['hobbies'];
     $address = $_GET['address'];
     $city = $_GET['city'];
     $ZIP = $_GET['ZIP'];
     $id = $_GET['id'];

     $sql = "UPDATE pet SET name = '$name', photo = '$photo', age = '$age', description = '$description', hobbies = '$hobbies', address = '$address', city = '$city', ZIP = '$ZIP'   WHERE id = {$id}" ;
    if($connect->query($sql) === TRUE) {

        echo "<p>Pet updated!</p>";
        echo "<a href='../update.php?id=" .$id."'><button tpye='button'>back</button></a>";
        echo "<a href='../admin.php'><button type='button'>Go back</button></a>";
    } else {
        echo "Error: ". $connect->error;
    }

    $connect->close();
    }

    ?>