<!-- Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825) -->

<?php
// Start session to access session variables
session_start();

// Check if the user is logged in (you can implement this logic based on your authentication system)
$isLoggedIn = isset($_SESSION['user_id']); // Assuming 'user_id' is set in the session upon login

// If the user is logged in, display the logout button
if ($isLoggedIn) {
    echo '<a href="logout.php">Logout</a>'; // Replace 'logout.php' with the actual logout URL
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="tea station icon" href="../img/logo-white.png">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/header.plugin.css" />

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
    <!-- About Banner -->
    <div class="aboutBanner">
        <h1>About US</h1>
    </div>
    <div>
        <section id="#aboutpage">

            <article class="about-tea">
                <div class="about-content">We are an online tea shop providing clients all over the world with
                    high-quality and affordable
                    teas of our own production. <br> At Tea Station, we are passionate about sharing the art and
                    heritage of tea with the world.
                </div>
            </article>

            <!-- Main Content Section -->
            <div class="mainDiv">
                <div class="subDiv about-video">
                    <iframe style="height: 100%; width: 100%;" src="https://www.youtube.com/embed/OS2tMqDIYfw?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <!-- About Content Blocks -->
                <div class="subDiv">
                    <div class="index-list-modern-block">
                        <div class="index-list-modern-triangle">
                        </div>
                        <div class="list-index-counter"></div>
                        <h3>Our Journey</h3>
                        <div class="divider"></div>
                        <p>Our team aspires to bring you the world’s best teas and share the tea life we love.
                            Embark on a tea-filled journey with us as we explore the enchanting world of fine teas.
                            From the majestic mountains of Nepal to the traditional tea gardens of China, experience
                            a delightful array of flavors and aromas.
                            Join us in discovering the rich heritage and craftsmanship behind each cup, sip by sip.
                        </p>
                    </div>
                    <div class="index-list-modern-block">
                        <div class="index-list-modern-triangle">
                        </div>
                        <div class="list-index-counter"></div>
                        <h3>Our Tea Collection</h3>
                        <div class="divider"></div>
                        <p>Over the years, we have gathered the team of dedicated tea experts.
                            From rare and premium selections to timeless classics, each tea embodies the essence of
                            its origin.
                            Discover a world of captivating flavors and fragrances, meticulously sourced to elevate
                            your tea
                            experience to new heights.
                        </p>
                    </div>

                    <div class="index-list-modern-block">
                        <div class="index-list-modern-triangle">
                        </div>
                        <div class="list-index-counter"></div>
                        <h3>Customer experience</h3>
                        <div class="divider"></div>
                        <p>We offer a wide range of teas of our own production and by other manufacturers.
                        </p>
                    </div>
                </div>

            </div>
        </section>

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

            <p class="link-tel">Enter your e-mail to receive the latest news from us.
            </p>

            <form class="subscribe-email">
                <input class="form-input" id="subscribe-form-email" placeholder="Enter your e-mail" type="email" name="email" required>
                <div>
                    <button class="footer-button" type="submit"> <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                </div>
            </form>
        </div>

        <div class="footer-content">
            <h3 class="footer-heading">SOCIAL LINKS</h3>

            <p>Follow us on these social networks.
            </p>
            <div class="social-media-list">
                <a href="https://www.facebook.com/" class="fa fa-facebook social-media"></a>
                <a href="https://www.instagram.com/" class="fa fa-instagram social-media"></a>
                <a href="https://www.twitter.com/" class="fa fa-twitter social-media"></a>
                <a href="https://www.youtube.com/" class="fa fa-youtube social-media"></a>
            </div>
            <div>

            </div>
        </div>
    </footer>

    <script src="../js/header.plugin.js"></script>

</body>

</html>