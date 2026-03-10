<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
           
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            
            font-family:  sans-serif;
         
        }
        .main{
            display: flex;
            width: 100%;
            
          
            height: 260px;
            margin-top: 80px;}
        .image-container {
            flex: 1;
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            width: 100%;
            background-color: #F26A21;
            flex-direction: column;
            justify-content: center;
            
        }
        .image-container img {
            width: 100%;
            height: 300px;
          ;
        }

        </style>
</head>
<body>
<div class="main">
        <div class="image-container">
            <img src="https://www.shutterstock.com/image-photo/customer-service-call-center-contact-600nw-2493101023.jpg" alt="">
         
       
        </div>

</div>
   
    <?php include "nav.php"; ?>

    <?php include "footer.php"; ?>
    
</body>
</html>