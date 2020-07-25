<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
  header("Location: index.php");
  exit;
}
if (isset($_SESSION["user"])) {
  header("Location: home.php");
  exit;
}

$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['admin']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

$resPet = mysqli_query($conn, "SELECT * FROM pet");
?>

<?php require_once 'actions/db_connect.php'; ?>


<?php include('templates/head.php'); ?>



<body>
  <div class="container-fluid">
    <br>
    <br>
    <div class="card box">
      <h3>You are in Admin Mode</h3>
      <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-around">

        <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="admin.php">All cuties <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a_general.php">Misc Animals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a_senior.php">Senior</a>
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

        $sql = "SELECT * FROM pet WHERE age > 8 ";
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
                            <div class='d-flex justify-content-center'>
                              <a href='update.php?id=" . $row['id'] . "'><button type='button' class='button-x'>edit</button></a>
                              <a href='delete.php?id=" . $row['id'] . "'><button type='button' class='button-x'>delete</button></a>
                          </div>
                        </div>";
          }
        } else {
          echo  "<center>No Data Avaliable</center>";
        }
        ?>


      </div>

      <div class="manageUser">
        <a href="create.php"><button type="button" class="btn-lg">Add new pet</button></a>
      </div>


    </div>

    <br>

  </div>
  </div>

  <?php include('templates/footer.php'); ?>

</html>
<?php ob_end_flush(); ?>