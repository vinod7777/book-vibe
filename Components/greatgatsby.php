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
        
        .main {
           width: 100%;
           margin-bottom: 50px;
         
          
           
            display: flex;
            justify-content:space-around;
        
          
          
        }
     
        .side-div{
  
   display: flex;
   flex-direction: column;
    gap: 10px;
     position:;
            top: 0;
            margin:10px;
            margin-top: 100px;
             position: sticky;
            top: 0;
            margin:10px;
            margin-top: 200px;


    
     
    
    
        }
        .side-img{
    
        
            border-radius: 5px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            cursor: pointer;
    
        }

        /* .product-container {
            display: flex;
          
            border-radius: 20px;
            
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
          
            
        }
        .image-section {
           height:1000px;
           width: 700px;
           
           display: flex;
            justify-content: center;
            align-items: center;
           display: grid;
           
           grid-template-columns: repeat(2, 1fr);
        }
        .img-box{
            height: 400px;
            width: 300px;
            border-radius: 5px;

           margin-left: 25px;
           box-shadow: #1f1919;
        }
        .img-box img{
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
        .image-section img {
            max-width: 100%;
                    max-height: 500px;
                    box-shadow: 0 20px 30px rgba(88, 87, 86, 0.5);
            border-radius: 10px;
        } */
        .details-section {
            
            
    
            border-radius: 10px;
            margin-top: 100px;
            
            height: 1500px;
            width: 700px;
            font-family: sans-serif;
            box-shadow: 0 10px 30px rgba(4, 4, 4, 0.1);
            display: flex;
            padding: 50px;
            flex-direction: column;
            
        }
        .details-section h1 {
            font-size: 42px;
            color: #F26A21;
         
            margin-bottom: 15px;
        }
        .details-section p {
            
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .price-tag {
            font-size: 32px;
            color: #F26A21;
            font-weight: bold;
            margin-bottom: 10px;
        }
        p{
            color: rgb(122, 109, 109);
        }
        .price{
            display: flex;
            align-items: center;
            flex-direction: column;
        
            align-items: flex-start;
            width: 200px;
            

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
         
            height: 50px;
            width: 150px;
            background-color: #F26A21;
            color: white;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            border: none;
            font-weight: bold;
            transition: 0.3s ease;
            
           
        }
        i{
            color: #F26A21;
            font-size: 20px;
        }
        .button:hover {
            background-color: #0D3B66;
            border: 1px solid #F26A21;
        }
        .button-outline {
            background-color: transparent;
           
            color: #0D3B66;
        }
        .button-outline:hover {
            background-color: #0D3B66;
            color: white;
        }
        .bottomm{
            height: 200px;
            width: 300px;
          margin-top: -20px;
         gap: 20px;
            display: flex;
            flex-direction:column;
            justify-content: center;
           align-items: flex-start;
        }
        .img-sec{
            height: 700px;
            width: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .book-info{
            width: 600px;
            height: 500px;
            display: flex;
            gap: 50px;
            
            flex-direction: row;
            
           
        }
         .book-info p{
            color: rgb(122, 109, 109);
        }
        .list-inf-book{
            height: 300px;
            width: 350px;
           
           
           
           
        }
            .list-inf-book ul{
            list-style: none;
            padding-left: 20px;
            gap: 5px;
            display: flex;
            flex-direction: column;
            
        }
        ul li span{
            color:#0D3B66;
            font-size: 16px;
            margin-bottom: 10px;
        }
        ul li{
            color: rgb(122, 109, 109);
            font-size: 15px;
            margin-bottom: 10px;
           
            gap: 10px;
        }
        .author{
            display: flex;
            flex-direction: row;
            gap: 20px;
        }
        .info p{
             color: rgb(21, 14, 14);
            margin-top: 10px;
        }
        .info h2{
            color: #0D3B66;
            margin-bottom: 10px;
        }
        .bottomm-info{
           
            height: 500px;
            margin-top: 20px;
        }
        .bottomm-info p{
             color: rgb(21, 14, 14);
            margin-top: 10px;
        }
        .bottomm-info h2{
            color: #0D3B66;
            margin-bottom: 10px;
        }
        .rating1{
            color: #F26A21;
            font-size: 18px;
            margin-top: 10px;
        }

        
       .hero img{
            position: sticky;
            top: 0;
            margin:10px;
            margin-top: 100px;
            
           
           

        }
        .foot-info{
            height: 300px;
            width: 100%;
            display: flex;
            gap: 20px;
            margin-top: 50px;
            margin-top:-10px;
        }
        .bot-inf{
            height: 100%;
            width: 25%;
            background-color: #F26A21;
            
            
        }
        .bot-inf img{
            height: 100%;
            width: 100%;
            object-fit: cover;
            
        }
       










      
        
       
        </style>
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="main">
    <!-- <div class="main">
    <div class="image-section">
      <div class="img-box">
        <img src="../assets/academicimages/WhatsApp Image 2026-03-06 at 6.09.51 PM.jpeg" alt="">

      </div>
      <div class="img-box">
         <img src="../assets/academicimages/WhatsApp Image 2026-03-06 at 6.10.44 PM.jpeg" alt="">


      </div>
      <div class="img-box">
         <img src="../assets/academicimages/WhatsApp Image 2026-03-06 at 6.11.13 PM.jpeg" alt="">

      </div>
      <div class="img-box">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3lqYmA8opediJw5SD_QQf7HPyLuDqS5BI2g&s" alt="">


      </div>
    </div> -->

    <div class="side-sec">
        <div class="side-div">
            <div class="side-img" onclick="fun('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-OyIrDv0tPZuFCvczS4cBrztZVFa7wFmx4g&s')"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-OyIrDv0tPZuFCvczS4cBrztZVFa7wFmx4g&s" alt="" height="100" width="100"></div>
            <div class="side-img" onclick='fun("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQigoqAAyygUsm-If44c82OYi5RzmFDyqYhXg&s")'><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQigoqAAyygUsm-If44c82OYi5RzmFDyqYhXg&s" alt="" height="100" width="100"></div>
            <div class="side-img" onclick="fun('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtHl7GBTrVTf4Fkka_mJgRBC4q0DfWv4-7uA&s')"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtHl7GBTrVTf4Fkka_mJgRBC4q0DfWv4-7uA&s" alt="" height="100" width="100"></div>
            <div class="side-img" onclick="fun('https://store.whitefalconpublishing.com/cdn/shop/products/Gatsby_Cover_Front_large.jpg?v=1544078134')"><img src="https://store.whitefalconpublishing.com/cdn/shop/products/Gatsby_Cover_Front_large.jpg?v=1544078134" alt="" height="100" width="100"></div>

        </div>
        
    </div>


   <div class="hero">
         <img id="big" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-OyIrDv0tPZuFCvczS4cBrztZVFa7wFmx4g&s" height="600" alt="">
            




   </div>
       





    <div class="details-section">
        <div class="great">
        <h1>Great Gatsby</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.</p>
        </div>
        <div class="book-info">
        <div class="price">
        <h2 style="color:#F26A21; font-size: 24px;">Price: 250.00</h2>
        <p>Original Price: <del>300.00</del></p>

        <div>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        <p class="rating1">4.5/5</p>

        

        <div class="bottomm">
        <div class="btn">
       <a href="../Components/cart.php"><button class="button">Add to Cart</button></a>
          </div>
        <div class="btn">
          <a href="../Components/buy.php"><button class="button">Buy Now</button></a>


        </div>
      
        </div>
        </div>
        <div class="list-inf-book">
            <ul>
                <li><span>Book : </span> THE GREAT GATSBY</li>
                 <li><span>Author: </span> F. Scott Fitzgerald</li>
                  <li><span>Category :</span> Non Fiction</li>
                   <li><span>ISBN :  </span> 9789370984653</li>
                    <li><span>Binding :  </span> Normal</li>
                     <li><span>Publishing Date : </span>  30-01-2026</li>
                      <li><span>Publisher :</span>  TIMELESS CLASSICS</li>
                
                    <li><span>Edition : </span> First Edition</li>
                    <li><span>Number of pages : </span> 180</li>
                    <li><span>Language : </span> English</li>

            </ul>

        </div>
        </div>
        <div class="info">
            <div class="author">
            <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo3-SxOc2kVUrBg6BVp43xoLSszarSFdDfEA&s" alt=""></div>
            <div>

          
            <h2>Author Information</h2>
            <p>Published in 1925, F. Scott Fitzgerald's The Great Gatsby is a seminal 1920s American novel exploring themes of wealth, love, and the American Dream. Narrated by Nick Carraway, the story follows mysterious millionaire Jay Gatsby’s obsessive pursuit of Daisy Buchanan amidst the opulent, decadent backdrop of Long Island's Jazz Age.</p>
            </div>
            </div>
            <h2>Book Information</h2>
        
            <p>The Great Gatsby is F. Scott Fitzgerald’s masterful portrait of the Roaring Twenties, a dazzling decade of wealth, ambition, and illusion. Through the eyes of narrator Nick Carraway, we enter the glittering world of Jay Gatsby, a mysterious millionaire whose lavish parties and relentless pursuit of the elusive Daisy Buchanan expose the emptiness beneath the glamour. Set against the backdrop of Jazz Age New York, this enduring American classic explores themes of love, identity, and the dark side of the American Dream.
        </div>
        <div class="bottomm-info1">
            <h2>Why Read The Great Gatsby?</h2>
            <p>F. Scott Fitzgerald's The Great Gatsby is a timeless classic that offers a captivating glimpse into the Roaring Twenties, exploring themes of wealth, love, and the elusive American Dream. Through its richly drawn characters and evocative prose, the novel delves into the complexities of human desire and the consequences of chasing illusions. Reading The Great Gatsby allows you to experience a masterful portrayal of a bygone era while reflecting on universal themes that continue to resonate today.</p>

        </div>
        <div class="foot-info">
            <div class="bot-inf"><img src="https://m.media-amazon.com/images/I/81dlVJqIBAL._UF1000,1000_QL80_.jpg" alt=""></div>
            <div class="bot-inf"><img src="https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1650033243i/41733839.jpg" alt=""></div>
            <div class="bot-inf"><img src="https://covers.shakespeareandcompany.com/97818402/9781840227956.jpg" alt=""></div>
            <div class="bot-inf"><img src="https://m.media-amazon.com/images/I/51ts3UxcNMS._AC_UF1000,1000_QL80_.jpg" alt=""></div>
     </div>
    </div>
    </div>
    <div style="height: 100px;"></div>

    </div>
    <?php include "footer.php"; ?>
  
    
    <script>

// let array=[
//                 "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-OyIrDv0tPZuFCvczS4cBrztZVFa7wFmx4g&s",
//                 "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQigoqAAyygUsm-If44c82OYi5RzmFDyqYhXg&s",
//                 "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtHl7GBTrVTf4Fkka_mJgRBC4q0DfWv4-7uA&s",
//                 "https://store.whitefalconpublishing.com/cdn/shop/products/Gatsby_Cover_Front_large.jpg?v=1544078134"
//             ]
//             let c=0
//           let a=  document.getElementsByClassName("hero")
//             function show(){
              
//                 a[0].style.backgroundImage=`url(${array[c]})`
//                 c++
//                 if(c>=array.length){
//                     c=0
//                 }
//             }
//                show()
//            setInterval(show,3000)
             
                
           function fun(src){
            let a=document.getElementById("big")
            a.src=src
           } 
      
      </script>

        
   
</body>
</html>