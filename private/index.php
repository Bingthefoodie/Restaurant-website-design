<!-- landing page -->
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css" />
  <title>PHP_DB</title>
</head>

<body>
  <?php include("headerEm.php");
  //connect with the database
  
  require_once('database.php');

  $db = db_connect(); //my connection

  $sql = "SELECT * FROM userinfo"; //query string
  //execute the query
  $result_set = mysqli_query($db, $sql);
  ?>

  <div id="content">
    <div class="subjects listing">
      <h1>CUSTOMERS</h1>

      <!-- <div class="actions">
        <a class="action" href="new.php">Create New Customer</a>
      </div> -->

      <table class="list">
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email Address</th>
          <th>Phone Number</th>
          <th>User Name</th>
          <th>Password</th>
        </tr>
        <!-- Process the results -->
        <?php while ($results = mysqli_fetch_assoc($result_set)) { ?>
          <tr>
            <td><?php echo $results['id']; ?></td>
            <td><?php echo $results['firstname']; ?></td>
            <td><?php echo $results['lastname']; ?></td>
            <td><?php echo $results['email']; ?></td>
            <td><?php echo $results['phonenumber']; ?></td>
            <td><?php echo $results['username']; ?></td>
            <td><?php echo $results['password']; ?></td>
            <!-- send the id as parameter -->
            <td><a class="action" href="<?php echo "show.php?id=" . $results['id']; ?>">View</a></td>
            <td><a class="action" href="<?php echo "edit.php?id=" . $results['id']; ?>">Edit</a></td>
            <td><a class="action" href=<?php echo "delete.php?id=" . $results['id']; ?>">delete</a></td>

          </tr>
        <?php } ?>
      </table>
      <br>
      <br>
      <br>
      <br>
      <!-- add the footer here -->
      <?php include("footerEm.php"); ?>

</body>

</html>