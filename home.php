<?php

ob_start();
session_start();
require_once 'dbconnect.php';

if (!isset($_SESSION['user'])) {
  header("Location: index.php");
  exit;
}

$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['user']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

$resPet = mysqli_query($conn, "SELECT * FROM pet");

require_once 'actions/db_connect.php';

?>


<?php include('templates/head.php'); ?>



<body>
  <div class="container-fluid">
    <br>
    <br>
    <div class="card chead">
      <h2>Welcome to Adopt-a-pet</h2>
      <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-around">

        <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">All cuties <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="general.php">Misc Animals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="senior.php">Senior</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php?logout">Logout</a>
            </li>
          </ul>

        </div>
      </nav>
      
    <br>

    <div class="card foglio">
      <div class="card-columns">

        <?php
        $sql = "SELECT * FROM pet ";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo  "<div class='card box'>
            <div class='box'>
             <img class='card-img-top photo' src='" . $row["photo"] . "'alt='animal photo'></a>
             </div>
           <div class='card-body'>
             <h5>Name: " . $row["name"] . "</h5>
             <p>Age: " . $row["age"] . " years</p>
             <p>Size: " . $row["size"] . "</p>
             <p>Description: " . $row["description"] . "</p>
             <p>Hobbies: " . $row["hobbies"] . "</p>
             <br>
             <h5>Location</h5>                        
             <p>Adress: " . $row["address"] . "</p>
             <p>ZIP-code: " . $row["ZIP-code"] . "</p>
             <p>City: " . $row["city"] . "</p>
           </div>
         </div>";
          }
        } else {
          echo  "<center>No Data Avaliable</center>";
        }
        ?>


      </div>
    </div>

    <br>

  </div>
  </div>

  <?php include('templates/footer.php'); ?>

</html>
<?php ob_end_flush(); ?>