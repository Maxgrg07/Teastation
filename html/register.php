<!-- Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825) -->
<!DOCTYPE html>
<html>

<head>
  <title>Add to cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8" />
  <link rel="tea station icon" href="../img/logo-white.png" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/register.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="../css/header.plugin.css" />
  <!-- For jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>

  <script src="../js/register.js"></script>
  <link rel="stylesheet" href="../css/common.css" />


</head>

<body>
  <header class="navigation">
    <h2 class="brand">Spam Tea Station</h2>
    <nav class="menu">
      <input type="checkbox" id="menuToggle">
      <label for="menuToggle" class="menu-icon"><i class="fa fa-bars"></i></label>
    </nav>
  </header>
  <div class="registerBanner">
    <h1>Register Your Account</h1>
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
    <form class="form" id="registration-form" action="../php/AddUser.php" method="post" >
      <div class="flex-column">
        <label for="firstName">First Name: </label>
        <div>
          <div style="display: flex; flex-direction: column; position: relative">
            <svg class="svg-position" height="20" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12,12c2.757,0,5-2.243,5-5s-2.243-5-5-5S7,4.243,7,7S9.243,12,12,12z M12,14c-2.673,0-8,1.334-8,4v3h16v-3 C20,15.334,14.673,14,12,14z" />
            </svg>
            <input class="inputForm input-form-text-indent" type="text" id="firstName" name="firstName" class="input" placeholder="Enter your First name" minlength="3" />
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
            <input class="inputForm input-form-text-indent" type="text" id="lastName" name="lastName" class="input" placeholder="Enter your Last name" required minlength="4" />
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
            <input class="inputForm input-form-text-indent" type="email" id="email" name="email" class="input" placeholder="Enter your Email" required />
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
            <input class="inputForm input-form-text-indent" type="number" id="phone" name="phone" placeholder="Enter your Phone Number">
          </div>
        </div>
      </div>

      <div class="flex-column">
        <label for="gender">Gender: </label>
        <div>
          <div style="display: flex; align-items: center;">

            <input style="margin: 0px 10px 0px 0px;" type="radio" name="gender" id="male" value="male" />
            <span>
              Male
            </span>

            <input style="margin: 0px 10px;" type="radio" name="gender" id="female" value="female">
            <span>
              Female
            </span><br>
          </div>
          <div id="gender-error-message"></div>

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
            <input type="date" name="date_of_birth" id="date_of_birth" class=" input-form-text-indent" style="   border: 1.5px solid #ecedec;
              border-radius: 10px;
              height: 50px;
              align-items: center;
              padding-left: 10px;
              transition: 0.2s ease-in-out;" name="date" placeholder="MM/DD/YYYY">
              <div id="date-error-message"></div>

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
            <input class="inputForm input-form-text-indent" type="text" required id="address" name="address" placeholder="Enter your Address">
          </div>
        </div>
      </div>

      <div class="flex-column">
        <label label="province">Province: </label>
        <div>
          <div style="display: flex; flex-direction: column; position: relative">
            <svg class="svg-position" height="20" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
            </svg>
            <select class="inputForm input-form-text-indent" id="province" name="province" required>
              <option value="">Select Your Province</option>
              <option value="ab">Alberta</option>
              <option value="bc">British Columbia</option>
              <option value="mb">Manitoba</option>
              <option value="nb">New Brunswick</option>
              <option value="nl">Newfoundland and Labrador</option>
              <option value="ns">Nova Scotia</option>
              <option value="nt">Northwest Territories</option>
              <option value="nu">Nunavut</option>
              <option value="on">Ontario</option>
              <option value="pe">Prince Edward Island</option>
              <option value="qc">Quebec</option>
              <option value="sk">Saskatchewan</option>
              <option value="yt">Yukon</option>
            </select>
          </div>
        </div>

        <div class="flex-column">
          <label for="password">Password: </label>
          <div>
            <div style="display: flex; flex-direction: column; position: relative">
              <svg class="svg-position" height="20" viewBox="-64 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg">
                <path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0">
                </path>
                <path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0">
                </path>
              </svg>
              <input class="inputForm input-form-text-indent" type="password" id="password" name="password" placeholder="Enter your Password" class="input" required minlength="7" />
              <div id="password-error-message"></div>
              <span onClick="togglePasswordVisibility('password')"><svg class="svg-eye" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                  <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z">
                  </path>
              </svg>
              </span>
            </div>
          </div>
        </div>

        <div class="flex-column">
          <label for="confirmPassword">Retype Password: </label>
          <div>
            <div style="display: flex; flex-direction: column; position: relative">
              <svg class="svg-position" height="20" viewBox="-64 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg">
                <path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0">
                </path>
                <path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0">
                </path>
              </svg>
              <input class="inputForm input-form-text-indent" type="password" id="confirmPassword" name="confirmPassword" class="input" placeholder="Enter your Password again" minlength="7" />
              <span onClick="togglePasswordVisibility('confirmPassword')"> <svg class="svg-eye" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z">
                </path>
              </svg>
             </span>
            </div>
          </div>
        </div>

        <button type="submit" class="button-submit">Register</button>
        <p class="p">Already have a account? <a href="../index.php"><span class="span">Login</span></a></p>
    </form>
  </div>

  <script>

