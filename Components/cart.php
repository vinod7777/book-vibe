<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BOOK-VIBE Cart</title>
<script src="https://kit.fontawesome.com/ebdd1363cb.js" crossorigin="anonymous"></script>


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        background: #f4f4f4;
        padding-top: 100px;
        font-family: 'Segoe UI', sans-serif;
    }

    .padding {
    padding: 40px 5%;
        max-width: 1400px;
    margin: 0 auto;
    }
    .title {
        color: #0D3B66;
        font-size: 36px;
  margin-bottom: 40px;
        text-align: center;
        text-transform: uppercase;
    }
    .cart {
        display: flex;
        gap: 40px;
        align-items: flex-start;
    }
    .cart-items {
        flex: 2;
        display: flex;
        flex-direction: column;
        gap: 20px;
      
    }
    .cart-text {
        background: white;
        border-radius: 15px;
        padding: 54px;
        display: flex;
        gap: 20px;
        position: relative;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
       
    }
    .del-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        color: #aaa;
        font-size: 20px;
        cursor: pointer;
        transition: color 0.3s;
    }
    .del-icon:hover {
        color: #ff4d4d;
    }
    .product-img {
        width: 120px;
        height: 160px;
        object-fit: cover;
        border-radius: 8px;
    }
    .details {
        flex: 1;
        display: flex;
        flex-direction: column;
    justify-content: center;
    }
    .details h2 {
        font-size: 20px;
        color: #0D3B66;
        margin-bottom: 5px;
    }
    .category {
        color: #777;
        font-size: 14px;
        margin-bottom: 15px;
    }
        .quantity {
            display: flex;
            align-items: center;
            gap: 15px;
            background: #f0f0f0;
            padding: 5px 15px;
            border-radius: 20px;
            width: fit-content;
            margin-top: 10px;
    }
    .quantity button {
        border: none;
        background: none;
        font-size: 20px;
        cursor: pointer;
        color: #0D3B66;
    }
            .price-section {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: flex-end;
                min-width: 100px;
            }
    .price-section h2 {
        font-size: 24px;
        color: #F26A21;
    }
    .book-details {
        flex: 1;
        background: white;
        border-radius: 15px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        position: sticky;
        top: 100px;
    }
    .book-details h2 {
        margin-bottom: 20px;
        color: #0D3B66;
        
    }
    .summary-row {
        display: flex;
        justify-content: space-between;
    margin: 15px 0;
        color: #555;
    }
    .total {
        font-weight: 700;
        font-size: 18px;
        color: #000;
    border-top: 1px solid #eee;
    padding-top: 15px;
    }
    .continue {
        width: 100%;
        padding: 15px;
    margin-top: 20px;
    border: none;
        border-radius: 8px;
        background: #F26A21;
    color: white;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s ease;
    }
    .continue:hover {
        background-color: #0D3B66;
    }
    .desc{
        margin-bottom: 10px;
    }

    
</style>
</head>

<body>
    <?php include "nav.php"; ?>
    
<section class="padding">
    <h1 class="title">BOOK-VIBE Cart</h1>

    <div class="cart">

    <div class="cart-text">

        <div class="del-icon">
            <i class="fa-solid fa-trash-can"></i>

        </div>

        <img src="../assets/academicimages/ai.jpg" class="product-img">

        <div class="details">
            <div>
                <h2>Artificial Intelligence</h2>
                <p class="category">Programming language</p>
                <p class="desc">Exploring the future of AI and its applications.</p>
            </div>

            <div class="quantity">
                <button id="decrease">-</button>
                <span id="Quantity">1</span>
                <button id="increase">+</button>
            </div>
        </div>

        <div class="price-section">
            <h2 id="value">₹899</h2>
            <p>₹899 each</p>
        </div>

    </div>

    <div class="book-details">
        <h2>Order Summary</h2>

        <div class="yajnesh">
            <span>Subtotal (<span id="items">1</span> items)</span>
            <span id="subtotal">₹599</span>
        </div>

        <div class="yajnesh">
            <span>Shipping</span>
            <span class="free">Free</span>
        </div>

        <hr>

        <div class="yajnesh total">
            <span>Total</span>
            <span id="total">₹599</span>
        </div>

        <button class="continue">Buy Now!</button>
    </div>

</div>


    <div class="empty" id="empty-cart">
        <i class="fa-solid fa-cart-shopping"></i>
        <h2>Cart is empty!</h2>
        <button class="shop-btn" onclick="goHome()">Shop Now</button>
    </div>
</section>
<?php include "footer.php"; ?>

<script>
let count = 1;
let price = 899;

document.getElementById("Quantity").innerText = count;
document.getElementById("value").innerText = "₹" + (count * price);

document.getElementById("increase").addEventListener("click", increment);
document.getElementById("decrease").addEventListener("click", decrement);

function increment() {
    count++;
    updatePrice();
}

function decrement() {
    if (count > 1) {
        count--;
    }
    updatePrice();
}

function updatePrice() {
    let totalPrice = count * price;

    document.getElementById("Quantity").innerText = count;
    document.getElementById("value").innerText = "₹" + totalPrice;

    document.getElementById("items").innerText = count;
    document.getElementById("subtotal").innerText = "₹" + totalPrice;
    document.getElementById("total").innerText = "₹" + totalPrice;
}

</script>
</body>
</html>
