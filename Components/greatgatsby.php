<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>

    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            padding-top: 80px;
            background-color: #f4f4f4;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }
        .product-container {
            display: flex;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 1000px;
            width: 100%;
        }
        .image-section {
            flex: 1;
            background: #f9f9f9;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }
        .image-section img {
            max-width: 100%;
            max-height: 500px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            border-radius: 10px;
        }
        .details-section {
            flex: 1;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .details-section h1 {
            font-size: 42px;
            color: #0D3B66;
            margin-bottom: 15px;
        }
        .details-section p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .price-tag {
            font-size: 32px;
            color: #F26A21;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .original-price {
            color: #999;
            text-decoration: line-through;
            font-size: 18px;
            margin-left: 10px;
        }
        .rating {
            color: #F26A21;
            margin-bottom: 30px;
            font-size: 18px;
        }
        .action-buttons {
            display: flex;
            gap: 20px;
        }
        .button {
            flex: 1;
            padding: 15px;
            background-color: #F26A21;
            color: white;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            border: none;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        .button:hover {
            background-color: #0D3B66;
        }
        .button-outline {
            background-color: transparent;
            border: 2px solid #0D3B66;
            color: #0D3B66;
        }
        .button-outline:hover {
            background-color: #0D3B66;
            color: white;
        }
        </style>
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="main">
    <div class="card1">
        <img src="../assets/recommendedimgs/storybook-1.webp" alt="Great Gatsby Cover">
    </div>
    <div class="card2">
        <div class="great">
        <h1>Great Gatsby</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.</p>
        </div>
        <div class="price">
        <h2 style="color:#F26A21; font-size: 24px;">Price: 250.00</h2>
        <p>Original Price:<del> 300.00</del></p>

        <div>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>

        </div>
        <div class="bottom">
        <div class="btn">
       <a href="cart.html"><button class="button">Add to Cart</button></a>
          </div>
        <div class="btn">
          <a href="buy.html"><button class="button">Buy Now</button></a>


        </div>
      
        </div>
    </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>