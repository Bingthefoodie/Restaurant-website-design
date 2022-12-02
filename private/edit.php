<!-- single page form so we get the id and if we hit post the we update so we will process the update mysqli_query
and redirect to show page otherwise just display the record. -->
<?php
require_once('database.php');
$db = db_connect();


if(!isset($_GET['id'])) { //check if we get the id
  header("Location:  index.php");
}
$id = $_GET['id'];
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  //access the Customer information
  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $email=$_POST['email'];
  $phoneNumber=$_POST['phoneNumber'];
  $pass=$_POST['password'];
  $userName=$_POST['username'];
  //update the table with new information
  $sql="UPDATE userinfo set username = '$userName' , email= '$email' , phoneNumber= '$phoneNumber' where id = '$id' ";
  $result = mysqli_query($db, $sql);
  //redirect to show page
    header("Location: show.php?id=  $id");
  }
  // display the Customer information
  else {
$sql = "SELECT * FROM userinfo WHERE id= '$id' ";
    
$result_set = mysqli_query($db, $sql);
    
$result = mysqli_fetch_assoc($result_set);
  }

?>

<?php include 'headerEm.php' ?>;

<div id="content">

  <a class="back-link" href="index.php"> Back to the home page</a>

  <div class="page edit">
    <h1>Edit user data</h1>

    <form form action="<?php echo 'edit.php?id=' . $result['id']; ?>"  method="post">
    <dl>
        <dt> First Name </dt>
        <dd><input type="text" name="userName" value="<?php echo $result['firstname']; ?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt> Last Name </dt>
        <dd><input type="text" name="userName" value="<?php echo $result['lastname']; ?>" /></dd>
        </dd>
      </dl>  
    <dl>
        <dt> User Name </dt>
        <dd><input type="text" name="username" value="<?php echo $result['username']; ?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><input type="text" name="email" value="<?php echo $result['email']; ?>" /></dd>
      </dl>
      <dl>
        <dt> Password </dt>
        <dd><input type="text" name="password" value="<?php echo $result['password']; ?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>Phone Number</dt>
        <dd><input type="text" name="phoneNumber" value="<?php echo $result['phonenumber']; ?>" /></dd>

        </dd>
      </dl>
      
      <div id="operations">
        <input type="submit" value="Edit user data" />
      </div>
    </form>

  </div>

</div>

<?php include 'footerEm.php'; ?>
