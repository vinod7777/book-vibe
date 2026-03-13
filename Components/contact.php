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
            
             background-color: #f4f4f4;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;  
            font-family:  sans-serif;
         
        }
        .main{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin: 40px;
            width: 100%;
            height:100vh;
           margin-top: 100px;
        }
        .form1,.form2{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 700px;
            height: 100%;
            background-color: #0D3B66;
            border-radius: 10px;

        }
      
        input{
            width: 650px;
            height: 50px;
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
            border:none;
               font-size: 16px;
        }
        textarea{
            width: 650px;
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
            border:none;
               font-size: 16px;
        }
        input::placeholder{
            color: #4c4b4b;
            font-size: 16px;
        }
         textarea::placeholder{
            color: #4c4b4b;
            font-size: 16px;
}

        input:focus{
            outline: none;
            border: 1px solid #F26A21;
        }
        .btn-submit{
            width: 650px;
            height: 50px;
            background-color: #F26A21;
            color: white;
            border: none;
             margin: 10px;
            padding: 10px;
               font-size: 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-submit:hover{
            background-color:#0D3B66;
            border: 1px solid #F26A21;
        }
        .Message{
            height: 100px;
        }
        .address{
            padding: 20px;
            color:#f4f4f4;
        }
         .address h2{
            margin-bottom: 20px;
            color: #F26A21;
        }
         .address p{
            margin-bottom: 10px;
              font-family: 'Segoe UI', sans-serif;
         }
         iframe{
            border-radius: 10px;
         }
         .contact-info{
            padding: 20px;
            color:#f4f4f4;
            padding:20px;
}   
        .contact-info h2{
            margin-bottom: 20px;
            color: #F26A21;
        }
         .contact-info p{
            margin-bottom: 10px;
            font-family: 'Segoe UI', sans-serif;
         }
         @media (min-width:740px) and (max-width:1080px){
            body{
                margin-top: 100px;
                
            
            }
            .main{
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .form1,.form2{
                width: 90%;
                height: auto;
                margin-bottom: 20px;
                padding-bottom: 20px;
            }
             input,textarea,.btn-submit{
                padding: 0;
                width:500px;
            }
             iframe{
                width: 90%;
                height:100px;
            }
          
         }
         @media (max-width:600px){
            input,textarea,.btn-submit{
                width:290px;
            }
           
         }

        </style>
</head>
<body>
<div class="main">
       <div class="form1">
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p>We'd love to hear from you! Whether you have a question about our books, need assistance with an order, or just want to share your thoughts, feel free to reach out to us. Our team is here to help and ensure you have the best experience with Book Vibe.</p>
        </div>
        <form action="">
            <input type="text" placeholder="Name"><br>

            <input type="email" placeholder="Email"><br>
            <input type="text" placeholder="Subject"><br>
            <textarea type="text" class="Message" placeholder="Message"></textarea><br>
            <button type="submit" class="btn-submit" onclick="return confirm('Submit Your Message Successfully!');"    >Submit</button>
        </form>
       </div>
       <div class="form2">
        <div class="address">
            <h2>Contact Us</h2>
            <p>Address: Aditya Institute of Technology and Management, Tekkali, Srikakulam, Andhra Pradesh, India</p>
            <p>Phone: +91 1234567890</p>
            <p>Email: info@aditya.edu.in</p>
        </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15128.876649781942!2d84.19624599999999!3d18.56415555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3c522ff727489b%3A0x7b3a160927cac1e!2sAditya%20Institute%20of%20Technology%20and%20Management!5e0!3m2!1sen!2sin!4v1773145356398!5m2!1sen!2sin" width="650" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     
       </div>

</div>
   
    <?php include "nav.php"; ?>

    <?php include "footer.php"; ?>
    
</body>
</html>