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
  
  <header>
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
  </header>

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

  <footer class="footer-distributed">
    <div class="footer-left">
      <img src="images/assets/logo.webp" alt="Haze logo"></img>
      <p class="footer-links"><a href="#">Store</a><b> · </b><a href="#">Community</a><b> · </b><a href="#">About</a></p>
      <p class="footer-company-name">Haze &copy; 2023</p>
    </div>
    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
          <p><span>Califonia </span> US (United State)</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@haze.com">support@haze.com</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>About the company</span>
        Haze is a game store designed for passionate and nostalgic gamers who love classic games.
      </p>
      <div class="footer-icons"> 
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/in/alexandre-perch%C3%A9-857856260/"><i class="fa fa-linkedin"></i></a>
        <a href="https://www.github.com/vegasword"><i class="fa fa-github"></i></a>
      </div>
    </div>
  </footer>

  <script src="css/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/search-by-tags.js"></script>
  <script type="text/javascript" src="js/featured.js"></script>
  <script type="text/javascript" src="js/style.js"></script>
</body>

</html>