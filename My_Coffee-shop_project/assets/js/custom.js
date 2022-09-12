// Navbar for mobile and tablet version
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
});

document.querySelectorAll(".nav-link").forEach((link) =>
  link.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
  })
);

// Cart
let cartIcon = document.querySelector(".shoping__cart");
let cart = document.querySelector(".cart");
let closeCart = document.querySelector(".close__cart");
let cartItemsNumber = document.querySelector(".cart-items__number");

cartIcon.addEventListener("click", () => {
  cart.classList.add("active");
});
closeCart.addEventListener("click", () => {
  cart.classList.remove("active");
});

if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready());
} else ready();

function ready() {
  let removeCartButtons = document.getElementsByClassName("cart__remove");
  console.log(removeCartButtons);
  for (let i = 0; i < removeCartButtons.length; i++) {
    let button = removeCartButtons[i];
    button.addEventListener("click", removeCartItem);
  }

  let quantityInputs = document.getElementsByClassName("cart__quantity");
  for (let i = 0; i < quantityInputs.length; i++) {
    let input = quantityInputs[i];
    input.addEventListener("change", quantityChanged);
  }

  // Add to cart
  let addCart = document.getElementsByClassName("add__cart");
  for (let i = 0; i < addCart.length; i++) {
    let button = addCart[i];
    button.addEventListener("click", addCartClicked);
  }
  // Buy button
  document
    .getElementsByClassName("buy__btn")[0]
    .addEventListener("click", buyButtonClicked);
}

function buyButtonClicked() {
  alert("Your Order is placed");
  let cartContent = document.getElementsByClassName("cart__content")[0];
  while (cartContent.hasChildNodes()) {
    cartContent.removeChild(cartContent.firstChild);
  }
  updateTotal();
  cartItemsNumber.innerHTML = 0;
}

function removeCartItem(event) {
  let buttonClicked = event.target;
  buttonClicked.parentElement.remove();
  cartItemsNumber.innerHTML--;
  updateTotal();
}

function quantityChanged(event) {
  let input = event.target;
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  }
  updateTotal();
}

function addCartClicked(event) {
  let button = event.target;
  let shopContainer = button.parentElement;
  let shopProducts = findParentElement(shopContainer);
  let title =
    shopProducts.getElementsByClassName("menu-item__name")[0].innerHTML;
  let price = shopContainer.getElementsByClassName("price-holder")[0].innerHTML;
  let productImg =
    shopProducts.getElementsByClassName("menu-item__photo")[0].src;
  addProductToCart(title, price, productImg);
  updateTotal();
}

function addProductToCart(title, price, productImg) {
  let cartShopBox = document.createElement("div");
  cartShopBox.classList.add("cart__box");
  let cartItems = document.getElementsByClassName("cart__content")[0];
  // check if item already added if not incriment total number near cart icon in navbar
  if (!checkIfAdded(title)) {
    alert("You have already added this item to the cart");
    return;
  } else cartItemsNumber.innerHTML++;

  let cartBoxContent = `                  
                    <img class="cart__img" src="${productImg}" alt="">
                    <div class="detail__box">
                      <h3 class="cart-product__title">${title}</h3>
                      <p class="cart__price">${price}</p>
                      <input class="cart__quantity" value="1" type="number">
                    </div>
                      <i class="bi bi-trash cart__remove"></i>`;
  cartShopBox.innerHTML = cartBoxContent;
  cartItems.append(cartShopBox);
  cartShopBox
    .getElementsByClassName("cart__remove")[0]
    .addEventListener("click", removeCartItem);
  cartShopBox
    .getElementsByClassName("cart__quantity")[0]
    .addEventListener("change", quantityChanged);
}

function checkIfAdded(title) {
  let cartItems = document.getElementsByClassName("cart__content")[0];
  let cartItemsNames = cartItems.getElementsByClassName("cart-product__title");
  for (let i = 0; i < cartItemsNames.length; i++) {
    if (cartItemsNames[i].innerHTML == title) {
      return false;
    }
  }
  return true;
}

function findParentElement(element) {
  return element.parentElement;
}

function updateTotal() {
  let cartContent = document.getElementsByClassName("cart__content")[0];
  let cartBoxes = cartContent.getElementsByClassName("cart__box");
  let total = 0;
  for (let i = 0; i < cartBoxes.length; i++) {
    let cartBox = cartBoxes[i];
    let priceElmenet = cartBox.getElementsByClassName("cart__price")[0];
    let quantityElement = cartBox.getElementsByClassName("cart__quantity")[0];
    let price = parseFloat(priceElmenet.innerHTML.replace("$", ""));
    let quantity = quantityElement.value;
    total = total + price * quantity;
  }
  // if price contains some Cents value
  total = Math.round(total * 100) / 100;
  document.getElementsByClassName("total__price")[0].innerHTML = "$" + total;
}
