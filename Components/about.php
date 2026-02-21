<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
             box-sizing:border-box;
             font-family: "Segoe UI", sans-serif;
             
        }
       
        .abtimg{
            width:100%;
            height: 630px;
            background-image: url("../assets/heroimage/slide.png");
            justify-content: space-evenly;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            top:0;
            left:0;
            z-index:10; 
        }

        .cards-section{
        margin:60px auto;
        display:flex;
        gap:60px;
        justify-content:center;
        padding:20px;
           
        }


    .card{
        width: 300px;
        flex:1;
        padding:35px;
        border-radius:20px;
        transition:0.3s ease;
        box-shadow:0 10px 25px rgba(0,0,0,0.05);
}


.card:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 40px rgba(0,0,0,0.1);
}


.iconabt{
    width:55px;
    height:55px;
    border-radius:14px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:26px;
    color:white;
    margin-bottom:18px;
}


.card h2{
    font-size:28px;
    margin-bottom:15px;
    color:#0f172a;
}


.card p{
    font-size:17px;
    line-height:1.6;
    color:#334155;
}

.card-purple{
    background:#dcd3e8;
    border:1px solid #c7b9dd;
}

.card-purple .iconabt{
    background:#2563eb;
}

.card-blue{
    background:#d8e3f2;
    border:1px solid #b6c9e6;
}

.card-blue .iconabt{
    background:#2563eb;
}


@media(max-width:768px){
    .cards-section{
        flex-direction:column;
    }
}
        .text1{
            font-size: 80px;
            padding: 80px 100px;
        }
        
        .text2{
            font-size: 20px;
            margin-left: 30px;
            margin-bottom: 30px;
             
        }
        .text3{
             font-size: 48px;
             font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .abtdiv1{
            width: 100%;
            height: 250px;
            display: flex;
            justify-content: center;
            gap:30px;

        }
        .abtdiv2{
            width: 500px;
            height: 300px;
            border:2px;
            border-radius: 3px;
            
            text-align: center;
            padding: 40px;
            
            
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