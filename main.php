<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online OTC Medicine Shop</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <header>
    <h1>Welcome to the OTC Medicine Shop</h1>
    <nav>
      <button onclick="startBuyingProcess()">Buy Medicine</button>
      <a href="#shopping-summary" id="cart-button">
        <i class="fas fa-shopping-cart"></i>
      </a>
    </nav>
  </header>

  <main id="main-content">
    <section id="welcome-section">
      <p>Your one-stop shop for affordable and accessible medications.</p>
    </section>

    <section id="medicine-page" style="display:none;">
      <input type="text" id="search-bar" placeholder="Search medicine...">
      <div id="medicine-list"></div>
      <button onclick="showDiscountedBrands()">View Discounted Brands</button>
    </section>

    <section id="brand-selection" style="display:none;">
      <h2>Select a Brand</h2>
      <select id="brand-dropdown"></select>
      <button onclick="showItems()">Continue</button>
    </section>

    <section id="item-selection" style="display:none;">
      <h3>Items Available</h3>
      <div id="items-list"></div>
      <label for="item-qty">Quantity:</label>
      <input type="number" id="item-qty" min="1" value="1">
      <button onclick="calculateTotal()">Add to Cart</button>
    </section>

    <section id="shopping-summary" style="display:none;">
      <h3>Shopping Summary</h3>
      <div id="cart-summary"></div>
      <button onclick="continueShopping(true)">Continue Shopping</button>
      <button onclick="endSession()">Checkout</button>
    </section>

    <section id="discounted-brands" style="display:none;">
      <h3>Discounted Brands</h3>
      <div id="discount-list"></div>
    </section>

    <section id="exit-message" style="display:none;">
      <p>Thank you and have a great day!</p>
    </section>
  </main>

  <script src="script.js"></script>
</body>
</html>