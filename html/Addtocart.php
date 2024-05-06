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
<html>

<head>
    <title>Add to cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="tea station icon" href="../img/logo-white.png">
    <link rel="stylesheet" href="../css/addtocart.css">
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
    <!-- Add to Cart Banner -->
    <div class="addtocartBanner">
        <h1>Shopping Cart</h1>
    </div>

    <h3 style="text-align: center; margin: 8px 0px;">Shopping Cart</h3>
    <div class="cart-content-wrapper">
        <div id="add-to-cart-table-wrapper">
            <!-- Add to Cart Table -->
            <table class="add-to-cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th> <!-- New column for action -->
                    </tr>
                </thead>
                <tbody id="cartTableBody">
                    <!-- Cart items will be dynamically added here -->
                </tbody>
            </table>
        </div>

        <!-- Sidebar with Cart Summary -->
        <div class="sideBar_1">
            <div class="sideBar">
                <table class="add-to-cart-table">
                    <thead>
                        <tr>
                            <th style="text-align: left;">Products</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Cart summary will be dynamically added here -->
                        <tr>
                            <td>Sub Total</td>
                            <td id="subtotal">$0.00</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td id="total">$0.00</td>
                        </tr>
                    </tbody>
                </table>

                <div class="checkout-wrapper">
                    <button class="button checkout-button">PROCEED TO CHECKOUT</button>
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
        // Function to update the cart table
        function updateCartTable() {
            var cart = JSON.parse(localStorage.getItem("cart")) || [];
            var cartTableBody = document.getElementById("cartTableBody");
            var subtotalElement = document.getElementById("subtotal");
            var totalElement = document.getElementById("total");

            // Clear existing cart items
            cartTableBody.innerHTML = "";

            // Initialize variables for subtotal calculation
            var subtotal = 0;

            // Iterate through cart items
            cart.forEach(function(item) {
                // Calculate total price for the item
                var itemTotal = item.price * item.quantity;

                // Update subtotal
                subtotal += itemTotal;

                // Create a row for the item in the cart table
                var row = document.createElement("tr");
                row.innerHTML = `
                <td>${item.name}</td>
                <td>$${item.price.toFixed(2)}</td>
                <td>${item.quantity}</td>
                <td>$${itemTotal.toFixed(2)}</td>
                <td style="display:flex; justify-content: center"><button  style ="background-color: red; height: 30px;width:75px; color: white; border:none " onclick="removeItem('${item.name}')">Remove</button></td> <!-- Button to remove individual item -->
            `;
                cartTableBody.appendChild(row);
            });

            // Update subtotal and total
            subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
            totalElement.textContent = `$${subtotal.toFixed(2)}`; // Assuming no additional charges
        }

        // Initial update of cart table
        updateCartTable();

        // Function to remove individual item from the cart
        function removeItem(itemName) {
            var cart = JSON.parse(localStorage.getItem("cart")) || [];
            var updatedCart = cart.filter(item => item.name !== itemName); // Filter out the item to be removed
            localStorage.setItem("cart", JSON.stringify(updatedCart)); // Update cart in localStorage
            updateCartTable(); // Update cart table to reflect changes
        }
    </script>

    <script src="../js/header.plugin.js"></script>

</body>

</html>