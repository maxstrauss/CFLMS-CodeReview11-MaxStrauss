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
  

   $sql = "INSERT INTO pet (name, photo, age, description, hobbies, address, city, ZIP,) VALUES ('$name','$photo','$age','$description','$hobbies','$address','$city','$ZIP')";
    if($connect->query($sql) === TRUE) {
      echo "<br><p>Successfully created<br>Next step?</p><br>" ;
      echo "<a href='../create.php'><button type='button'class='btn btn-outline-succcess btn-lg'>Add new Pet</button></a>";
      echo "<a href='../admin.php'><button type='button'class='btn btn-outline-success btn-lg'>Back to the HOME page</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>