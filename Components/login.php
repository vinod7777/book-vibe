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
            background: #f4f4f4;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height:auto;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 80px;
            font-family:  sans-serif;
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
        .or{
            width: 100%;
             margin: 20px;
             font-size: 16px;
             font-weight: bold;
             margin-top: 0px;
             
           
             color: white;
             text-align: center;
        }
        .reg-btn{
            
         
            
            background-color: transparent;
            color: white;
            border: 2px solid white;
            border-radius: 8px;
            font-size: 16px;
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
        .google{
            width: 30px;
            height: 30px;
            margin-top: 0px;
             transition: transform 0.3s ease;
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
        <a href="https://accounts.google.com/v3/signin/confirmidentifier?authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2Fsigninoptions%2Fpassword&dsh=S-771241039%3A1773148801156371&emr=1&followup=https%3A%2F%2Fmyaccount.google.com%2Fsigninoptions%2Fpassword&ifkv=ASfE1-qEdVtodVmULanriPPoUPSpfn1vIrVKpIiS5k1WjXAYpkLfO6_BSix6Sf0lnz-lQXs_olKGqA&mrp=security&osid=1&passive=1209600&service=accountsettings&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
            <p>Forgot Password?</p></a>
            <a href="../Components/index.php"><button type="submit" class="login-btn" onclick="log()">Login</button></a>
            </form>
            <span class="or">or</span>
            
            <a href="register.php"><button style=" padding: 15px 150px;" class="reg-btn">Sign Up</button></a>
        
        <a style="display: flex; align-items: center; margin-top: 20px; " href="https://accounts.google.com/v3/signin/accountchooser?access_type=offline&client_id=684525534462-3ddgntluo1jlp36lg39faio2isac53d6.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Fauth.mygov.in%2Fhybridauth%2Fendpoint%3Fhauth.done%3DGoogle&response_type=code&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&dsh=S-802726885%3A1773148661528887&o2v=1&service=lso&flowName=GeneralOAuthFlow&opparams=%253F&continue=https%3A%2F%2Faccounts.google.com%2Fsignin%2Foauth%2Fconsent%3Fauthuser%3Dunknown%26part%3DAJi8hAMlhg1MQIis54FnLmhymAfUo3RjeKLRwjhfOYf1jB0j4PDN_jSTX_7t6xzNoqyioEacPhOesKCfHa1ogi8i3E1c1_Hoeb21dKelHBaYjDDG4XKl9KO1UtaUqmBkCeW_9KGo-I1DM63V1zZzXDhm_VRZBhVuShbdZpN0iGiXIJ3zRv6tt6chj3BgnMFDFoq98s90yv-GyVoFYburOKVcFTSVP8BEhcn3XoDICECga2_vD_3jZEKLxN0OAY_AN5k1pTSXpLD1we6eb5eLNVgraagWIg56C2jti8-Egoy0YIetiDPmIo5yuMY997yMitGt7SZLpFb-lm_xT2sxJpzB-M-mMXtkuHbVqvevXeLjueJsJEdnDItZJ7n3Z3ZSc8Yc7AprgyjLCHqKAuag9MJSf2qwcMzlsN4JkOmN1uK8mvzD4AGNd7r52SwhClScGIDPjhfOChG_s_G87Q_lwZGRKlHcAuw4gg%26flowName%3DGeneralOAuthFlow%26as%3DS-802726885%253A1773148661528887%26client_id%3D684525534462-3ddgntluo1jlp36lg39faio2isac53d6.apps.googleusercontent.com%26requestPath%3D%252Fsignin%252Foauth%252Fconsent%23&app_domain=https%3A%2F%2Fauth.mygov.in">
            <p style=" text-align: right; color: rgb(247, 246, 246);">
        Sign in with Google </p>
        <img src="https://imgs.search.brave.com/cMeR-TEzSzc3L_T_t4c0ZKSZu5B4BxkMPGrZ48urikE/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4x/Lmljb25maW5kZXIu/Y29tL2RhdGEvaWNv/bnMvZ29vZ2xlLXMt/bG9nby8xNTAvR29v/Z2xlX0ljb25zLTA5/LTUxMi5wbmc" alt="" class="google">
    </a>

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
