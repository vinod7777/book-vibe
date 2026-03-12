<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
    <title>Buy</title>
    

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Method</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:sans-serif;
}

body{
     font-family:  sans-serif;
    background-color: #f4f4f4;
}
.h1cls{
       color: #0D3B66;
       text-align: center;
}

.buymain{
    flex-wrap: wrap;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    flex-direction:row;
    gap:20px;
    margin-top:50px;
}

.sec1{
    margin-top:80px;
width: 480px;
height: 550px;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 5px 20px rgba(0,0,0,0.1);
}


.sec5{
width: 400px;
height: 300px;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 5px 20px rgba(0,0,0,0.1);
 margin-top:100px;
}

h1{
text-align:center;
margin-bottom:30px;
color:rgb(243, 106, 33);
}

.sec2{
display:flex;
justify-content:center;
gap:15px;
margin-bottom:30px;
}

.sec3{
padding:10px 20px;
border:2px solid #0D3B66;
background:transparent;
color:#0D3B66;
border-radius:20px;
cursor:pointer;
font-weight:bold;
margin-top:10px;
}

.sec3.active{
background:#0D3B66;
color:white;
}

.sec4{
display:none;
}

.sec4.active{
display:block;
}

input{
width:100%;
padding:10px;
margin:8px 0;
border:1px solid rgb(243, 106, 33);
border-radius:5px;
}

.row{
display:flex;
gap:10px;
}

button.pay{
width:100%;
padding:10px;
background:rgb(243, 106, 33);
color:white;
border:none;
border-radius:6px;
margin-top:30px;
cursor:pointer;
}

button.pay:hover{
background:#0D3B66;
}

.qr{
display:flex;
justify-content:center;
}

.qr img{
width:200px;
}

.cod{
text-align:center;
font-size:18px;

line-height:1.6;
}
.buydiv1{
    display: flex;
    justify-content: space-between;
    margin-top: 5px;
    margin-bottom: 10px;
}
.buydiv2{
    display: flex;
    justify-content: space-between;
    margin-top: 5px;
    margin-bottom: 10px;
    
}
.buydiv3{
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
}
    
.buyp{
    margin-top: 10px;
    color: #0D3B66;
}
.buydiv3 b{
    color:#0D3B66;

}
.buydiv2 b{
 color:#0D3B66;
}

.buydiv1 b{
     color:#0D3B66;
}

</style>
</head>

<body>
     <?php include "nav.php"; ?>
    <div class="buymain">

  

<div class="sec1">

<h1 class="h1cls">Select Payment Method</h1>

<div class="sec2">
<button class="sec3 active" data-tab="card">Card <i class="fa-solid fa-credit-card"></i></button>
<button class="sec3" data-tab="upi">UPI <i class="fa-solid fa-sack-dollar"></i></button>
<button class="sec3" data-tab="cod">Cash on Delivery <i class="fa-solid fa-indian-rupee-sign"></i> </button>
</div>


<div id="card" class="sec4 active">

<input type="text" placeholder="Card Number">

<input type="text" placeholder="Cardholder Name">

<div class="row">
<input type="text" placeholder="MM/YY">
<input type="text" placeholder="CVV">
</div>

<button class="pay">Pay Now</button>

</div>


<div id="upi" class="sec4">

<div class="qr">
 <img src=..\assets\Book-vibe.png alt="" height="200" width="170"> 
</div>

<p style="text-align:center;margin-top:20px;">
Scan this QR code using any UPI app <i class="fa-brands fa-apple-pay"></i> <i class="fa-brands fa-amazon-pay"></i>  <i class="fa-brands fa-google-pay"></i>
</p>

</div>


<div id="cod" class="sec4">

<div class="cod">

<p><strong>Cash on Delivery Selected</strong></p>

<p>
You can pay when the product is delivered to your address.
Please keep the exact amount ready for faster delivery.
</p>
 <button class="pay">Place order <i class="fa-regular fa-truck"></i></button>

</div>

</div>

</div>

<div class="sec5">
    <div class="buydiv1">
    <p>MRP incl. of all taxes</p>
    <div>
    <p><i class="fa-solid fa-indian-rupee-sign"></i><strong>3500</strong></p>
    </div>
    </div>
 
        <div class="buyp">
       <b>Fees</b>
       </div>
         <div class="buydiv1">
            
      
        <div>
        <p> platform fee</p>

        </div>
        <div>
            <p><i class="fa-solid fa-indian-rupee-sign"></i><strong>19</strong></p>
        </div>

    </div>
    <hr>

    <div class="buyp">
        <b>Discounts</b>
    </div>
        <div class="buydiv2">
        <div>
            <p>MRP discount </p>
        </div>
        <div>
            <p> <i class="fa-solid fa-indian-rupee-sign"></i><strong>-1000</strong></p>
        </div>
        </div>

        <div class="buydiv2">
        <div>
            <p>Coupons for you</p>
        </div>
        <div>
            <p><i class="fa-solid fa-indian-rupee-sign"></i><strong>-30</strong></p>
        </div>
        </div>
        <hr>

        
            <div class="buydiv3">
                <div>
                <b> Total amount:</b>
            </div>
            <div>
                <p><i class="fa-solid fa-indian-rupee-sign"></i><strong>600</strong></p>
            </div>
        </div>

    

</div>
</div>

<script>

document.querySelectorAll(".sec3").forEach(btn=>{
btn.addEventListener("click",()=>{

document.querySelectorAll(".sec3").forEach(b=>b.classList.remove("active"))
document.querySelectorAll(".sec4").forEach(c=>c.classList.remove("active"))

btn.classList.add("active")

document.getElementById(btn.dataset.tab).classList.add("active")

})
})

</script>
<?php include "footer.php"; ?>

</body>
</html>