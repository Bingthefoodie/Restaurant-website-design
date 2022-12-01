
<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "assignment02");

function db_connect()
{
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if (mysqli_connect_errno()) {
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
  }

  return $connection;
}

function db_disconnect($connection)
{
  if (isset($connection)) {
    mysqli_close($connection);
  }
}

?>

<!-- <?php  
    session_start();

if (!empty($_POST['firstName'])&&!empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['phoneNumber'])
!empty($_POST['pass'])&&!empty($_POST['pass2']) && !empty($_POST['email'])&&!empty($_POST['login'])){
  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $database_name="assignment02";
 $firstName=$_POST['firstName'];
 $lastName=$_POST['lastName'];
 $email=$_POST['email'];
 $phoneNumber=$_POST['phoneNumber'];
 $pass=$_POST['pass'];
 $userName=$_POST['login'];
 $error=array();
  $db_connection = mysqli_connect($server_name, $user_name, $password,$database_name);

  if(mysqli_connect_error()){
    exit('Failed to connect to MySQL: ' .mysqli_connect_error());
  }
//first check the database to make sure a user doesn't already exist with the same username or email. 
  $user_check_query="select*from userinfo where username='$login' or email='$email' limit 1";
  $result=mysqli_query($db_connection,$user_check_query);
  $user=mysqli_fetch_assoc($result);

  if($user){
    if($user['login']===$userName){
        array_push($error, "Username already exist");
    }
    if($user['email']===$email){
        array_push($error, "Email already exist")
    }
  }
//register user to database if there are no errors in the form
if(count($error)==0){

    $password=md5($pass); //encrypt the password
    $add_user_query = "INSERT INTO userinfo (firstName, lastName, email, phoneNumber, userName,pass) 
    values ('$firstName', '$lastName', ' $email','$phoneNumber','$userName','$password')";
    mysqli_query($db_connection,$add_user_query);
    $_SESSION['userName']=$userName;
    $_SESSION['success']="You are now logged in";
  }
}
?> -->