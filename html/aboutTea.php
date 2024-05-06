<!-- Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825) -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="tea station icon" href="../img/logo-white.png" />
  <title>About Tea</title>
  <link rel="stylesheet" href="../css/aboutTea.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../css/header.plugin.css" />

  <!-- For jQuery -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" />
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>

  <!-- Link to Magnific Popup CSS file -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
  <!-- jQuery library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Magnific Popup JavaScript file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <!-- Your custom CSS -->

  <!-- Custom jquery theme-->
  <script src="../jquery-theme/custom-theme/jquery-ui.min.js"></script>
  <link src="../jquery-theme/custom-theme/jquery-ui.css" rel="stylesheet" />
  <link href="../jquery-theme/custom-theme/jquery-ui.css" rel="stylesheet" />

  <script>
    $(function() {
      $(".container-1").accordion({
        collapsible: true,
        active: false,
        heightStyle: "content",
      });
    });

    $(document).ready(function() {
      $(".image-popup-vertical-fit").magnificPopup({
        type: "image",
        closeOnContentClick: true,
        mainClass: "mfp-img-mobile",
        image: {
          verticalFit: true,
        },
      });
    });
  </script>
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

  <!-- Banner Section -->
  <div class="contactBanner">
    <h1>About Tea</h1>
  </div>

  <!-- Main Content Section -->
  <section class="main-tea-container">
    <div class="container-1">
      <h3>TEAS OF THE WORLD</h3>
      <div>
        <p>
          Teas of the world, from Japan's delicate greens to India's robust
          blacks, offer a rich tapestry of flavors. China's diverse varieties,
          Sri Lanka's brisk Ceylon, and Africa's herbal infusions add to the
          global tea culture. Each cup tells a story of tradition, inviting
          exploration and connection to diverse cultures.
        </p>
      </div>
      <h3>APPRECIATION</h3>
      <div>
        <p>
          Tea appreciation is an art that embraces the diverse flavors and
          cultural heritage of tea. It involves understanding brewing
          techniques, origins, and processing methods. From Japanese matcha
          ceremonies to Chinese tea rituals, it fosters mindfulness and
          connection. Appreciating tea encourages a deeper respect for
          craftsmanship and a slower pace of life. Whether enjoyed alone or
          shared, it offers moments of tranquility and joy in each sip.
        </p>
      </div>
      <h3>TEA CUSTOMS AND CULTURE</h3>
      <div>
        <p>
          Tea customs and culture vary widely across the globe, from formal
          ceremonies in Japan to casual gatherings in England. In China,
          Gongfu tea ceremonies highlight precision and mindfulness, while in
          Morocco, mint tea symbolizes hospitality and friendship. India's
          chai culture thrives in bustling streets and cozy homes, fostering
          social bonds and conversation. Teahouses in Turkey serve as vibrant
          hubs for community engagement and relaxation. Each tradition
          reflects the unique values and rituals associated with tea in
          different societies.
        </p>
      </div>
      <h3>Health</h3>
      <div>
        <p>
          Tea offers numerous health benefits, including antioxidant
          properties that may reduce the risk of chronic diseases. Compounds
          like catechins in green tea and theaflavins in black tea may promote
          heart health by improving cholesterol levels and reducing blood
          pressure. Tea's caffeine content can enhance alertness and mental
          focus, while its amino acid L-theanine may induce relaxation without
          drowsiness. Studies suggest regular tea consumption may also support
          weight management and improve immune function. However, moderation
          is key to reap the full benefits without adverse effects.
        </p>
      </div>
    </div>
    <!-- Container 2 -->
    <div class="container-2">
      <h3>
        Explore the world of tea! Learn more about origin countries of various
        teas
      </h3>
      <div class="tea-container">
        <div class="tea-content">
          <div class="tea-container-image">
            <a class="image-popup-vertical-fit" href="../img/tea.jpg" title="Nepali Tea picture">
              <img src="../img/tea.jpg" width="768" height="591" alt="Nepali Tea" />
            </a>
          </div>
          <div class="tea-content-body">
            <h5>Guide to Nepali Teas</h5>
            <div class="divider"></div>
            <p>
              Nepali tea, also known as Himalayan tea, is a lesser-known gem
              in the world of tea production. Situated in the eastern
              Himalayan region, Nepal boasts ideal growing conditions, with
              high altitudes, fertile soil, and a unique combination of
              climate and topography. These factors contribute to the
              development of exceptional teas with distinctive flavors and
              aromas.
            </p>
          </div>
        </div>
        <div class="tea-content tea-reverse">
          <div class="tea-container-image">
            <a class="image-popup-vertical-fit" href="../img/teas/image3.jpg" title="Taiwanese Tea picture">
              <img src="../img/teas/image3.jpg" width="768" height="591" alt="Taiwanese Tea" />
            </a>
          </div>
          <div class="tea-content-body">
            <h5>Guide to Taiwan Teas</h5>
            <div class="divider"></div>
            <p>
              Oolong tea is the main type of tea that is produced and consumed
              in Taiwan. There are many kinds of oolong teas produced in
              taiwan. <br />
              Taiwanese tea, also known as "Formosa tea," has a long and
              fascinating history deeply intertwined with the island's culture
              and geography. Renowned for its exceptional quality and unique
              flavors, Taiwanese teas are highly sought after by tea
              connoisseurs worldwide.
            </p>
          </div>
        </div>
        <div class="tea-content">
          <div class="tea-container-image">
            <a class="image-popup-vertical-fit" href="../img/teas/image2.jpg" title="Chinese Tea picture">
              <img src="../img/teas/image2.jpg" width="768" height="591" alt="Chinese Tea" />
            </a>
          </div>
          <div class="tea-content-body">
            <h5>Famous Chinese Teas</h5>
            <div class="divider"></div>
            <p>
              Dragon Well (or Long Jing) tea has been famous in China since
              the Tang Dynasty. Known then as “Fragrant Forest Mist”. Chinese
              tea has an extensive and storied history that spans over
              thousands of years, making it one of the oldest and most
              influential tea cultures in the world. The ancient legend of
              Emperor Shen Nong, who is said to have discovered tea
              accidentally, highlights the significance of tea in Chinese
              society and its roots in traditional medicine and culture.
            </p>
          </div>
        </div>
        <div class="tea-content tea-reverse">
          <div class="tea-container-image">
            <a class="image-popup-vertical-fit" href="../img/teas/image4.jpg" title="Japanse Tea picture">
              <img src="../img/teas/image4.jpg" width="768" height="591" alt="Japanese Tea" />
            </a>
          </div>
          <div class="tea-content-body">
            <h5>Guide to Japanese Teas</h5>
            <div class="divider"></div>
            <p>
              Green tea is the main type of tea that is produced and consumed
              in Japan. There are many kinds of green tea produced in
              japan.<br />
              Japanese tea has a rich and diverse history, deeply ingrained in
              the cultural fabric of Japan. It encompasses various types, each
              with its unique flavors, brewing techniques, and health
              benefits. The most famous and widely consumed Japanese teas are
              green teas, which hold a special place in the hearts of tea
              enthusiasts worldwide.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

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

  <script src="../js/header.plugin.js"></script>

</body>

</html>