<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="style.css" />
</head>
<body>
  
<?php include 'headerEm.php'; ?>

<div id="content">

  <a class="back-link" href="<?php echo 'index.php'; ?>"> Back to List</a>

  <div class="New Customer">
    <h1>Create New Customer</h1>

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
        <dd><input type="text" name="Password"  /></dd>
          
      </dl>
      <div id="operations">
        <input type="submit" value="Create Customer" />
      </div>
    </form>


  </div>

</div>

<?php include 'footerEm.php'; ?>
