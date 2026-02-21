<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            padding-top: 80px;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
        }
        .abtimg {
            width: 100%;
            height: 500px;
            background-image: url("../assets/heroimage/slide.png");
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 10%;
            color: white;
            position: relative;
        }
        .abtimg::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.5);
        }
        .text1 {
            font-size: 60px;
            font-weight: bold;
            position: relative;
            z-index: 1;
            margin-bottom: 20px;
        }
        .text2 {
            font-size: 18px;
            line-height: 1.6;
            max-width: 600px;
            position: relative;
            z-index: 1;
        }
        .cards-section {
            display: flex;
            gap: 40px;
            justify-content: center;
            padding: 60px 5%;
            margin-top: -50px;
            position: relative;
            z-index: 2;
        }
        .card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            flex: 1;
            max-width: 400px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .iconabt {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            margin-bottom: 20px;
        }
        .card-purple .iconabt { background: #8b5cf6; }
        .card-blue .iconabt { background: #3b82f6; }
        
        .card h2 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #0D3B66;
        }
        .card p {
            color: #666;
            line-height: 1.6;
        }
        .abtdiv1 {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 5%;
            gap: 50px;
            background: white;
        }
        .abtdiv2 {
            flex: 1;
            max-width: 500px;
        }
        .text3 {
            font-size: 36px;
            color: #0D3B66;
            font-weight: bold;
            line-height: 1.2;
        }
        .abtdiv2 img {
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="abtimg">
        <p class="text1">| About <br>book vibe</p>
        <p class="text2">Welcome to BookVibe, your premier destination for exceptiona<br>l stories and comprehensive academic content. We are an innovative e-commerce<br> platform dedicated to bringing the best of<br> literature and education directly to your fingertips.</p>
    </div> 

<section class="cards-section">

    
    <div class="card card-purple">
        <div class="iconabt">
            <i class="fa-solid fa-book-open"></i>
        </div>

        <h2>Stories</h2>

        <p>
            Immerse yourself in captivating narratives from talented authors.
            From thrilling adventures to heartwarming tales, our curated collection
            brings stories to life.
        </p>
    </div>


   
    <div class="card card-blue">
        <div class="iconabt">
           <i class="fa-solid fa-graduation-cap"></i>
        </div>

        <h2>Academic Content</h2>

        <p>
            Enhance your knowledge with our extensive academic resources.
            From textbooks to research papers, we provide quality educational
            materials for learners at all levels.
        </p>
    </div>

</section>
<hr>
<div class="abtdiv1">
    <div class="abtdiv2">
    <p class="text3"> best online <br>books & story seller<br> website across the world! </p>
    </div>
    <div class="abtdiv2">
        <img src="../assets/heroimage/work.png.jpeg" width="500px"height="200px">
    </div>
</div>

<?php include "footer.php"; ?>
</body>
</html>
    
    
</body>
</html>