<!-- Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825) -->
<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['login_success']) || $_SESSION['login_success'] !== true) {
  header("Location: ../index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="tea station icon" href="../img/logo-white.png" />
  <link rel="stylesheet" href="../css/header.plugin.css" />
  <!-- <link rel="stylesheet" href="../css/header.css" /> -->
  <link rel="stylesheet" href="../css/index.css" />
  <link rel="stylesheet" href="../css/weOffer.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<style>
  .nav__container{
    padding:20px !important;
  }
</style>
</head>

<body>
  <!-- Header Navigation -->
  <header>
  <div class="nav__container sticky">
    <div class="nav__mobile">
      <div class="nav__logo">SPAM Tea Station</div>
      <div class="nav__btn">
        <a aria-label="Mobile menu" class="nav-toggle fade"><span></span><span class="mrg"></span><span class="mrg"></span></a>
      </div>
    </div>
      <nav class="menu-toggle">
        <ul class="nav__menu">
          <li><a href="./home.php">Home</a></li>
          <li><a href="./aboutUs.php">About us</a></li>
          
          <li><a href="./aboutTea.php">About Tea</a></li>
          <li><a href="./shop.php">Products</a></li>
          <li><a href="./addToCart.php">Add To cart</a></li>
          <li><a href="./Contact.php">Contact Us</a></li>
          <li class="dropdown"><a href="#">Profile</a>
            <ul>
              <li><a href="./profile.php"><i class="fas fa-user-circle"></i><span style="margin:0px 10px;">My Profile</span></a></li>
              <li><a href="../php/logout.php"> <i class="fas fa-sign-out-alt"></i><span style="margin:0px 10px;">Logout</span></a></li>
            </ul>
          </li>
        </ul>
      </nav>
  </div>
</header>

  <!-- Slideshow -->
  <ul class="slideshow" style="height: 80vh">
    <li>
      <div>
        <h3>Where</h3>
        <h1>Tradition Meets</h1>

        <h3>Taste</h3>
      </div>

      <span>Tea 1</span>
    </li>
    <li>
      <div>
        <h3>Uncover the Legacy</h3>
        <h1>of Tea</h1>

        <h3>at Tea Station.</h3>
      </div>

      <span>Tea 2</span>
    </li>
    <li>
      <div>
        <h3>Embark on a Unique Tea Journey</h3>
        <h3>Classic to Modern Flavors</h3>

        <h3>Tea Station Elevates Your Experience.</h3>
      </div>
      <span>Tea 3</span>
    </li>

    <li>
      <span>Tea 4</span>
    </li>
  </ul>

  <!-- What We Offer Section -->
  <div class="content-divider"></div>
  <div class="container">
    <div class="sub-container">
      <h2>What We Offer</h2>
      <ul>
        <li class="offer-list"><a href="./shop.php">All</a></li>
        <li class="offer-list"><a href="./shop.php">Nepali tea</a></li>
        <li class="offer-list"><a href="./shop.php">Indian tea</a></li>
        <li class="offer-list"><a href="./shop.php">Chinese tea</a></li>
        <li class="offer-list"><a href="./shop.php">Japanese tea</a></li>
        <li class="offer-list"><a href="./shop.php">Black tea</a></li>
        <li class="offer-list"><a href="./shop.php">Green tea</a></li>
        <li class="offer-list"><a href="./shop.php">Herbal tea</a></li>
      </ul>
      <div class="scrollable-container">
        <div class="img-container">

          <img src="https://images.pexels.com/photos/230477/pexels-photo-230477.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Nepali tea" height="100%" width="100%" />

        </div>
        <div class="img-container">

          <img src="https://media.istockphoto.com/id/1351381197/photo/warm-green-tea-on-a-wooden-table.jpg?s=1024x1024&w=is&k=20&c=2wjv4clWZKf8dJTwkqyFkdeua0dGTsaRgsqnRq6b6hI=" alt="Taiwanese tea" height="100%" width="100%" />

        </div>
        <div class="img-container">

          <img src="https://images.pexels.com/photos/327136/pexels-photo-327136.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Chinese Tea" height="100%" width="100%" />

        </div>
        <div class="img-container">

          <img src="https://images.pexels.com/photos/2013749/pexels-photo-2013749.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Japanese Tea" height="100%" width="100%" />

        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="footer-content">
      <h3 class="footer-heading">CONTACT US</h3>

      <address class="address">
        <a class="link-tel" href="tel:4099875874">+1 (409) 987–5874</a>
        <a class="link-tel" href="mailto:info@spamteastation.org">info@spamteastation.org</a>
        <p class="link-tel">6036 Richmond hwy., Alexandria, VA, 2230</p>
      </address>
    </div>

    <div class="footer-content">
      <h3 class="footer-heading">SUBSCRIBE</h3>

      <p class="link-tel">
        Enter your e-mail to receive the latest news from us.
      </p>

      <form class="subscribe-email">
        <input class="form-input" id="subscribe-form-email" placeholder="Enter your e-mail" type="email" name="email" required />
        <div>
          <button class="footer-button" type="submit">
            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
          </button>
        </div>
      </form>
    </div>

    <div class="footer-content">
      <h3 class="footer-heading">SOCIAL LINKS</h3>

      <p>Follow us on these social networks.</p>
      <div class="social-media-list">
        <a href="https://www.facebook.com/" class="fa fa-facebook social-media"></a>
        <a href="https://www.instagram.com/" class="fa fa-instagram social-media"></a>
        <a href="https://www.twitter.com/" class="fa fa-twitter social-media"></a>
        <a href="https://www.youtube.com/" class="fa fa-youtube social-media"></a>
      </div>
      <div></div>
    </div>
  </footer>

  <script>
    // Function to create and display notification
    function showNotification(message, color) {
      var notification = document.createElement('div');
      notification.textContent = message;
      notification.style.padding = '10px';
      notification.style.backgroundColor = color;
      notification.style.color = 'white';
      notification.style.position = 'fixed';
      notification.style.top = '20px'; // Set top position
      notification.style.right = '20px'; // Set right position
      notification.style.zIndex = '21000';
      document.body.appendChild(notification);

      // Hide the notification after 3 seconds
      setTimeout(function() {
        notification.style.display = 'none';
      }, 3000);
    }

    // Function to remove query parameters from URL
    function removeQueryParams() {
      var newUrl = window.location.pathname;
      history.replaceState({}, document.title, newUrl);
    }

    // Check for success or error messages in the URL and display notifications accordingly
    window.addEventListener('DOMContentLoaded', function() {
      var urlParams = new URLSearchParams(window.location.search);
      if (urlParams.has('success')) {
        var successMessage = 'Login successful!';
        showNotification(successMessage, '#4CAF50'); // Green color for success
        removeQueryParams(); // Remove query parameters from URL
      }
    });

    </script>

<script src="../js/header.plugin.js"></script>


  </body>
  </html>