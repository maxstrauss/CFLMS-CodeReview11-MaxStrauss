<?php include('templates/head.php'); ?>


<body>
  <div class="container-fluid">
    <br>
    <div class="card top">
      <h2>Add a new pet</h2>
    </div>
    <div class="card add-box">
      <form class="form-group" action="actions/a_create.php" method="get">
        <div>
          <div>
            <h1>Details about your pet</h1>


            <label for="name"> Pet name </label> <br>
            <input type="text" name="name" /> <br>
            <label for="photo">Picture of your pet (image url) </label> <br>
            <input type="text" name="photo" /> <br>

            <label for="age">Age </label> <br>
            <input type="text" name="age" /> <br>
            <label for="description">Describe your pet:</label> <br>
            <input type="text" name="description" /> <br>

            <label for="hobbies">Hobbies </label> <br>
            <input type="text" name="hobbies" /> <br>
          </div>
          <br>
          <h1>Details about you</h1>
          <div class="col">
            <label for="address">Your adress</label> <br>
            <input type="text" name="address" /> <br>
            <label for="city">city </label> <br>
            <input type="text" name="city" /> <br>
            <label for="ZIP">ZIP code </label> <br>
            <input type="text" name="ZIP" /> <br>
          </div>
        </div>
        <hr>
        <br>

        <button type="submit" class='btn'>Add a new Pet</button>
        <a href="admin.php"><button type="button" class='btn'>Go back</button></a>
      </form>
    </div>
  </div>
</body>

</html>