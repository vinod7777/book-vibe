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
            background-image: url("https://img.freepik.com/free-photo/minimal-digital-futuristic-technology-background_53876-102622.jpg?semt=ais_hybrid&w=740&q=80");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height:auto;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 80px;
            font-family: 'Segoe UI', sans-serif;
        }
        .main {
            margin:100px;
            display: flex;
            width: 900px;
            height: 550px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }
        .image-container {
            flex: 1;
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            text-align: center;
        }
        .image-container img {
            width: 120px;
            margin-bottom: 20px;
        }
        .well {
            font-size: 28px;
            font-weight: bold;
            color: #F26A21;
            margin-bottom: 15px;
        }
        .quetation {
            font-style: italic;
            color: #0D3B66;
            font-size: 16px;
            line-height: 1.6;
        }
        .quote{
            
           
            color: #0D3B66;
        }
        .login-container {
            flex: 1;
            background: rgba(13, 59, 102, 0.9);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            color: white;
        }
        .login-container h1 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #F26A21;
        }
        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 15px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.9);
        }
        .container {
            position: relative;
            width: 100%;
        }
        .eye {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
        }
        .login-btn {
            width: 100%;
            padding: 15px;
            background-color: #F26A21;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-bottom: 20px;
        }
        .login-btn:hover {
            background-color: #0D3B66;
            border: 2px solid #F26A21;
        }
        span {
            text-align: center;
            color: white;
        }
        .reg-btn{
            width: 100%;
            padding: 15px;
            background-color: transparent;
            color: white;
            border: 2px solid white;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease, color 0.3s ease;
        }
        .reg-btn:hover {
          border: 2px solid #F26A21;
            color:#F26A21;

        }
        a{
            text-decoration: none;
            color: inherit;
        }

    </style>
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="main">
        <div class="image-container">
            <img src="../assets/logo.png" alt="">
            <p class="well">Welcome to Book Vibe
            </p>
            <p class="quetation">
                <span class="quote">
                “A reader lives a thousand lives before he dies . . . ...</span>
                <span class="quote">“You can never get a cup of tea large enough or a book long enough to suit me.” ...</span>
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

            <a href="../Components/index.php"><button type="submit" class="login-btn" onclick="log()">Login</button></a>
            <span class="or">or</span>
            <button class="reg-btn"><a href="register.php">Sign Up</a></button>
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
