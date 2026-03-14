
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:sans-serif;
        }
        .hero {
            width: 100%;
            height: calc(100vh - 80px);
            margin-top: 80px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-left: 10%;
            position: relative;
            font-family:none;   
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }
        .purna {
            position: relative;
            z-index: 2;
            
            color: white;
            text-align: left;
         
        }
        .h2 {
            color: #F26A21;
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .h3 {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 30px;
            font-weight: 400;
        
             text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }
        .button {
            padding: 15px 40px;
            background-color: #F26A21;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .button:hover {
            background-color: #0D3B66;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        @media (max-width: 768px) {
            .h2 { font-size: 36px; }
            .h3 { font-size: 20px; margin-bottom: 20px; }
            .button { font-size: 18px; padding: 12px 30px; }
            .hero { padding-left: 5%; }
        }

        @media (max-width:480px) {
            .h2 {font-size: 18px;}
            .h3 { font-size: 16px; }
            .button { font-size: 18px; padding: 10px 25px; }
            .hero { padding-left: 30px; }
            .purna { max-width: 100%;  width: 100%; height:400px;justify-content: center; display: flex; flex-direction: column; }
            .hero { justify-content: left; } 
        } 
       
    </style>
</head>
<body>
    <section class="hero">
        <div class="purna">
            <h2 class="h2">Welcome to Book Vibe</h2>
            <h3 class="h3">Every page you turn opens a new universe.</h3>
            <h3 class="h3">Discover stories that inspire, ideas that transform,<br> and knowledge that empowers your journey.</h3>
            <h3 class="h3">Let your imagination rise beyond limits<br>and begin your next chapter today.</h3>
        <a href="register.php"><button class="button">Get Started</button></a>
        </div>
        
        
    </section>
    
    <script>

let array=[
                "../assets/heroimage/ammay.jpeg",
                "../assets/heroimage/work.png.jpeg",
                "../assets/heroimage/boy.png.jpeg",
                "../assets/heroimage/slide.png"
            ]
            let c=0
          let a=  document.getElementsByClassName("hero")
            function show(){
              
                a[0].style.backgroundImage=`url(${array[c]})`
                c++
                if(c>=array.length){
                    c=0
                }
            }
               show()
           setInterval(show,3000)
        </script>

    
