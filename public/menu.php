<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../Web-Assignment02/private/menuFilter.js" defer></script>
  <title>Menu</title>
  <?php 
    include("subpageHeader.php");
  ?>
</head>

<body>
  <main>
    <div class="menu-container">
      <div class="filterContainer">
        <p>Fliter:</p>
          <div class="filterchoices">
              <button type="button" class="btn-danger btn-lg filter-btn" id="VG">Vegetarian</button>
              <button type="button" class="btn-danger btn-lg filter-btn" id="GF">Gluten-free</button>
              <button type="button" class="btn-success btn-lg filter-btn" id="a">All</button>
          </div>
      </div>
      <div class="dropdown dishes-css">
        <button type="button" class="btn-success btn-lg dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">Dishes Type
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
          <li role="presentation">
            <a role="menuitem" tabindex="-1" onclick="appFilter()">Appetizers</a>
          </li>
          <li role="presentation">
            <a role="menuitem" tabindex="-1" onclick="mainFilter()">Main Dishes</a>
          </li>
          <li role="presentation">
            <a role="menuitem" tabindex="-1" onclick="dessFilter()">Desserts</a>
          </li>
          <li role="presentation">
            <a role="menuitem" tabindex="-1" onclick="allFilter()">All Dishes</a>
          </li>
        </ul>
      </div>
        <h2 class="menu-header">- Appetizers -</h2>
        <ul class="menu-iterm-group" id="Appe">
          <li class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Pan fried buns (6pcs)</span>
              <span class="dish-price">$9.95</span>
            </h3>
            <p class="dish-text">Homemade Chinese buns filled with savory pork and ginger, pan-fried to a golden hue,
              and topped with chili oil.</p>
          </li>
          <li class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Spring rolls (6pcs)</span>
              <span class="dish-price">$9.95</span>
            </h3>
            <p class="dish-text">Homemade Chinese-style deep fried spring rolls filled with minced vegetables, seafood, poultry, or
              meat, folded into a food wrapper made from dough.</p>
            <span class="menu-dishOption">- Choice of chicken, pork, or vegetarian </span>
            <strong class="foodTag">(VG)</strong>
          </li>
          <li class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Potstickers (6pcs)</span>
              <span class="dish-price">$9.99</span>
            </h3>
            <p class="dish-text">Small Chinese-style dumplings stuffed with various ingredients such as meats or fish,
              vegetables, and seasonings, that are wrapped and pan-cooked before serving.</p>
            <span class="menu-dishOption">- Choice of chicken, pork, or vegetarian </span>
            <strong class="foodTag">(VG)</strong>
          </li>
          <li class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Hot and sour soup</span>
              <span class="dish-price">$6.99</span>
            </h3>
            <p class="dish-text">Thickened broth filled with mushrooms, tofu and silky egg ribbons.</p>
          </li>
          <div class="menu-image">
            <img class="menu-dishImage" src="/Web-Assignment02/Pictures/menupotstickers.jpg" alt="potstickers">
            <img class="menu-dishImage" src="/Web-Assignment02/Pictures/menuspringrolls.jpg" alt="springrolls">
          </div>
        </ul>
        <h2 class="menu-header">- Main Dishes -</h2>
        <ul class="menu-iterm-group" id="main">
          <li class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Noodles with sesame paste</span>
              <span class="dish-price">$11.25</span>
            </h3>
            <p class="dish-text">- Fresh homemade noodles mixed with sweet and savory richy flavored sauce, crunchy peanuts, and sesame seeds.<strong
              class="foodTag">(VG)</strong></p>
          </li>
          <li class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Yeung chow fried rice</span>
              <span class="dish-price">$12.50</span>
            </h3>
            <p class="dish-text">- Yeung chow-style fried rice with BBQ pork, shrimp, egg, and green peas.</p>
          </li>
          <li class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Beef chow fun</span>
              <span class="dish-price">$12.50</span>
            </h3>
            <p class="dish-text">- Cantonese-style stir-fried wide rice noodles with beef and bean sprouts.</p>
          </li>
          <li class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Cantonese Pan-fried noodles</span>
              <span class="dish-price">$11.50</span>
            </h3>
            <p class="dish-text">- Slightly crispy noodles with green onion, sweet peppers, shredded carot, bean sprouts and soy sauce.</p>
            <strong class="foodTag">(VG)</strong>
          </li>
          <li class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Soy sauce chicken (half/whole)</span>
              <span class="dish-price">$13.50(half) / $27.00(whole)</span>
            </h3>
            <p class="dish-text">- Cantonese-style chicken cooked with soy sauce.</p>
          </li>
          <div class="menu-image">
            <img class="menu-dishImage" src="/Web-Assignment02/Pictures/menufriednoodles.jpg" alt="Cantonese Pan-fried noodles">
            <img class="menu-dishImage" src="/Web-Assignment02/Pictures/menuchicken.jpg" alt="Soy sauce chicken">
          </div>
        </ul>
        <h2 class="menu-header">- Desserts -</h2>
        <ul class="menu-iterm-group" id="dess">
          <li class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Egg tarts (3pcs)</span>
              <span class="dish-price">$8.00</span>
            </h3>
            <p class="dish-text">Chinese-style homemade egg tart, delicious pastry consisting of a flaky outer shell with a creamy, but firm egg custard in the center.</p>
          </li>
          <li class="menu-iterm">
            <h3 class="menu-iterm-header">
              <span class="dish-name">Cream-filled Snowball Mochi (1pc)</span>
              <span class="dish-price">$5.00</span>
            </h3>
            <p class="dish-text">Homemade sweet pounded rice dough wrapped with creamy fillings.</p>
            <span class="menu-dishOption">- Choice of flavors: Mango, Taro, Green tea, Coffee</span>
            <strong class="foodTag">(GF)</strong>
          </li>
          <div class="menu-image">
            <img class="menu-dishImage" src="/Web-Assignment02/Pictures/menumochi.jpg" alt="Mochi">
            <img class="menu-dishImage" src="/Web-Assignment02/Pictures/menueggtart.jpg" alt="egg tarts">
          </div>
        </ul>
    </div>
  </main>
  <footer>
  <?php 
      include("../public/footer.php");
    ?>
  </footer>

</body>

</html>
