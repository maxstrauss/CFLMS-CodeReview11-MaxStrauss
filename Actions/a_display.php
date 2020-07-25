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
  $size = $_GET['size'];
  

   $sql = "SELECT * FROM pet (name, photo, age, description, hobbies, address, city, ZIP, size) VALUES ('$name','$photo','$age','$description','$hobbies','$address','$city','$ZIP', '$size')";
    if($connect->query($sql) === TRUE) {
      echo "<br><p>Successfully connected</p><br>" ;
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>