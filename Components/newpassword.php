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
            font-family:sans-serif;
        }
        .reset{
            width:400px;
            height:50px;
            background-color: #0D3B66;
            color: white;
            text-align: start;
            padding: 20px;
            border-start-start-radius: 10px;
            border-start-end-radius: 10px;

        }
        .resetdiv p{
            line-height:20px;
            font-size:18px;
        }
        .resetform{
            border-end-start-radius: 10px;
            border-end-end-radius:10px ;
            width:400px;
            height:250px;
            background-color: #264f76;
            padding: 20px;
            
        }
        .resetdiv{
            padding:100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .formnew{
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        
        form input{
            width: 250px;
            height: 40px;
            border-radius: 10px;
            border:none;
            font-size:14px;
            padding-left:5px;
        }
        
        .newbtt{
            height: 40px;
            width: 200px;
            border-radius: 10px;
            border: none;
            background-color: #F26A21;
            color: white;
            font-weight: bolder;
            cursor: pointer;
        }
        .formnew a{
            text-align:center;
            justify-content: center;
            padding-top:10px;
            
        }
        .newbtt:hover{
            background-color: #0D3B66;
            transition: background 0.3s ease;
        }
        .resetlabel{
            color:white;
        }
    </style>
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="resetdiv">
        <div class="reset">
            <p>Reset your password.</p>
        </div>
        <div class="resetform">
            <form action="" class="formnew">
                <label for="" class="resetlabel">New password</label>
                <input type="password">
                <br>
                <label for="" class="resetlabel">Confirm new password</label>
                <input type="password"><br>
                <a onclick="window.location.href='login.php'" class="newbtt">Reset my password</a>

            </form>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>