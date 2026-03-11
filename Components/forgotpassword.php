<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:sans-serif;
        }
        .instr{
            width:400px;
            height:100px;
            background-color: #0D3B66;
            color: white;
            text-align: start;
            padding: 20px;
            border-start-start-radius: 10px;
            border-start-end-radius: 10px;

        }
        .instr p{
            line-height:20px;
        }
        .forgot{
            border-end-start-radius: 10px;
            border-end-end-radius:10px ;
            width:400px;
            height:200px;
            background-color: #264f76;
            padding: 20px;
            
        }
        .tor{
            padding:100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .formpass{
            display: flex;
            flex-direction: column;
        }
        
        form input{
            width: 250px;
            height: 40px;
            border-radius: 10px;
            border:none;
        }
        .in1{
            display: flex;
            gap: 10px;
        }
        .btt{
            width: 100px;
            border-radius: 10px;
            border: none;
            background-color: #F26A21;
            color: white;
            font-weight: bolder;
            cursor: pointer;
            
        }
        .btt:hover{
            background-color: #0D3B66;
            transition: background 0.3s ease;

        }
        .lab{
            color:white;
        }
    </style>
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="tor">
        <div class="instr">
            <p>please Enter your Email Address you will receive an  email message with instructions on how to reset your password.</p>
        </div>
        <div class="forgot">
            <form action="" class="formpass">
                <label for="" class="lab">Email*</label>
                <div class="in1">
                    <input type="email">
                    <button class="btt">Get OTP</button>
                </div><br>
                <label for="" class="lab">OTP*</label>
                <div class="in1">
                    <input type="password">
                    <button class="btt">submit</button>
                </div>
            </form>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>