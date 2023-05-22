<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA Compatible" cotnent="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Haze | Homepage</title>
</head>

<body onresize="centerNavbar()">
  <?php include 'src/init.php' ?>
  <div class="topbar">
    <div id="logo">
      <img src="images/assets/logo.webp" alt="Haze logo"></img>
    </div>

    <div id="navbar">
      <div class="navbar-item"><a href="#" title="Store">STORE</a></div>
      <div class="navbar-item"><a href="#" title="Community">COMMUNITY</a></div>
      <div class="navbar-item"><a href="#" title="About">ABOUT</a></div>
      <div id="search-area">
        <input type="text" placeholder="Find your next game" id="search-bar">
        <a href="#" title="Search" id="search-icon"><i class="fa fa-search"></i></a>
      </div>
    </div>

    <div id="userspace">
      <img src="images/assets/shopping_cart.webp" alt="Shopping cart"></img>
      <img src="images/assets/default_profile_picture.webp" alt="Profile picture"></img>
    </div>
  </div>

  <main>
    <div id="featured">
      <div class="featured-button">
        <button id="featured-button-left" onclick="moveSlides(-1)">
          <i class="fa fa-arrow-left"></i>
        </button>
      </div>
      <?php include 'src/featured.php'?>
      <div class="featured-button">
        <button id="featured-button-right" onclick="moveSlides(1)">
          <i class="fa fa-arrow-right"></i>
        </button>
      </div>
    </div>

    <div id="browse">
      <div class="browse-category">TOP SELLERS</div>
      <?php include 'src/topsellers.php' ?>
      <div class="browse-category">BROWSE LATEST GAMES</div>
      <div class="browse-container">
        <div class="browse-search">
          <h3>Search by tags</h3>
          <div class="browse-by-tags">
            <form>
              <?php include 'src/gametags.php'?>
            </form>
          </div>
        </div>
        <div class="browse-item-container" id="search-results"></div>
      </div>
      <div class="browse-item-container" id="search-results"></div>
    </div>

  </main>

  <!-- TODO
  <footer>
    <img src="" alt="Instagram"></img>
    <img src="" alt="Twitter"></img>
    <a href="">Terms of Service</a>
    <a href="">Privacy Policy</a>
    <a href="">Cookies</a>
    <a href="">About Haze</a>
  </footer>
  -->
  <script src="css/jquery-3.6.0.min.js"></script>
  <script tpye="text/javascript" src="js/search-by-tags.js"></script>
  <script type="text/javascript" src="js/featured.js"></script>
  <script type="text/javascript" src="js/style.js"></script>
</body>

</html>