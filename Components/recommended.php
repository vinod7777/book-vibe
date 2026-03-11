
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .cardout {
            background-color: #0D3B66;
            padding: 80px 5%;
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 50px;
            align-items: center;
        }
        .cardin1 {
            color: white;
            text-align: left;
        }
        .cardin1 button {
            margin-top: 30px;
            padding: 15px 40px;
            background-color: #F26A21;
            color: white;
            font-size: 18px;
            border-radius: 30px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
            border:none;
        }
        .cardin1 button:hover {
            background-color: white;
            color: #F26A21;
            
        }
        .cardouth1 {
            font-size: 48px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 30px;
            font-family:  sans-serif;
        }
        .explore-btn {
            padding: 15px 40px;
            background-color: #F26A21;
            color: white;
            font-size: 18px;
            border-radius: 30px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .explore-btn:hover {
            background-color: white;
            color: #0D3B66;
        }
        .cardimgs {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }
        .cardin21 {
            background-color: white;
            padding: 15px;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.3s ease;
        }
        .cardin21:hover {
            transform: translateY(-10px);
        }
        .cardin21img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .view-btn {
            width: 100%;
            padding: 10px;
            background-color: #0D3B66;
            color:white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
            
        }
        .view-btn:hover {
            background-color: #F26A21;
        }
        .view-btn a {
            color: white;
            text-decoration: none;
            list-style: none;
        }
        
        /* Tablet View (768px and below) */
        @media (max-width: 768px) {
            .cardout {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 50px 3%;
            }
            
            .cardouth1 {
                font-size: 36px;
            }
            
            .cardimgs {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
            
            .cardin21 {
                padding: 12px;
            }
            
            .cardin21img {
                height: 180px;
            }
            
            .cardin1 button {
                padding: 12px 30px;
                font-size: 16px;
            }
        }
        
        /* Mobile View (480px and below) */
        @media (max-width: 480px) {
            .cardout {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 30px 3%;
            }
            
            .cardin1 {
                text-align: center;
            }
            
            .cardouth1 {
                font-size: 24px;
                margin-bottom: 20px;
                line-height: 1.3;
            }
            
            .cardin1 button {
                margin-top: 20px;
                padding: 12px 25px;
                font-size: 14px;
                border-radius: 25px;
            }
            
            .cardimgs {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .cardin21 {
                padding: 10px;
            }
            
            .cardin21img {
                height: 250px;
                margin-bottom: 10px;
            }
            
            .view-btn {
                padding: 12px;
                font-size: 14px;
            }
        }

    </style>
</head>
<body>
    <section>
        <div class="cardout">
            <div class="cardin1">
                <h1 class="cardouth1">TOP RATED BOOKS IN OUR STORE</h1>
                <a href="story.php"><button>Explore</button></a>
            </div>
            <div class="cardimgs cardin2">
                <div class="cardin21">
                    <img src="../assets/recommendedimgs/storybook-1.webp" alt="Recommended Book 1" class="cardin21img">

                    <button class="view-btn" onclick="window.location.href='greatgatsby.php'">View Details</button>
                </div>
                <div class="cardin21">
                    <img src="../assets/recommendedimgs/storybook-2.webp" alt="Recommended Book 2" class="cardin21img">
                    <button class="view-btn" onclick="window.location.href='greatgatsby.php'">View Details</button>   
                </div>
                <div class="cardin21">
                    <img src="../assets/recommendedimgs/storybook-3.webp" alt="Recommended Book 3" class="cardin21img">
                    <button class="view-btn" onclick="window.location.href='greatgatsby.php'">View Details</button>
                </div>
                <div class="cardin21">
                    <img src="../assets/recommendedimgs/storybook-4.webp" alt="Recommended Book 4" class="cardin21img">
                    <button class="view-btn" onclick="window.location.href='greatgatsby.php'">View Details</button>
                </div>
            </div>
        </div>
    </section>
