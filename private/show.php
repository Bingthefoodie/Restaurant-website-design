<!-- single page form so we get the id and if we hit post the we update so we will process the update mysqli_query
and redirect to show page otherwise just display the record. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="/Web-Assignment02/Stylesheets/style-show.css" />
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <?php
  //conect to the datbase
  
  require_once('database.php');
 
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
  <?php 
    include("../public/subpageHeader.php");
  ?>
    <div class="pageshow">
<h1 class="NewCustomer">Thank You For Subscription</h1>
<div class="info">
<h3>Your information is as below:</h3>
      <h3> Customer ID: <?php echo $result['id']; ?></h3>
</div>
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
  <?php 
    include("../public/footer.php");
  ?>

</body>

</html>