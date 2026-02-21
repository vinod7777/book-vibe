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
    padding-top: 100px;
}
.padding{
        padding:20px;

}

.title{
    color: #0D3B66;
    font-size:48px;
    margin-bottom:40px;
    text-align: center;}

.cart{
    display:flex;
    gap:100px;
    justify-content: center;
    max-width: 1400px;
    margin: 0 auto;
}

.cart-text{
    background:#eeecee;
    border-radius:20px;
    padding:30px;
    display:flex;
    gap:25px;
    position:relative;
    box-shadow:0 5px 15px rgba(0,0,0,0.05);
    border: 1px solid black;
}

.del-icon{
    position:absolute;
    top:20px;
    right:20px;
    color:#0D3B66;
    font-size:48px;
    cursor:pointer;
    transition: all 1s ease;
}
.del-icon:hover{
    color:#ff4d4d;
}

.product-img{
    width:250px;
    height: 300px;
    border-radius:12px;
    cursor: pointer;
}
.product-img:hover{
    transform: scale(1.05);
}

.details{
    margin-top: 20px;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    
}

.details h2{
    font-size:22px;
    margin-top: 20px;
    margin-bottom:6px;
}

.category{
    color:#777;
    margin-bottom:8px;
}

.desc{
    color:#666;
    font-size:14px;
    margin-bottom:20px;
}

.quantity{
    width: 150px;
    height: 50px;
    background:#eee;
    display:flex;
    align-items:center;
    border-radius:30px;
    gap:40px;
    justify-content: center;
    border: 2px solid red;
}

.quantity button{
    border:none;
    background:none;
    font-size:38px;
    cursor:pointer;
}
.quantity span{
    font-size:18px;
    font-weight:600;
}

.price{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:flex-end;
    min-width:120px;
}

.price h2{
    font-size:26px;
}

.price p{
    color:gray;
    font-size:14px;
}

.book-details{
    width: 350px;
    background:#f5f2f5;
    border-radius:20px;
    padding:50px;
    box-shadow:0 5px 15px rgba(0,0,0,0.05);
    border: 1px solid black;

}

.book-details h2{
    margin-bottom:20px;
}

.yajnesh{
    display:flex;
    justify-content:space-between;
    margin:15px 0;
    color:#555;
}

.free{
    color:green;
    font-weight:600;
}

.total{
    font-weight:700;
    font-size:18px;
    color:#000;
}



.continue{
    width:100%;
    padding:15px;
    margin-top:50px;
    border:none;
    border-radius:30px;
    background:#F26A21;
    cursor:pointer;
    transition: 0.5s all ease;
    font-size: 20px;
}

.continue:hover{
    background-color: #0D3B66;
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
                <button>-</button>
                <span>1</span>
                <button>+</button>
            </div>
        </div>

        <div class="price">
            <h2>₹899</h2>
            <p>₹899 each</p>
        </div>

    </div>

    <div class="book-details">
        <h2>Order Summary</h2>

        <div class="yajnesh">
            <span>Subtotal (1 items)</span>
            <span>₹599</span>
        </div>

        <div class="yajnesh">
            <span>Shipping</span>
            <span class="free">Free</span>
        </div>

        <hr>

        <div class="yajnesh total">
            <span>Total</span>
            <span>₹599</span>
        </div>

        <button class="continue">Continue Shopping</button>
    </div>

</div>
</section>
<?php include "footer.php"; ?>


</body>
</html>