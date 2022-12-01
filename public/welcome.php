<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../Web-Assignment02/Stylesheets/style.css" />
</head>

<body>

  <?php
  //conect to the datbase
  
  require_once('database.php');
  include "subpageHeader.php";
  $db = db_connect();
  //access URL parameter

  $id = $_GET['id'];

  //prepare your query
  $sql = "SELECT * FROM userinfo WHERE userid= '$id' ";

  $result_set = mysqli_query($db, $sql);

  $result = mysqli_fetch_assoc($result_set);

  ?>
  <!-- display the user data -->
  <div id="content">

    <a class="back-link" href="index.php"> Back to the home page</a>

    <div class="page show">

      <h1> <?php echo $result['firstName']; ?></h1>

      <div class="attributes">
        <dl>
          <dt>First Name</dt>
          <dd><?php echo $result['firstName']; ?></dd>
        </dl>
        <dl>
          <dt>Last Name</dt>
          <dd><?php echo $result['lastName']; ?></dd>
        </dl>
        <dl>
          <dt>Email</dt>
          <dd><?php echo $result['email']; ?></dd>
        </dl>
        <dl>
          <dt>Phone Number</dt>
          <dd><?php echo $result['phoneNumber']; ?></dd>
        </dl>
        <dl>
          <dt>User Name</dt>
          <dd><?php echo $result['login']; ?></dd>
        </dl>

      </div>


    </div>

  </div>

  <?php include 'footer.php'; ?>
</body>

</html>