<?php

require_once('database.php');
include "header.php";
$db = db_connect();

// Handle form values sent by new.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //make sure we submit the data
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $phoneNumber=$_POST['phoneNumber'];
    $pass=$_POST['pass'];
    $userName=$_POST['login'];
  //prepare your query string
  $sql = "INSERT INTO userinfo (firstName, lastName, email, phoneNumber, userName,password) 
  values ('$firstName', '$lastName', ' $email','$phoneNumber','$userName','$pass')";
  $result = mysqli_query($db, $sql);
  // For INSERT statements, $result is true/false

  $id = mysqli_insert_id($db); //the mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) 
  //redirect to show page with generated id as a parameter
  header("Location: welcome.php?id=  $id");
} else {
  header("Location:  new.php");
}

?>