function togglePasswordVisibility(inputId) {
        var passwordInput = document.getElementById(inputId);
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
        showNotification(errorMessage, '#f44336'); // Red color for error
      } else if (urlParams.has('success')) {
        var successMessage = 'Registration successful! You can now <a href="login.php">login</a>.';
        showNotification(successMessage, '#4CAF50'); // Green color for success
      }

      removeQueryParams()
    });

// Get the current date
var currentDate = new Date();

// Subtract one day from the current date
currentDate.setDate(currentDate.getDate() - 10);

// Get the date of birth input element
var dateOfBirthInput = document.getElementById("date_of_birth");
// Function to validate date of birth
function validateDateOfBirth(dateOfBirth) {
    var errorMessage = "";

    // Validate date of birth
    if (dateOfBirth) {
        var dob = new Date(dateOfBirth);
        var today = new Date();
        var age = today.getFullYear() - dob.getFullYear();
        var monthDiff = today.getMonth() - dob.getMonth();
        
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
            age--;
        }

        if (age < 10) {
            errorMessage += "You must be at least 10 years old.<br>";
        }
    } else {
        errorMessage += "   ";
    }

    return errorMessage;
}

// Function to validate gender
function validateGender() {
    var genderInputs = document.getElementsByName("gender");
    var isChecked = false;

    // Check if at least one gender option is selected
    for (var i = 0; i < genderInputs.length; i++) {
        if (genderInputs[i].checked) {
            isChecked = true;
            break;
        }
    }

    if (!isChecked) {
        return "Gender should be either male or female.<br>";
    }

    return "";
}

// Add onchange event listener to date of birth input
var dateOfBirthInput = document.getElementById("date_of_birth");
dateOfBirthInput.addEventListener("change", function() {
    document.getElementById("date-error-message").innerHTML = "";
});

// Add onchange event listener to gender inputs (optional)
var genderInputs = document.getElementsByName("gender");
for (var i = 0; i < genderInputs.length; i++) {
    genderInputs[i].addEventListener("change", function() {
        document.getElementById("gender-error-message").innerHTML = "";
    });
}

// Form submission event listener
document.getElementById("registration-form").addEventListener("submit", function(event) {
    // Prevent default form submission
    event.preventDefault();

    // Retrieve form inputs
    var dateOfBirth = dateOfBirthInput.value;
    
    // Validate date of birth
    var dateErrorMessage = validateDateOfBirth(dateOfBirth);

    // Validate gender
    var genderErrorMessage = validateGender();

    //Validate Password
    var passwordErrorMessage = validateStrongPassword()

    // Display error messages
    var dateMessageElement = document.getElementById("date-error-message");
    var genderMessageElement = document.getElementById("gender-error-message");
    var passwordMessageElement = document.getElementById("password-error-message");


    if (dateErrorMessage !== "") {
        dateMessageElement.innerHTML = "<div class='error'>" + dateErrorMessage + "</div>";

    }

    if (genderErrorMessage !== "") {
        genderMessageElement.innerHTML = "<div class='error'>" + genderErrorMessage + "</div>";
    }

    if (passwordErrorMessage !== "") {
      passwordMessageElement.innerHTML = "<div class='error'>" + passwordErrorMessage + "</div>";
    }

    // If no errors, submit the form
    if (dateErrorMessage === "" && genderErrorMessage === "" && passwordErrorMessage==="") {
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

passwordInput.addEventListener("change", function() {
    document.getElementById("password-error-message").innerHTML = "";
});



</script>
</body>

</html>