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
            /* background-image: url("https://png.pngtree.com/thumb_back/fh260/background/20241001/pngtree-open-book-with-magical-glowing-light-fantasy-and-imagination-image_16293843.jpg"); */
            background-image: url("https://images.pexels.com/photos/3646172/pexels-photo-3646172.jpeg");
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
            .img-container{
                color: #F26A21;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin-right: 50px;
                height: 500px;
                width: 400px;
                background-color:#0D3B66;
                opacity: 80%;
          
            }
             .img-container img{
                height: 200px;
                width: 200px;
            }
             .img-container p{
                font-size: 30px;
                
            }
        .register-container{
            height: 500px;
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color:#0D3B66;
            opacity: 80%;
          
        }
        h1{
            font-size: 40px;
            margin-bottom: 20px;
            color: #F26A21;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="text"], input[type="password"], input[type="email"], input[type="number"]{
            width: 300px;
            height: 30px;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 10px;
            border: none;
            font-size: 18px;
        }
        input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, input[type="number"]:focus{
            outline: none;
            border: 0.5px solid #F26A21;
        }
         .container {
            position: relative;
        }
         .container input { 
            width: 300px;
            height: 30px;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 10px;
            border: none;
            font-size: 18px;
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
                top: 15px;
                cursor: pointer;
            }
            .btn{
            height: 40px;
            width: 250px;
            margin: 20px;
            border-radius: 10px;
            background-color: #F26A21;
            color: #0D3B66;
            border: none;
            transition: all 0.5s ease;

            }
            .btn:hover{
                cursor: pointer;
                background-color: #0D3B66;
                color: #F26A21;
                border: 0.5px solid #F26A21;

            }
            .well{
                font-size: 50px;
                margin-bottom: 20px;
                color: #F26A21;
            }
           p span{
            font-size: 18px;
            color:white;
            font-family: serif;
          
              
            }
            p{
                color: #F26A21;
                padding: 10px;
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