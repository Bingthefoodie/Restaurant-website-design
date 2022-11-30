<head>
    <title>Subscription</title>
    <link rel="stylesheet" href="/Web-Assignment02/Stylesheets/subscription.css">
    <script src="/Web-Assignment02/private/subscription.js" defer></script>
</head>

<body>
<?php 
 include("../public/subpageHeader.php");
?>
    <div class="formcontainer">
        <h1>Sign up</h1>
        <hr>
        <form name="form" id="myForm" action="welcome.php" method="post" onsubmit="return validate();">
            
            <div class="userFirstName">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" placeholder="First Name">
            </div>

            <div class="userLastName">
                <label for="lasttName">Last Name</label>
                <input type="text" name="lastName" id="lastName" placeholder="Last Name">
            </div>

            <div class="textEmail">
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" placeholder="Email">
            </div>

            <div class="phoneNumber">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" name="phoneNumber" id="phoneNumber" placeholder="phoneNumber">
            </div>

            <div class="textUserName">
                <label for="login">User Name</label>
                <input type="text" name="login" id="login" placeholder="User name">
            </div>

            <div class="textPassword">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" placeholder="Password">
            </div>
        
            <div class="textRetypePassword">
                <label for="pass2">Re-type Password</label>
                <input type="password" id="pass2" placeholder="Password">
            </div>

            <div class="checkboxNews">
                <input type="checkbox" name="newsletter" id="newsletter" onclick="validateNews()">
                <label for="newsletter">I agree to receive monthly Taste of home special menu</label>
            </div>

            <div class="checkboxTerm">
                <input type="checkbox" name="terms" id="terms">
                <label for="terms">I agree to the terms and conditions</label>
            </div>

            <div class="centerButton">
            <button id="sign-up" type="submit" class="button button1">Sign-Up</button>
            <button  type="reset"class="button button2">Reset</button>
            </div>

        </form>
    </div>

<?php 
      include("../public/footer.php");
?>
</body>
</html>