<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taste of Home</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
</head>

<body>
<?php 
    include("subpageHeader.php");
  ?>
  <main>
    <div class="menu-container">
      <div class="filterContainer">
        <input type="checkbox" name="filterCheck" id="filterCheck" onclick="menuFilter()">
        <label for="menu-filter">Filter:</label>
      </div>
        <h2 class="menu-header">- Appetizers -</h2>
        <div class="menu-iterm-group">
          <div class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Pan fried buns (6pcs)</span>
              <span class="dish-price">$9.95</span>
            </h3>
            <p class="dish-text">Homemade Chinese buns filled with savory pork and ginger, pan-fried to a golden hue,
              and topped with chili oil.</p>
          </div>
          <div class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Spring rolls (6pcs)</span>
              <span class="dish-price">$9.95</span>
            </h3>
            <p class="dish-text">Homemade Chinese-style deep fried spring rolls filled with minced vegetables, seafood, poultry, or
              meat, folded into a food wrapper made from dough.</p>
            <span class="menu-dishOption">- Choice of chicken, pork, or vegetarian <strong
                class="foodTag">(VG)</strong></span>
          </div>
          <div class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Potstickers (6pcs)</span>
              <span class="dish-price">$9.99</span>
            </h3>
            <p class="dish-text">Small Chinese-style dumplings stuffed with various ingredients such as meats or fish,
              vegetables, and seasonings, that are wrapped and pan-cooked before serving.</p>
            <span class="menu-dishOption">- Choice of chicken, pork, or vegetarian <strong
                class="foodTag">(VG)</strong></span>
          </div>
          <div class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Hot and sour soup</span>
              <span class="dish-price">$6.99</span>
            </h3>
            <p class="dish-text">Thickened broth filled with mushrooms, tofu and silky egg ribbons.</p>
          </div>
          <div class="menu-image">
            <img class="menu-dishImage" src="Pictures/menupotstickers.jpg" alt="potstickers">
            <img class="menu-dishImage" src="Pictures/menuspringrolls.jpg" alt="springrolls">
          </div>
        </div>
        <h2 class="menu-header">- Main Dishes -</h2>
        <div class="menu-iterm-group">
          <div class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Noodles with sesame paste</span>
              <span class="dish-price">$11.25</span>
            </h3>
            <p class="dish-text">- Fresh homemade noodles mixed with sweet and savory richy flavored sauce, crunchy peanuts, and sesame seeds.<strong
              class="foodTag">(VG)</strong></p>
          </div>
          <div class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Yeung chow fried rice</span>
              <span class="dish-price">$12.50</span>
            </h3>
            <p class="dish-text">- Yeung chow-style fried rice with BBQ pork, shrimp, egg, and green peas.</p>
          </div>
          <div class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Beef chow fun</span>
              <span class="dish-price">$12.50</span>
            </h3>
            <p class="dish-text">- Cantonese-style stir-fried wide rice noodles with beef and bean sprouts.</p>
          </div>
          <div class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Cantonese Pan-fried noodles</span>
              <span class="dish-price">$11.50</span>
            </h3>
            <p class="dish-text">- Slightly crispy noodles with green onion, sweet peppers, shredded carot, bean sprouts and soy sauce.<strong
              class="foodTag">(VG)</strong></p>
          </div>
          <div class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Soy sauce chicken (half/whole)</span>
              <span class="dish-price">$13.50(half) / $27.00(whole)</span>
            </h3>
            <p class="dish-text">- Cantonese-style chicken cooked with soy sauce.</p>
          </div>
          <div class="menu-image">
            <img class="menu-dishImage" src="Pictures/menufriednoodles.jpg" alt="Cantonese Pan-fried noodles">
            <img class="menu-dishImage" src="Pictures/menuchicken.jpg" alt="Soy sauce chicken">
          </div>
          <h2 class="menu-header">- Desserts -</h2>
          <div class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Egg tarts (3pcs)</span>
              <span class="dish-price">$8.00</span>
            </h3>
            <p class="dish-text">Chinese-style homemade egg tart, delicious pastry consisting of a flaky outer shell with a creamy, but firm egg custard in the center.</p>
          </div>
          <div class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Cream-filled Snowball Mochi (1pc)</span>
              <span class="dish-price">$5.00</span>
            </h3>
            <p class="dish-text">Homemade sweet pounded rice dough wrapped with creamy fillings.</p>
            <span class="menu-dishOption">- Choice of flavors: Mango, Taro, Green tea, Coffee<strong
              class="foodTag">(GF)</strong></span>
          </div>
          <div class="menu-image">
            <img class="menu-dishImage" src="Pictures/menumochi.jpg" alt="Mochi">
            <img class="menu-dishImage" src="Pictures/menueggtart.jpg" alt="egg tarts">
          </div>
    </div>
  </main>
  <footer class="footer">
  <?php 
      include("footer.php");
    ?>
  </footer>

</body>

</html>