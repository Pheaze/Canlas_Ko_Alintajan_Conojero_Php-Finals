function startBuyingProcess() {
  document.getElementById('welcome-section').style.display = 'none';
  document.getElementById('medicine-page').style.display = 'block';
}

function showDiscountedBrands() {
  document.getElementById('discounted-brands').style.display = 'block';
}

function showItems() {
  document.getElementById('brand-selection').style.display = 'none';
  document.getElementById('item-selection').style.display = 'block';
}

function calculateTotal() {
  // Example only — implement logic based on real items
  alert("Item added to cart!");
  document.getElementById('shopping-summary').style.display = 'block';
}

function continueShopping() {
  document.getElementById('shopping-summary').style.display = 'none';
  document.getElementById('medicine-page').style.display = 'block';
}

function endSession() {
  document.getElementById('main-content').innerHTML = '<section><p>Thank you and have a great day!</p></section>';
}