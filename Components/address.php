<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BOOK-VIBE Cart</title>

<script src="https://kit.fontawesome.com/ebdd1363cb.js" crossorigin="anonymous"></script>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:sans-serif;
}

body{
    background:white;
    padding:40px;
}

.padding{
    max-width:1200px;
    margin:auto;
   
}

.title{
    text-align:center;
    margin-bottom:40px;
    color:rgb(128, 128, 174);
    font-size:32px;
}

.cart{
    display:flex;
    gap:30px;
    align-items:flex-start;
  
}

.cart1{
    display:flex;
    flex-direction:column;
    gap:20px;
}

.order{
    width: 600px;
    margin-top:20px;
    background:rgb(247, 245, 245);
    padding:20px;
    border-radius:10px;
    box-shadow:0 3px 10px rgba(0,0,0,0.05);
    top:20px;
}

.order h2{
    margin-bottom:20px;
    color:rgb(128, 128, 174);
}

.add1{
    width: 600px;
    height: 600px;
    background:white;
    padding:20px;
    border-radius:10px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 3px 10px rgba(0,0,0,0.05);
}

.add1 button{
    padding:8px 15px;
    border:none;
    background:rgb(223, 164, 54);
    color:white;
    border-radius:5px;
    cursor:pointer;
}

.add1 button:hover{
    background:rgb(128, 128, 174);
}

.add3{
    display:flex;
    gap:20px;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 3px 10px rgba(0,0,0,0.05);
    align-items:center;
}
.add6{
    
    font-size: 20px;
}
.add6 button{
    
    font-size: 20px;
}
.product-img{
    width:120px;
    height:160px;
    object-fit:cover;
    border-radius:8px;
}


.details h2{
    font-size:20px;
    color:rgb(43, 43, 103);
    margin-bottom:5px;
}

.category{
    color:rgb(119, 88, 29);
    font-size:14px;
    margin-bottom:10px;
}

.desc{
    margin-bottom:10px;
}

.quantity{
    display:flex;
    align-items:center;
    gap:15px;
    background:rgb(190, 158, 162);
    padding:5px 15px;
    border-radius:20px;
    width:fit-content;
}

.quantity button{
    border:none;
    background:none;
    font-size:22px;
    cursor:pointer;
}

.price-section{
    text-align:right;
}

.price-section h2{
    color:rgb(92, 78, 50);
}

.summary-row{
    width: 500px;
    height: 50px;
    display:flex;
    justify-content:space-between;
    margin:10px 0;
    color:rgb(119, 88, 29);
}

.total{
    font-weight:bold;
    font-size:18px;
    border-top:1px solid #eee;
    padding-top:10px;
}

.continue{
    width:100%;
    padding:15px;
    margin-top:20px;
    border:none;
    border-radius:8px;
    background:rgb(119, 88, 29);
    color:white;
    font-size:18px;
    cursor:pointer;
}

.continue:hover{
    background:rgb(128, 128, 174);
}

.main-form{
    width: 550px;
    margin-top: 20px;
    padding: 20px 10px;
    background:rgb(238, 233, 229);
    border-radius:10px;
    box-shadow:0 3px 10px rgba(0,0,0,0.05);
}
.form1{
    margin-top: 20px;
    padding: 40px 20px 10px 10px;
}
.form2{
    padding: 20px 10px;
    margin-top: 5px;
    width: 250px;
    height: 40px;
    border-radius: 5px;
}
.main-form button{
    margin-top: 20px;
    width: 70px;
    height: 30px;
}
.delivery-info{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 100px;
}
.pin-code{
    display: flex;
    gap: 20px;
}
.phone-no{
    display: flex;
    gap: 20px;
}
.submitbu button{
    width: 220px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 120px;
}
</style>
</head>

<body>
     <?php include "nav.php"; ?>

<section class="padding">



<div class="cart">

    <div class="cart1">


    <div class="add1">
    <div>
    <div class="delivery-info">
    <div class="add6"><h3>Deliver to:</h3></div>
    <div class="add6"><button>Change</button></div>
    </div>
    <form action="" class="main-form">
        <div>
        <label type="test" class="form1">Enter your name:</label><br>
        <input type="text" placeholder="your answer" class="form2">
        </div>
        <div><br>
         <label type="test" class="form1">Enter your Location:</label><br>
        <input type="text" placeholder="Flat/House number /Floor/Building" class="form2"><br>
        </div><br>
        <label type="test" class="form1">Pin Code:</label><br>
        <div class="pin-code">
            <div><input type="text" placeholder="Area" class="form2"></div>
            <div><input type="text" placeholder="Pin Code" class="form2"></div>
        </div><br>
         <label type="test" class="form1">Phone Number:</label><br>
        <div class="phone-no">
            <div><input type="text" placeholder="Main Number" class="form2"></div>
            <div><input type="text" placeholder="Alternate Number" class="form2"></div>
        </div>
        <div class="submitbu"><button type="submit">Submit</button></div>
    </form>
   
</div>
    

    </div>



    <div class="add3">

        <img src="../assets/academicimages/ai.jpg" class="product-img">

        <div class="details">

        <h2>Artificial Intelligence</h2>
        <p class="category">Programming Language</p>
        <p class="desc">Exploring the future of AI and its applications.</p>

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

</div>



<div class="order">

<h2>Order Summary</h2>

<div class="summary-row">
<span>Subtotal (<span id="items">1</span> items)</span>
<span id="subtotal">₹899</span>
</div>

<div class="summary-row">
<span>Shipping</span>
<span>Free</span>
</div>

<div class="summary-row total">
<span>Total</span>
<span id="total">₹899</span>
</div>

<a href="/buy.php"><button class="continue">Buy Now</button></a>

</div>

</div>

</section>

<script>

let count = 1;
let price = 899;

document.getElementById("increase").addEventListener("click",function(){
count++;
update();
});

document.getElementById("decrease").addEventListener("click",function(){
if(count>1){
count--;
}
update();
});

function update(){

let total = count * price;

document.getElementById("Quantity").innerText = count;
document.getElementById("items").innerText = count;

document.getElementById("value").innerText = "₹"+total;
document.getElementById("subtotal").innerText = "₹"+total;
document.getElementById("total").innerText = "₹"+total;

}

</script>
<?php include "footer.php"; ?>

</body>
</html>