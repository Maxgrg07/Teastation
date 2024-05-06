<!-- Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825) -->

<!DOCTYPE html>
<html>

<head>
    <title>Contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="tea station icon" href="../img/logo-white.png">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="../css/header.plugin.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


    <script>
        //jquey widgets for tooltip
        $(function() {
            $(document).tooltip();
        });
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Include jQuery UI -->
    <link
      rel="stylesheet"
      href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"
    />
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

    <!-- Contact Banner -->
    <div class="contactBanner">
        <h1>CONTACT US</h1>
    </div>
    <div style="text-align: center;">
        <div id="contact_div" class="contact_div">
            <div id="form_div" class="form-div">
                <div class="description">
                    <h2>Get in Touch</h2>
                    <p>
                        We are available 24/7 by fax, e-mail or by phone. You can
                        also use our quick contact form to ask a question about our
                        services and products we offer.
                    </p>
                </div>
                <div id='formContainer'>
                <form id='myForm'>
                    <!-- <div id="form-div" style="display: flex;"> -->
                 
                        <input type="text" class="contact-form-input" id="firstname" name="firstname" placeholder="Enter your name.." title="We request your name for statistical purposes only." required>
                        <input type="number"  class="contact-form-input" id="phonenumber" name="phonenumber" placeholder="Enter your phone number.." title="We collect your phone number solely for statistical analysis." required>
                        <input type="email" class="form-text-input" id="email" name="email" placeholder="Enter your email.." title="We gather your email address purely for statistical analysis." required>

                        <textarea class="form-text-input" id='subject'name="subject" placeholder="Write something.." title="We request your message for statistical purposes exclusively." style="height:100px; font-family: Arial, Helvetica, sans-serif;" required></textarea>
                        <input class="submit-button" type="submit" value="Submit">
                    
                </form>
            </div>
            </div>
            <div id="contact-side-bar" class="contact-side-bar">
                <div class="media_div">
                    <h3>Visit Our Shop</h3>
                    <p>10AM-6PM (MON-FRI)</p>
                </div>
                <div class="media_div">
                    <h3>Social Media</h3>
                    <a href="https://www.facebook.com/" class="fa fa-facebook icon-social-media icon-social-media-facebook"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram icon-social-media icon-social-media-fa-instagram"></a>
                    <a href="https://www.twitter.com/" class="fa fa-twitter icon-social-media icon-social-media-fa-twitter"></a>
                    <a href="https://www.youtube.com/" class="fa fa-youtube icon-social-media icon-social-media-fa-youtube "></a>
                </div>

                <div class="media_div">
                    <h3>Phone</h3>
                    <a href="#" class="fa fa-phone icon-fa-phone"></a>
                    <a href="tel:+1(409)987-5874">+1(409)987-5874</a>
                </div>

                <div class="media_div">
                    <h3>Email</h3>
                    <a href="#" class="fa fa-envelope icon-fa-envelope"></a>
                    <a href="mailto:info@spamteastation.org">info@spamteastation.org</a>
                </div>

                <div class="media_div">
                    <h3>Address</h3>
                    <a href="#" class="	fa fa-map-marker icon-fa-map-marker"></a>
                    <a href="https://goo.gl/maps/pZqET6iLJ4usDDUv8">6036 Richmond hwy., Alexandria, VA, 2230</a>
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
  
    <script>
      $(document).ready(function () {
        $("#myForm").submit(function (event) {
          event.preventDefault(); // Prevent form from submitting normally

          // Perform AJAX or form submission handling here if needed

          $("#formContainer").effect("bounce", { times: 3, distance: 20 }, 500); // Apply bounce effect

          // Clear input fields
          $("#firstname").val("");
          $("#phonenumber").val("");
          $("#email").val("");
          $("#subject").val("");
        });
      });
    </script>

    <script src="../js/header.plugin.js"></script>

</body>

</html>