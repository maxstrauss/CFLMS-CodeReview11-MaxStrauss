<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM pet WHERE id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>


<?php include('templates/head.php'); ?>


  <body>
    <div class="container-fluid">
    <br>
      <div class="card chead">
      <h1>Delelte Pets</h1>
      </div>

      <div class="card foglio">
        <h3>Do you want to delete <?php echo $data['name'] ?>?</h3>
        <div class="cover">
              <img src="<?php echo $data['photo'] ?>" >
        </div> 
        <br>

        <form action ="actions/a_delete.php" method="get">
          <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
          <button type="submit" class='btn btn-lg'>Delete</button >
          <a href="admin.php"><button type="button" class='btn btn-lg'> Do not delete</button ></a>
        </form>
      </div>
    </div>
    <br>
    <?php include('templates/footer.php'); ?>
  
</html>

<?php
}
?>