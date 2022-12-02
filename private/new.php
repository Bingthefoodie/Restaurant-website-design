<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="/Web-Assignment02/public/style.css" />
</head>
<body>
  
<?php include '/Web-Assignment02/public/header.php'; ?>

<div id="content">
  <div>
    <h1 class="NewCustomer">Thank You For Subscription</h1>

    <form action='create.php' method="POST">
    
      <dl>
        <dt>First Name</dt>
        <dd><input type="text" name="firstName" /></dd>
      </dl>
      <dl>
        <dt>Last Name</dt>
        <dd><input type="text" name="lastName" /></dd>
      </dl>
      <dl>
        <dt>Email Address</dt>
        <dd><input type="text" name="email"  /></dd>
          
      </dl>
      <dl>
        <dt>phone number</dt>
        <dd><input type="number" name="phoneNumber"  /></dd>
        </dd>
      </dl>
      <dl>
        <dt>Username</dt>
        <dd><input type="text" name="Username"  /></dd>
          
      </dl>
      <dl>
        <dt>Password</dt>
        <dd><input type="text" name="password"  /></dd>
          
      </dl>
      <div id="operations">
        <input type="submit" value="Create Customer" />
      </div>
    </form>


  </div>

</div>

<?php include '/Web-Assignment02/public/footer.php'; ?>
