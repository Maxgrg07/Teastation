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
    <title>Description</title>
    <link rel="tea station icon" href="../img/logo-white.png">
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/description.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/header.plugin.css" />
    <script src="../js/data.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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

    <!-- Main Tea Container -->
    <section class="main-tea-container" style="margin-top: 40px;">
        <div class="container-2">

            <div id="tea-container" class="tea-container">

               

            </div>
        </div>

        <!-- Similar Products -->
        <div class="container-1" style="background:#fff">
            <ul id="related-products">
               

            </ul>
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

    <script>
        // Get the query string part of the current URL
var queryString = window.location.search;

// Create a URLSearchParams object from the query string
var params = new URLSearchParams(queryString);

// Read the value of the 'product_id' parameter
var productId = params.get("product_id");

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

        const tea = teas?.find(it=>it?.id==productId);
        console.log("🚀 ~ tea:", tea,productId)

        if(tea){
            document.querySelector('#tea-container').innerHTML=`
            <div class="tea-content tea-reverse">
                    <div class="tea-container-image">
                        <img src="${tea?.imageLink}" width="768" height="591" alt="${tea?.name}" />
                    </div>
                    <div class="tea-content-body">
                        <h5>${tea?.name}
                        </h5>
                        <div class="divider"></div>
                        ${tea?.subtitles?.map(it=>` <div class="product-feature">

           <div class="product-feature-title">${it?.header}</div>
<div class="product-feature-text">${it?.description}</div>
</div>`)?.join('')}
                      

                        <div class="product-feature">
                            <div class="product-feature-title">Price</div>
                            <div class="product-feature-text">${tea?.price}</div>
                        </div>
                        <div class="product-feature">
                            <div class="product-feature-title">Quantity</div>
                            <div class="product-feature-text" id="quantity-${tea.id}">${updateOnStock(tea, JSON.parse(localStorage.getItem("cart")) || [])}</div>
                        </div>

                    

                        <div class="add-to-cart">
                            <input type="number" style="width:100px;height:38px;padding: 12px 20px; margin: 8px 0;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;" id="quantityInput-${tea.id}" value="1" min="1">
                            <button class="add-to-cart-button addToCartButton" data-tea="${tea.id}">Add to Cart</button>
                        </div>
                    </div>

                </div>
            `

            console.log("🚀 ~ teasWithCategory[tea?.category]:", teasWithCategory,teasWithCategory[tea?.category])
            if(teasWithCategory[tea?.category]){
                    document.querySelector('#related-products').innerHTML=`
                    <li class="list active">
                    <svg class="list-span" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                    <span>Similar Products </span>
                </li>
                    ${teasWithCategory[tea?.category]?.productsList?.filter(it=>it?.id!=productId)?.slice(0, 3)?.map(it=>`
                        <a href="./description.php?product_id=${it.id}">
                        <li class="list-product">
                    <span>
                        ${it?.name}
                    </span>
                    <div class="similar-product-image">
                        <img src="${it.imageLink}" width="768px" height="591px" alt="${it.name}" />
                    </div>
                    </a>
                </li>
                `)?.join('')}
                    `
            }
        }

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

          // Add to cart button click event
          $(document).on("click", ".addToCartButton", function() {
            var teaId = $(this).data("tea");
            console.log("🚀 ~ $ ~ teaId:", teaId)
            addToCart(teaId, teas);
        });

        function updateOnStock(tea, cart) {
            let totalQuantity = tea?.quantity;

            const findIt = cart?.find(t => t?.id === tea?.id);
            if (cart?.length && findIt) {
                totalQuantity -= parseInt(findIt?.quantity);
            }

            return totalQuantity;
        }

    </script>

</body>

</html>