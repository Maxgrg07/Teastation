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
    <link rel="tea station icon" href="../img/logo-white.png">
    <link rel="stylesheet" href="../css/shop.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/header.plugin.css" />
    <title>Shop</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/data.js"></script>
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

    <!-- Shop Section -->
    <div class="shop_section" style="margin-top: 50px;">
        <div class="head_shop">
            <h1>Shop at our Store</h1>
        </div>
        <div class="sub_text">
            <p>At our store, we have a wide range of fresh teas and the products
                to serve them! <br /> Our gourmet tea assortments will suit any occasion and any taste.</p>
        </div>
        <h3 style="text-align:center">
        Welcome  <?php echo $firstname; ?> <?php echo $lastname; ?>

        </h3>
        <div class="main_inner_sec search-teas">
            <input type="text" class="searchInput" id="searchInput" style="border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;" placeholder="Search Your Teas ">
        </div>
        <div class="" id="productList"></div>

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
        function categorizeTea(teaData) {
            // Initialize an empty object to store categorized products
            const categorizedTea = {};

            // Iterate through the tea data
            teaData.forEach(tea => {
                // Extract category name
                const categoryName = tea.category;

                // Check if the category already exists in categorizedTea
                if (!categorizedTea.hasOwnProperty(categoryName)) {
                    // If category doesn't exist, create an empty array for products
                    categorizedTea[categoryName] = {
                        productsList: []
                    };
                }

                // Add the tea product to the corresponding category
                categorizedTea[categoryName].productsList.push(tea);
            });

            // Return the categorized tea
            return categorizedTea;
        }

        // Function to assign random images to tea products
        function assignRandomImages(teasList, images) {
            var availableImages = images.slice(); // Create a copy of the images array

            return teasList.map(function(tea) {
                var randomIndex = Math.floor(Math.random() * availableImages.length);
                tea.imageLink = availableImages[randomIndex];

                // Remove the used image from the available images array
                availableImages.splice(randomIndex, 1);

                return tea;
            });
        }



        // Call the function to assign random images
        var teas = assignRandomImages(teasList, images);

        var teasWithCategory = categorizeTea(teas);
        console.log("🚀 ~ teasWithCategory:", teasWithCategory)

        // Function to update the quantity of a tea product based on the cart
        function updateOnStock(tea, cart) {
            let totalQuantity = tea?.quantity;

            const findIt = cart?.find(t => t?.id === tea?.id);
            if (cart?.length && findIt) {
                totalQuantity -= parseInt(findIt?.quantity);
            }

            return totalQuantity;
        }

        function displayProductList(teas) {
            var productList = document.getElementById("productList");
            productList.innerHTML = "";
            let html = '';

            // Iterate over each category in the teas object
            Object.keys(teas).forEach(category => {
                // Create a div for the category with the category title

                html += `
            <div class="category">
                <h2>${category}</h2>
                <hr class="solid">
                <div class="main_inner_sec">
        `;

                // Iterate over each product in the category
                teas[category].productsList.forEach(tea => {
                    html += `
                <div class="shops_display" id="tea-${tea.id}">
                    <div class="shop_images">
                    <a class="shop_name" href="./description.php?product_id=${tea.id}"><img src="${tea.imageLink}" alt="${tea.name}"></a>
                    </div>
                    <div class="shops_detail">
                        <div class="detail_text_shop">
                            <p class="shop_name">
                                <a class="shop_name" href="./description.php?product_id=${tea.id}">${tea.name}</a>
                            </p>
                            <div class="prices_shop">
                                <p>$${tea.price}</p>
                            </div>
                            <div class="prices_shop">
                                <p>In stock: <span id="quantity-${tea.id}">${updateOnStock(tea, JSON.parse(localStorage.getItem("cart")) || [])}</span> left</p>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <input type="number" style="width:100px;height:38px;padding: 12px 20px; margin: 8px 0;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;" id="quantityInput-${tea.id}" value="1" min="1">
                            <button class="primary addToCartButton" data-tea="${tea.id}">Add to Cart</button>
                        </div>
                    </div>
                </div>
            `;
                });

                // Close the category div
                html += `</div></div>`;

                // Add a line break after each category
            });
            productList.innerHTML += html;
        }







        // Function to add a tea product to the cart
        function addToCart(teaId, teas) {
            var quantityInput = document.querySelector("#quantityInput-" + teaId);
            var tea = teas.find(t => t.id === teaId);
            let quantity = document.querySelector(`#quantity-${teaId}`)

            if (tea) {
                const cart = (JSON.parse(localStorage.getItem("cart")) || [])
                const findIt = cart?.find(t => t?.id === teaId);

                const totalQuantity = parseInt(tea?.quantity) - (findIt ? parseInt(findIt?.quantity) : 0) - parseInt(quantityInput?.value);
                console.log("🚀 ~ addToCart ~ totalQuantity:", totalQuantity, tea?.quantity, findIt ? findIt?.quantity : 0, parseInt(quantityInput?.value))
                if (totalQuantity >= 0) {
                    const existingItem = cart.find(item => item.id === teaId);
                    if (existingItem) {
                        existingItem.quantity += parseInt(quantityInput?.value); // Increase quantity by one
                    } else {
                        cart.push({
                            id: tea.id,
                            name: tea.name,
                            price: tea.price,
                            quantity: 1
                        }); // Add to cart with quantity of one
                    }
                    quantity.textContent = totalQuantity;
                    localStorage.setItem("cart", JSON.stringify(cart)); // Store updated cart in localStorage
                    showNotification(`${tea.name} has been successfully added to cart!`, '#4CAF50');
                } else {
                    showNotification("Invalid quantity or this tea is out of stock!", '#f44336');
                }

            }


        }

    

        // Function to show notifications
        function showNotification(message, color) {
            var notification = $("<div>").text(message);
            notification.css({
                padding: '10px',
                backgroundColor: color,
                color: 'white',
                position: 'fixed',
                top: '20px',
                right: '20px',
                zIndex: '999'
            });
            $("body").append(notification);

            setTimeout(function() {
                notification.remove();
            }, 3000);
        }



        // Display initial product list
        if (!document.querySelector("#productList")?.innerHTML?.length) {
            displayProductList(teasWithCategory);
        }

        // Search bar functionality
        function updateProductList() {
            const searchQuery = document.querySelector("#searchInput").value.toLowerCase();
            const filteredTeas = teas.filter(function(tea) {
                return tea.name.toLowerCase().includes(searchQuery);
            });
            console.log("🚀 ~ updateProductList ~ filteredTeas:", filteredTeas)
            displayProductList(categorizeTea(filteredTeas));
        }

        // Attach event listener to the search input
        document.querySelector("#searchInput").addEventListener("input", updateProductList);


        // Add to cart button click event
        $(document).on("click", ".addToCartButton", function() {
            var teaId = $(this).data("tea");
            console.log("🚀 ~ $ ~ teaId:", teaId)
            addToCart(teaId, teas);
        });
    </script>

    <script src="../js/header.plugin.js"></script>


</body>

</html>