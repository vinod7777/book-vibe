<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
    <title>Buy</title>
    <style>
        body{
            background: #f4f4f4;
        }
     

    .payment-container{
        margin:10% 35%;
        width:450px;
        background:rgb(122, 148, 218);
        padding:20px;
        border-radius:10px;
        border: 2px;
        text-align: center;
        
         
    }

    .methods button{
        margin:5px;
        padding:8px 12px;
        border-radius: 2px;
        margin-top:10px;
        
    }
    .btns{
        padding: 20px;
        
    }
    .btns input{
        padding: 5px;
        width: 100%;
        margin-top: 10px;
        border-radius: 10px;
        border: 0;
        cursor: pointer;

    }
   
 

    .mmcvv{
        display:flex;
        gap:10px;
    }

    .pay{
        width:100%;
        margin-top:15px;
        padding:10px;
        background:#F26A21;
        color:white;
        border:none;
        border-radius:6px;
    }
    .payment-container h1{
       color: #0D3B66
    }
    .buyimg{
        margin-top:15px;
    }
            
    </style>
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="payment-container">

    <h2>Select Payment Method</h2>

    <div class="methods">
        <button>Card</button>
        <button>UPI</button>
        <button>cash on delivery</button>
    </div>
    <div class="buyimg">
    <img src="../assets/qr.png" alt="" height="100" width="100">
</div>
<div id="full">
    <div class="btns" id="btns1">

        <input type="text" placeholder="Card Number">
        <input type="text" placeholder="Cardholder">
        <div class="mmcvv">
            <input type="text" placeholder="MM/YY">
            <input type="text" placeholder="CVV">
        </div>

        <button class="pay">pay now</button>

    </div>
</div>
</div>
<?php include "footer.php"; ?>
    
</body>
</html>