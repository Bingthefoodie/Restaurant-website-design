<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/Web-Assignment02/Stylesheets/about.css">
</head>

<body>
<?php 
    include("../public/subpageHeader.php");
  ?>
  <main>
        
        <div class="aboutusbox">
        <h2 class="aboutus">ABOUT US</h2>
            <div class="aboutusbox-group">
                
            <div class="aboutboxItem">
            <img class="aboutImage" src="../Pictures/firstImage.jpg" alt="communication aboutlist image">
            </div>

            <div class="aboutboxItem">
            <p class="aboutusparagraph">
                  We are a group of friends who are big foodies and 
                  grew up in China. Being away from home made us going on this food making journey.
                  Some of us went too culinary schools in China to learn the required skills and put all 
                  our love and effort to this place. At Taste of Home, we want you to have the most authentic 
                  experience as well as taste like what your mom would serve you at home. 
            </p>
            </div>

            <div class="aboutboxItem">
            <h3 class="aboutusparagraph">How we describe us:</h3>
            
                 <p>Authentic </p>
                 <p>Not your typical Chinese food </p>
                 <p>Made with love and care</p>
         
            <h3 class="aboutusparagraph" > How others describe us: </h3>
          
                 <p>Amazing flavours</p>
                 <p>Mind blowing delicious</p>
                 <p >Homemade is the best</p>
                 <p>Tasty and comforting</p>
            </div>
            <div class="aboutboxItem">
                <img class="aboutImage" src="../Pictures/steambuns.jpg" alt="steam buns">
            </div>

            <div class="aboutlist">
                
                <img class="gridimage" src="../Pictures/jianjiao.jpg" alt="fried dumplings">
            </div>

            <div class="aboutboxItem">
                <p> Dumplings! Dumplings! Dumplings! Nothing could be more versitile than dumplings. 
                  It's eaten on every single holidays and cooked in many forms. You could have vegetarian, meat lover,
                  cheese lover, steamed, fried, boiled, endless possibilities. All our dumplings are made by hand
                   locally with the most fresh ingredients. 
                </p>
                <p><<================</p>
            </div>  

            <div class="aboutboxItem">
                <p>When I was growing up, my mom always prepared a bowl of noodles for me every morning.
                  I recreated this dish to remind myself of that moment. 
                  This bowl of Dandan noodle, we call it DanDanMian, is full of flavours. No matter how far I am 
                  away from home. I will always remember the taste.
                  =================>>
                </p>
            </div> 

            <div class="aboutboxItem">
                <img class="aboutImage" src="../Pictures/dandanmian.jpg" alt="dandanmian">
            </div>

        </div>
        </div>
        
        <section class="aboutImagebox"> 
            <div class="aboutlist-group">
            <div class="aboutlist">
                
                <img class="gridimage" src="../Pictures/mochi.jpg" alt="mochi">
            </div>
            <div class="aboutlist">
               
                <img class="gridimage" src="../Pictures/spice.jpg" alt="spice">
            </div>
            <div class="aboutlist">
                
                <img class="gridimage" src="../Pictures/zongzi.jpg" alt="zongzi">
            </div>
            <div class="aboutlist">
               
            <img class="gridimage" src="../Pictures/cutmeat.jpg"
                    alt="cutmeat">
                
            </div>
            <div class="aboutlist">
        
                <img class="gridimage" src="../Pictures/friedrice.jpg"
                    alt="friedrice">
            </div>
            <div class="aboutlist">
               
                <img class="gridimage" src="../Pictures/porkbelly.jpg" alt="porkbelly">
            </div>
            <div class="aboutlist">
               
                <img class="gridimage" src="../Pictures/dumplings.jpg"
                    alt="dumplings">
            </div>

            <div class="aboutlist">
               
            <img class="gridimage" src="../Pictures/doufubowl.jpg"
                    alt="doufubowl">
            </div>
        </div>
        </section>
</main>
<footer class="footer">
  <?php 
      include("../public/footer.php");
    ?>
</footer>

</body>
</html>
