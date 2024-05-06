<!-- Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825) -->
<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['login_success']) || $_SESSION['login_success'] !== true) {
  header("Location: ../index.php");
  exit();
}

$servername = "localhost";
$username = "web";
$password = "web";
$dbname = "tea_station";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Fetch user information from the database based on the user ID stored in the session
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) == 1) {
  // User found, fetch user data
  $user = mysqli_fetch_assoc($result);
  $firstname = $user['firstname'];
  $lastname = $user['lastname'];
  $email = $user['email'];
  $phone = $user['phone'];
  $gender = $user['gender'];
  $address = $user['address'];
  $province = $user['province'];
  $date_of_birth = $user['date_of_birth'];
  // Add more fields as needed
} else {
  // User not found or multiple users found with the same ID, handle accordingly
  echo "User not found or multiple users found with the same ID";
  exit();
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <!-- Add CSS stylesheets here -->
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/profile.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

  <style>
    svg-position {
      flex-shrink: 0;
    }
    .input {
            display: flex;
            align-items: center;
            position: relative
        }

        .hide{
          display:none;
        }
    </style>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="../css/header.plugin.css" />

</head>

<body>
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
  <div class="profileBanner">
    <h1>Update Your Profile</h1>
  </div>
  <div class="registerDiv">
    <style>
      .input-form-text-indent {
        text-indent: 38px;
      }

      .svg-position {
        position: absolute;
        top: 15px;
        left: 10px;
      }

      .svg-eye {
        position: absolute;
        right: 3px;
        top: 20px;
      }

      .invalid {
        color: #e6b140
      }
    </style>

    <form class="form" id="registration-form" action="../php/updateprofile.php" method="post">
      <div class="flex-column">
        <label for="firstName">First Name: </label>
        <div>
          <div style="display: flex; flex-direction: column; position: relative">
            <svg class="svg-position" height="20" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12,12c2.757,0,5-2.243,5-5s-2.243-5-5-5S7,4.243,7,7S9.243,12,12,12z M12,14c-2.673,0-8,1.334-8,4v3h16v-3 C20,15.334,14.673,14,12,14z" />
            </svg>
            <input class="inputForm input-form-text-indent" type="text" id="firstName" name="firstName" class="input" placeholder="Enter your First name" minlength="3" value="<?php echo $firstname; ?>" readonly/>
          </div>
        </div>
      </div>

      <div class="flex-column">
        <label for="lastName">Last Name: </label>
        <div>
          <div style="display: flex; flex-direction: column; position: relative">
            <svg class="svg-position" height="20" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12,12c2.757,0,5-2.243,5-5s-2.243-5-5-5S7,4.243,7,7S9.243,12,12,12z M12,14c-2.673,0-8,1.334-8,4v3h16v-3 C20,15.334,14.673,14,12,14z" />
            </svg>
            <input class="inputForm input-form-text-indent" type="text" id="lastName" name="lastName" class="input" placeholder="Enter your Last name" required minlength="4" value="<?php echo $lastname; ?>" readonly/>
          </div>
        </div>
      </div>

      <div class="flex-column">
        <label for="email">Email: </label>
        <div>
          <div style="display: flex; flex-direction: column; position: relative">
            <svg class="svg-position" height="20" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M20,4H4C2.897,4,2,4.897,2,6v12c0,1.103,0.897,2,2,2h16c1.103,0,2-0.897,2-2V6C22,4.897,21.103,4,20,4z M20,6v0.511 l-8,6.223L4,6.512V6H20z M4,18V8.044l7.386,5.745C11.566,13.956,11.783,14,12,14s0.434-0.044,0.614-0.211L20,8.044L20.002,18 H4z" />
            </svg>
            <input class="inputForm input-form-text-indent" type="email" id="email" name="email" class="input" placeholder="Enter your Email" required value="<?php echo $email; ?>" readonly/>
          </div>
        </div>
      </div>

      <div class="flex-column">
        <label for="phone">Phone: </label>
        <div>
          <div style="display: flex; flex-direction: column; position: relative">
            <svg class="svg-position" height="20" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M6.62,10.79a15.05,15.05,0,0,0,6.09,6.09l2.2-2.2a1,1,0,0,1,.71-.29,1.15,1.15,0,0,1,.4.09,9.91,9.91,0,0,0,3.33.53,1,1,0,0,1,1,1V20a1,1,0,0,1-1,1A17,17,0,0,1,3,4,1,1,0,0,1,4,3H7.37a1,1,0,0,1,1,1,9.91,9.91,0,0,0,.53,3.33,1,1,0,0,1-.29.71Z" />
            </svg>
            <input class="inputForm input-form-text-indent" type="number" id="phone" name="phone" placeholder="Enter your Phone Number" value="<?php echo $phone; ?>" readonly>
          </div>
        </div>
      </div>


      <div class="flex-column">
        <label for="date_of_birth">Date of Birth: </label>
        <div>
          <div style="display: flex; flex-direction: column; position: relative">
            <svg class="svg-position" height="20" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 10H9V12H7zM11 10H13V12H11zM15 10H17V12H15zM7 14H9V16H7zM11 14H13V16H11zM15 14H17V16H15z"></path>
              <path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.897,4,3,4.897,3,6v14c0,1.103,0.897,2,2,2h14c1.103,0,2-0.897,2-2V6C21,4.897,20.103,4,19,4z M19,20H5V9h14V20z"></path>
            </svg>
            <input type="inputForm text" name="date_of_birth" id="date_of_birth" class="input-form-text-indent" style="   border: 1.5px solid #ecedec;
              border-radius: 10px;
              height: 50px;
              align-items: center;
              padding-left: 10px;
              transition: 0.2s ease-in-out;" name="date" placeholder="MM/DD/YYYY" value="<?php echo $date_of_birth; ?>" readonly>

          </div>
        </div>
      </div>

      <div class="flex-column">
        <label for="address">Address: </label>
        <div>
          <div style="display: flex; flex-direction: column; position: relative">
            <svg class="svg-position" height="20" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
            </svg>
            <input class="inputForm input-form-text-indent" type="text" required id="address" name="address" placeholder="Enter your Address" value="<?php echo $address; ?>" readonly>
          </div>
        </div>
      </div>

      <div class="flex-column">
        <label label="province">Province: </label>
        <div>
          <div style="display: flex; flex-direction: column; position: relative">
            
            <select class="inputForm input-form-text-indent" id="province" name="province" required readonly>
              <option value="" disabled>Select Your Province</option>
              <option value="ab" <?php if ($province == "ab") echo "selected"; ?>>Alberta</option>
<option value="bc" <?php if ($province == "bc") echo "selected"; ?>>British Columbia</option>
<option value="mb" <?php if ($province == "mb") echo "selected"; ?>>Manitoba</option>
<option value="nb" <?php if ($province == "nb") echo "selected"; ?>>New Brunswick</option>
<option value="nl" <?php if ($province == "nl") echo "selected"; ?>>Newfoundland and Labrador</option>
<option value="ns" <?php if ($province == "ns") echo "selected"; ?>>Nova Scotia</option>
<option value="nt" <?php if ($province == "nt") echo "selected"; ?>>Northwest Territories</option>
<option value="nu" <?php if ($province == "nu") echo "selected"; ?>>Nunavut</option>
<option value="on" <?php if ($province == "on") echo "selected"; ?>>Ontario</option>
<option value="pe" <?php if ($province == "pe") echo "selected"; ?>>Prince Edward Island</option>
<option value="qc" <?php if ($province == "qc") echo "selected"; ?>>Quebec</option>
<option value="sk" <?php if ($province == "sk") echo "selected"; ?>>Saskatchewan</option>
<option value="yt" <?php if ($province == "yt") echo "selected"; ?>>Yukon</option>

            </select>
          </div>
        </div>
      </div>

      <div class="button-submit edit-button" style="display:flex; justify-content:center;align-items:center" onclick="removeReadonly()">Edit</div>

      <button class="button-submit hide edit-submit-button" readonly>Update</button>
    </form>
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

  <!-- Include jQuery and jQuery UI for date picker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <script>
    $(document).ready(function() {
      // Initialize date picker
      $("#date_of_birth").datepicker({
        dateFormat: "yy-mm-dd",
        maxDate:0
      });
    });
            $( function() {


        $( "#province" )
          .selectmenu()
          .selectmenu( "menuWidget" )
            .addClass( "overflow" );
      } );
  </script>
  <style>
    .ui-selectmenu-button.ui-button {
        width:100%;
        border: 1.5px solid #ecedec;
        border-radius: 10px;
       
        padding: 10px;
        
    }
    </style>

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
        var successMessage = 'Profile update successful!';
        showNotification(successMessage, '#4CAF50'); // Green color for success
        removeQueryParams(); // Remove query parameters from URL
      }
    });


    function removeReadonly() {
        // Select all elements with the class "inputForm"
        var inputForms = $('.inputForm');

        // Loop through each element and remove the readonly attribute
        inputForms.each(function() {
            $(this).removeAttr('readonly');
        });

        // Show the edit button with fade effect
        $('.edit-button').hide().fadeIn(800).hide(300).addClass('hide');

        $('.edit-submit-button').removeClass('hide').show(500).fadeIn(500);
    }

    $('#edit-submit-button').animate({
            opacity: 0.5,
        }, 500, function() {
            // Animation complete, you can submit the form here if needed
            // For demonstration purposes, I'm just logging a message
            console.log('Form submitted!');
        });


    
  </script>

</body>

</html>