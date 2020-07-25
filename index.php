<?php
ob_start();
session_start();
require_once 'dbconnect.php';


if ( isset($_SESSION['user'])!=""){
    header("Location: home.php");
    exit;
}

$error = false;

if( isset($_POST['btn-login'])){


$email = trim($_POST['email']);
$email = strip_tags($email);
$email = htmlspecialchars($email);

$pass = trim($_POST[ 'pass']);
$pass = strip_tags($pass);
$pass = htmlspecialchars($pass);


if(empty($email)){
    $error = true;
    $emailError = "Please enter your email address.";
} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $error = true;
    $emailError = "Please enter valid email address.";
}

if (empty($pass)){
    $error = true;
    $passError = "Please enter your password.";
}


if (!$error) {

    $password = hash( 'sha256', $pass);

    $res=mysqli_query($conn, "SELECT * FROM users WHERE userEmail='$email'" );
    $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
    $count = mysqli_num_rows($res);

    if( $count == 1 && $row['userPass' ]==$password ) {
        if($row["status"] == 'admin'){
          $_SESSION["admin"] = $row["userId"];
          header("Location: admin.php");

        }else {
            $_SESSION['user'] = $row['userId'];
            header( "Location: home.php");
          }
         
        } else {
         $errMSG = "Incorrect Credentials, Try again..." ;
        }
       
       }
      
      }
      ?>

<?php include('templates/head.php'); ?>


<body>
    <div class="container-fluid">
        <br>
        <br>
        <div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete= "off">


<h2 class="index-color">Welcome to Adopt-a-pet</h2>
<h2 class="index-color">Please enter your E-Mail and password to enter Adopt-a-pet</h2>
<hr />

<?php
if (isset($errMSG) ) {
    echo $errMSG; ?>

    <?php
}
?>



<input type"email" name="email" placeholder= "Your E-Mail" value="<?php echo $email; ?>" maxlength="40" /> <br>

<span><?php echo $emailError; ?></span>


<input type="password" name="pass" placeholder ="Your Password" maxlength="15" /> <br>

<span><?php echo $passError; ?></span>
<hr>
<button type="submit" name="btn-login">Enter</button>


<hr>
<a href="register.php">Register new Account</a>


</form>
</div>
<br>
<br>
<body>
    </html>
    <?php ob_end_flush(); ?>