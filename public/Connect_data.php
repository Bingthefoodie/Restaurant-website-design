<?php
    //specify the server name and here it is localhost
    $server_name = "localhost";

    //specify the username - here it is root
    $user_name = "root";

    //specify the password - it is empty
    $password = "";

    // Creating the connection by specifying the connection details
    $connection = mysqli_connect($server_name, $user_name, $password);

    // Checking the  connection
    if (!$connection) {
    die("Failed ". mysqli_connect_error());
    }
    echo "Connection established successfully";

if (!empty($_POST['firstName'])&&!empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['phoneNumber'])
!empty($_POST['pass'])&&!empty($_POST['pass2']) && !empty($_POST['email'])&&!empty($_POST['login'])){
  $server_name = "localhost";
  $user_name = "root";
  $password = "";
 $firstName=$_POST['firstName'];
 $lastName=$_POST['lastName'];
 $email=$_POST['email'];
 $phoneNumber=$_POST['phoneNumber'];
 $pass=$_POST['pass'];
 $userName=$_POST['login'];
  $db_connection = mysqli_connect($server_name, $user_name, $password);

  if($db_connection) {
    
    $add_user_query = "INSERT INTO userinfo (firstName, lastName, email, phoneNumber, userName,pass) 
    values ('$firstName', '$lastName', ' $email','$phoneNumber','$userName','$pass',)";
    
    $result = mysqli_query($db_connection,$add_user_query);
    
    $to_do_list = "SELECT * from to_do_list";
    
    $result = mysqli_query($db_connection,$to_do_list);
  

    
    
  } else {
    echo ':.(';
  }