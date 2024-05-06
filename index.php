<!-- Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825)  -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="./css/header.plugin.css" />

  <!-- For jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>

  <script src="./js/login.js"></script>
  <link rel="stylesheet" href="./css/common.css" />

  

  <style>
    .form-alignment {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

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
</head>

<body>

  <div class="form-alignment">
    <form class="form" action="./php/login.php" method="post" id="login-form">
      <div class="flex-column">
        <label for="email">Email</label>
        <div>
          <div style="display: flex; flex-direction: column; position: relative">
            <svg class="svg-position" height="20" viewBox="0 0 32 32" width="30" xmlns="http://www.w3.org/2000/svg">
              <g id="Layer_3" data-name="Layer 3">
                <path d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z">
                </path>
              </g>
            </svg>
            <input class="inputForm input-form-text-indent" type="text" id="email" name="email" class="input" placeholder="Enter your Email" required />
          </div>
        </div>
      </div>

      <div class="flex-column">
        <label>Password </label>
        <div>
          <div style="display: flex; flex-direction: column; position: relative">
            <svg class="svg-position" height="20" viewBox="-64 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg">
              <path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0">
              </path>
              <path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0">
              </path>
            </svg>
            <input class="inputForm input-form-text-indent" type="password" id="password" name="password" placeholder="Enter your Password" class="input" required />
            <div id="password-error-message"></div>
            <span onClick="togglePasswordVisibility()"><svg class="svg-eye" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
              <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z">
              </path>
            </svg>
            </span>
          </div>
        </div>
      </div>

      <div class="flex-row">
        <div>
          <span class="span">Forgot password?</span>
        </div>
      </div>
      <button class="button-submit">Sign In</button>
      <p class="p">Don't have an account? <a href="./html/register.php"><span class="span">Sign Up</span></a>
        </button>
    </form>
  </div>

  <script>


     function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
    
  


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
      if (urlParams.has('error')) {
        var errorMessage = '';
        var errorType = urlParams.get('error');
        if (errorType === 'invalid_email') {
          errorMessage = 'Error: Invalid email address';
        } else if (errorType === 'email_exists') {
          errorMessage = 'Error: Email already exists';
        } else if (errorType === 'registration_failed') {
          errorMessage = 'Error: Registration failed. Please try again later.';
        }
        else if (errorType === 'user_not_found') {
          errorMessage = 'Error: User not found';
        }else if(errorType){
          errorMessage = 'Error: email or password not match';
        }
        showNotification(errorMessage, '#f44336'); // Red color for error
      } else if (urlParams.has('success')) {
        var successMessage = 'Registration successful!.';
        showNotification(successMessage, '#4CAF50'); // Green color for success
      }
      removeQueryParams()
    });
  </script>

  <script src="./js/header.plugin.js"></script>

<script>
  document.getElementById("login-form").addEventListener("submit", function(event) {
    // Prevent default form submission
    event.preventDefault();

    //Validate Password
    var passwordErrorMessage = validateStrongPassword()

    var passwordMessageElement = document.getElementById("password-error-message");



    if (passwordErrorMessage !== "") {
      passwordMessageElement.innerHTML = "<div class='error'>" + passwordErrorMessage + "</div>";
    }

    // If no errors, submit the form
    if ( passwordErrorMessage==="") {
        this.submit();
    }
});

function validatePassword(password) {
    var passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{7,}$/;
    return passwordRegex.test(password);
}

// Function to validate the form
function validateStrongPassword() {
    var password = document.getElementById("password").value;

    var errorMessage = "";

    // Validate password
    if (!validatePassword(password)) {
        errorMessage += "Password must contain at least one letter, one number, one special character, and be at least 7 characters long.<br>";
    }
    return errorMessage;
}

// Add onchange event listener to password and confirm password inputs
var passwordInput = document.getElementById("password");

passwordInput.addEventListener("input", function() {
    document.getElementById("password-error-message").innerHTML = "";
});
</script>
</body>

</html>