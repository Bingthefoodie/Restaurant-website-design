<!-- single page form so we get the id and if we hit post the we update so we will process the update mysqli_query
and redirect to show page otherwise just display the record. -->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="/Web-Assignment02/Stylesheets/subscription.css" />
</head>
<body>
  
<?php include '../public/header.php'; ?>

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

<?php include '../public/footer.php'; ?>
