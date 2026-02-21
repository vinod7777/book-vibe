<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>

    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            /* background-image: url("https://png.pngtree.com/background/20250116/original/pngtree-an-open-book-with-glowing-light-in-pages-blur-background-picture-image_15699576.jpg"); */
            background-image: url("https://img.freepik.com/free-photo/black-friday-sales-sign-neon-light_23-2151833076.jpg?semt=ais_user_personalization&w=740&q=80");
          
            color: #F26A21;
            padding-top: 80px;
            background-repeat: no-repeat;
            background-size: cover;
            
        }   
         .main{
            height: 700px;
            width: 100%;
          
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
            }
        .login-container{
            height: 500px;
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: rgba(13, 59, 102, 0.9);
            border-radius: 0 10px 10px 0;
            backdrop-filter: blur(5px);
        }
        h1{
            font-size: 40px;
            margin-bottom: 20px;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="text"], input[type="password"]{
            width: 300px;
            height: 30px;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 10px;
            border: none;
            font-size: 18px;
        }
        input[type="text"]:focus, input[type="password"]:focus{
            outline: none;
            border: 0.5px solid #F26A21;
        }
     
            .container {
                position: relative;
                width: 350px;
            }

            .container input {
                width: 300px;
              margin-left: 15px;
               
            }

            .eye {
                position: absolute;
                right: 30px;
                top: 10px;
                cursor: pointer;
            }
                .image-container{
                height: 500px;
                width: 500px;
                background-color: rgba(255, 255, 255, 0.95);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                border: 1px solid #F26A21;
                border-radius: 10px 0 0 10px;
               
            }
            .image-container img{
                width: 150px;
                height: auto;
            }
            .image-container p{
                margin-left: 20px;
                font-size: 38px;
                max-width: 500px;
            }
           
            .well{
                font-size: 30px;
                font-weight: bold;
                color: #F26A21;
            }
            .quetation{
               
                font-style: italic;
                color:#0D3B66;
            }
            span{
                font-size: 20px;
            }
            .login{
                background-color: #F26A21;
                color: #0D3B66;
                border: none;
                border-radius: 10px;
                width: 300px;
                height: 40px;
                transition: all 0.5s ease;

                font-size: 20px;
            }
            .login:hover{
                cursor: pointer;
                background-color: #0D3B66;
                color: #F26A21;
                border: 1px solid #F26A21;
            }
           

    </style>
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="main">
        <div class="image-container">
            <img src="/assets/logo.png" alt="">
            <p class="well">Welcome to Book Vibe
            </p>
            <p class="quetation">
                <span>
                “A reader lives a thousand lives before he dies . . . ...</span>
                <span>“You can never get a cup of tea large enough or a book long enough to suit me.” ...</span>
            </p>
        </div>
    <div class="login-container">
        
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <div class="container">
    <input type="password" id="pass" placeholder="Password">
    <span class="eye" onclick="toggle()"><i class="fa-regular fa-eye"></i></span>
</div>

            <a href="../Components/index.php"><button type="submit" class="login" onclick="log()">Login</button></a>
        </form>
        </div>

        </div>
    <?php include "footer.php"; ?>
</body>
<script>
function toggle() {
    let p = document.getElementById("pass");

    p.type = (p.type === "password") ? "text" : "password";
}
</script>

</html>
