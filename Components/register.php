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
            background-image: url("https://png.pngtree.com/thumb_back/fh260/background/20241001/pngtree-open-book-with-magical-glowing-light-fantasy-and-imagination-image_16293843.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 150vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 80px;
            font-family: 'Segoe UI', sans-serif;
        }
        .main {
            display: flex;
            width: 900px;
            height: 600px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }
        .img-container {
            flex: 1;
            background: rgba(13, 59, 102, 0.9);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            text-align: center;
            color: white;
        }
        .img-container img {
            width: 120px;
            margin-bottom: 20px;
        }
        .well {
            font-size: 28px;
            font-weight: bold;
            color: #F26A21;
            margin-bottom: 15px;
        }
        .book {
            font-style: italic;
            font-size: 16px;
            line-height: 1.6;
        }
        .register-container {
            flex: 1;
            background: rgba(255, 255, 255, 0.95);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }
        .register-container h1 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #F26A21;
        }
        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input {
            width: 100%;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 16px;
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
        .btn {
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
        }
        .btn:hover {
            background-color: #0D3B66;
        }
    </style>
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="main">
        <div class="img-container">
            <img src="../assets/logo.png" alt="">
            <p class="well">Welcome to BookVibe</p>
            
            <p class="book"><span>"Books are important for the mind, heart, and soul. But dont take it from us: These quotes about reading speak for themselves....."</span></p>


        </div>
        <div class="register-container">
                <h1>Register</h1>
                <form action="register.php" method="post">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                      <div class="container">
    <input type="password" id="pass" placeholder="Password">
    <span class="eye" onclick="toggle()"><i class="fa-regular fa-eye"></i></span>
</div>
                    <input type="number" name="phone" placeholder="Phone Number" required>
                   <a href="hero.html"> <button type="submit" class="btn">Register</button>
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