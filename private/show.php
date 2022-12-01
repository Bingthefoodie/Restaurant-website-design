<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <?php
  //conect to the datbase
  
  require_once('database.php');
  include "headerEm.php";
  $db = db_connect();
  //access URL parameter

  $id = $_GET['id'];

  //prepare your query
  $sql = "SELECT * FROM userinfo WHERE id= '$id' ";

  $result_set = mysqli_query($db, $sql);

  $result = mysqli_fetch_assoc($result_set);

  ?>
  <!-- display the Customer data -->
  <div id="content">

    <a class="back-link" href="index.php"> Back to List</a>

    <div class="page show">

      <h1> ID: <?php echo $result['id']; ?></h1>

      <div class="attributes">
        <dl>
          <dt>First Name</dt>
          <dd><?php echo $result['firstname']; ?></dd>
        </dl>
        <dl>
          <dt>Last Name</dt>
          <dd><?php echo $result['lastname']; ?></dd>
        </dl>
        <dl>
          <dt>Email Address</dt>
          <dd><?php echo $result['email']; ?></dd>
        </dl>
        <dl>
          <dt>Phone Number</dt>
          <dd><?php echo $result['phonenumber']; ?></dd>
        </dl>
        <dl>
          <dt>Password</dt>
          <dd><?php echo $result['password']; ?></dd>
        </dl>
        <dl>
          <dt>Username</dt>
          <dd><?php echo $result['username']; ?></dd>
        </dl>
          

      </div>


    </div>

  </div>

  <?php include 'footerEm.php'; ?>
</body>

</html>