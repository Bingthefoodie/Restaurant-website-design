<!-- single page form so we get the id and if we hit post the we update so we will process the update mysqli_query
and redirect to show page otherwise just display the record. -->
<?php
require_once('Connect_data.php');
$db = db_connect();


if(!isset($_GET['id'])) { //check if we get the id
  header("Location:  index.php");
}
$id = $_GET['id'];
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  //access the employee information
  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $email=$_POST['email'];
  $phoneNumber=$_POST['phoneNumber'];
  $pass=$_POST['pass'];
  $userName=$_POST['login'];
  //update the table with new information
  $sql="UPDATE userinfo set userName = '$userName' , email= '$email' , phoneNumber= '$phoneNumber' where id = '$id' ";
  $result = mysqli_query($db, $sql);
  //redirect to show page
    header("Location: welcome.php?id=  $id");
  }
  // display the employee information
  else {
$sql = "SELECT * FROM userinfo WHERE id= '$id' ";
    
$result_set = mysqli_query($db, $sql);
    
$result = mysqli_fetch_assoc($result_set);
  }

?>

<?php include 'header.php' ?>;

<div id="content">

  <a class="back-link" href="index.php"> Back to the home page</a>

  <div class="page edit">
    <h1>Edit user data</h1>

    <form form action="<?php echo 'edit.php?id=' . $result['id']; ?>"  method="post">
      <dl>
        <dt> user name </dt>
        <dd><input type="text" name="userName" value="<?php echo $result['userName']; ?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>email</dt>
        <dd><input type="text" name="email" value="<?php echo $result['email']; ?>" /></dd>
      </dl>
      <dl>
        <dt>phone number</dt>
        <dd><input type="text" name="phoneNumber" value="<?php echo $result['phoneNumber']; ?>" /></dd>

        </dd>
      </dl>
      
      <div id="operations">
        <input type="submit" value="Edit user data" />
      </div>
    </form>

  </div>

</div>

<?php include 'footer.php'; ?>
