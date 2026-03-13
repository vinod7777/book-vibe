<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
    <title>The Great Gatsby | Product Details</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: sans-serif;
            overflow-x: hidden; /* Prevents horizontal scroll from marquee */
        }

        .main {
            width: 100%;
            margin-bottom: 50px;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
        }

        /* Sidebar Thumbnails */
        .side-div {
            display: flex;
            flex-direction: column;
            gap: 10px;
            position: sticky;
            top: 100px; /* Adjust based on nav height */
            margin: 10px;
            margin-top: 100px;
        }

        .side-img {
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: transform 0.2s;
        }

        .side-img:hover {
            transform: scale(1.05);
        }

        /* Hero Image Section */
        .hero {
            position: sticky;
            top: 100px;
            margin-top: 100px;
        }

        .hero img {
            border-radius: 10px;
            box-shadow: 0 20px 30px rgba(0,0,0,0.2);
            object-fit: contain;
        }

        /* Content Details */
        .details-section {
            border-radius: 10px;
            margin-top: 100px;
            width: 700px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            display: flex;
            padding: 40px;
            flex-direction: column;
            background: #fff;
        }

        .details-section h1 {
            font-size: 42px;
            color: #F26A21;
            margin-bottom: 15px;
        }

        .price-tag {
            font-size: 32px;
            color: #F26A21;
            font-weight: bold;
        }

        .book-info {
            display: flex;
            gap: 30px;
            margin-top: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 30px;
        }

        .list-inf-book ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .list-inf-book span {
            font-weight: bold;
            color: #0D3B66;
        }

        .button {
            height: 50px;
            width: 180px;
            background-color: #F26A21;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            border: none;
            font-weight: bold;
            margin-top: 10px;
            transition: 0.3s;
        }

        .button:hover {
            background-color: #0D3B66;
        }

        /* Author and Info Sections */
        .info {
            margin-top: 40px;
        }

        .author {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            align-items: center;
        }

        .author img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* RECOMMENDATION SECTION - FIXED */
        .recomend-info {
            width: 100%;
            padding: 60px 0;
            background-color: #f9f9f9;
            text-align: center;
            clear: both;
        }

        .recomend-info h2 {
            color: #0D3B66;
            font-size: 32px;
            margin-bottom: 30px;
        }

       </style>
</head>
<body>
    <?php include "nav.php"; ?>

    <div class="main">
        <div class="side-sec">
            <div class="side-div">
                <div class="side-img" onclick="fun(this.firstChild.src)"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-OyIrDv0tPZuFCvczS4cBrztZVFa7wFmx4g&s" height="100" width="80"></div>
                <div class="side-img" onclick="fun(this.firstChild.src)"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQigoqAAyygUsm-If44c82OYi5RzmFDyqYhXg&s" height="100" width="80"></div>
                <div class="side-img" onclick="fun(this.firstChild.src)"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtHl7GBTrVTf4Fkka_mJgRBC4q0DfWv4-7uA&s" height="100" width="80"></div>
                <div class="side-img" onclick="fun(this.firstChild.src)"><img src="https://store.whitefalconpublishing.com/cdn/shop/products/Gatsby_Cover_Front_large.jpg?v=1544078134" height="100" width="80"></div>
            </div>
        </div>

        <div class="hero">
             <img id="big" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-OyIrDv0tPZuFCvczS4cBrztZVFa7wFmx4g&s" height="550" alt="Main Book Cover">
        </div>

        <div class="details-section">
            <h1>The Great Gatsby</h1>
            <p style="color: #666;">A classic tale of mystery, wealth, and tragic love in the Jazz Age.</p>

            <div class="book-info">
                <div class="price-container">
                    <h2 class="price-tag">₹250.00</h2>
                    <p style="text-decoration: line-through; color: #999;">MRP: ₹300.00</p>
                    <div style="margin: 15px 0; color: #F26A21;">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <span style="color: #666; margin-left: 5px;">4.5/5</span>
                    </div>
                    <a href="../Components/cart.php"><button class="button">Add to Cart</button></a>
                    <a href="../Components/buy.php"><button class="button" style="background:#0D3B66;">Buy Now</button></a>
                </div>

                <div class="list-inf-book">
                    <ul>
                        <li><span>Author:</span> F. Scott Fitzgerald</li>
                        <li><span>Category:</span> Fiction / Classic</li>
                        <li><span>ISBN:</span> 9789370984653</li>
                        <li><span>Binding:</span> Paperback</li>
                        <li><span>Pages:</span> 180</li>
                        <li><span>Language:</span> English</li>
                        <li><span>Publisher:</span> TIMELESS CLASSICS</li>
                    </ul>
                </div>
            </div>

            <div class="info">
                <div class="author">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo3-SxOc2kVUrBg6BVp43xoLSszarSFdDfEA&s" alt="Author">
                    <div>
                        <h2 style="color: #0D3B66;">About the Author</h2>
                        <p style="font-size: 14px; line-height: 1.5;">F. Scott Fitzgerald was an American novelist whose works illustrate the Jazz Age. He is considered one of the greatest American writers of the 20th century.</p>
                    </div>
                </div>
                
                <h2 style="color: #0D3B66; margin-top: 20px;">Book Summary</h2>
                <p style="line-height: 1.6; margin-top: 10px; color: #444;">
                    The Great Gatsby explores themes of decadence, idealism, resistance to change, social upheaval, and excess, creating a portrait of the Roaring Twenties that has been described as a cautionary tale regarding the American Dream.
                </p>
            </div>
        </div>
    </div>
    <?php include "scroling.php"; ?>
    <?php include "footer.php"; ?>

    <script>
        function fun(src) {
            document.getElementById("big").src = src;
        }
    </script>
</body>
</html>     