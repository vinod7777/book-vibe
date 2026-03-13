
  <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        nav {
            height: 80px;
            width: 100%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-family:  sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            color: #0D3B66;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 0 5%;
        }

        .logo img {
            height: 60px;
            width: auto;
        }

        .search {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .ser {
            height: 45px;
            width: 100%;
            max-width: 400px;
            border-radius: 25px;
            padding: 0 20px;
            font-size: 15px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }
        .ser:focus {
            outline: none;
            border-color: #F26A21;
            background-color: #fff;
            box-shadow: 0 0 8px rgba(242, 106, 33, 0.1);
        }

        ul {
            display: flex;
            gap: 30px;
            margin: 0;
            padding: 0;
            list-style: none;
            font-size: 16px;
            font-weight: 600;
        }
        .home{
            display:flex;
            flex-direction:row;
            align-items: center;
            justify-content: space-between;
        }

        .home a {
            text-decoration: none;
            color: #0D3B66;
            transition: color 0.3s ease; 
            
        }

        .home a:hover {
            color: #F26A21;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }
       

        .login {
            padding: 10px 25px;
            background-color: #F26A21;
            border: none;
            border-radius: 10px;
            margin-left:50px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login:hover {
            background-color: #0D3B66;
        }

        .icon-link {
            font-size: 20px;
            color: #F26A21;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .icon-link:hover {
            color: #0D3B66;
        }
        .mobil-menu i{
            display: none;
            font-size: 24px;
            color: #F26A21;
            cursor: pointer;
           
            
        }
      
        @media screen and (min-width:1300px) {
             .mobile-menu i {
                    display: none;
                    font-size: 24px;
                    color: #F26A21;
                    cursor: pointer;
                }
     }
     @media screen  and (max-width: 1300px) {
        .home {
            display: none;
        }
        .mobile-menu i {
            display: block;
           font-size:20px;
            color:#F26A21;
            border : none;
             background-color: white;

<<<<<<< HEAD
        @media (max-width: 768px) {
            html, body, .ser, ul, .login, .icon-link,
            h1, h2, h3, h4, p, span, button {
                font-size: 90% !important;
            }
            nav {
                padding: 0 3% !important;
            }
            .ser {
                font-size: 14px !important;
            }
            .login {
                padding: 8px 20px !important;
            }
        }
        @media (max-width: 480px) {
            html, body, .ser, ul, .login, .icon-link,
            h1, h2, h3, h4, p, span, button {
                font-size: 80% !important;
            }
            nav {
                padding: 0 2% !important;
            }
            .ser {
                font-size: 12px !important;
            }
            .login {
                padding: 6px 15px !important;
            }
=======
           
        }
        .mobile-menu{
            margin-left:10px;
           border : none;
            width: 30px;
            height:20px;
            display:flex;
            justify-content:center;
            align-items:center;
         

>>>>>>> d5348bb9a0e7925769ed4a011c71156db40cf37d
        }
      
        
     }
      
   
  </style>

    <nav>
        <div class="logo">
            <img src="../assets/logo.png" alt="BookVibe Logo">
        </div>

        <div class="search">
            <input type="search" placeholder="Search books..." class="ser" id="navSearch" onkeypress="navigateToSearch(event)">
        </div>
      

        <div class="home">
            <ul Id="ul_li">
                <li><a href="../Components/index.php">Home</a></li>
                <li><a href="../Components/about.php">About</a></li>
                <li><a href="../Components/story.php">Story</a></li>
                <li><a href="../Components/academic.php">Academic</a></li>
                <li><a href="../Components/contact.php">Contact</a></li>
            </ul>
        

        <div class="nav-actions" id="icons">
            <a href="login.php"><button class="login" id="log">Login</button></a>
            <a href="cart.php" class="icon-link"><i class="fa-solid fa-cart-arrow-down"></i></a>
            <a href="wishlist.php" class="icon-link"><i class="fa-solid fa-clipboard-list"></i></a>
      
        </div>
        </div>
        <div class="mobile-menu">
          <button id="mobileMenuBtn" onclick="toggleMobileMenu()"><i class="fa-solid fa-bars"></i></button>
        </div>
    </nav>
    <script>
        function navigateToSearch(event) {
            if (event.key === "Enter") {
                const query = document.getElementById("navSearch").value.trim();
                if (query) {
                    window.location.href = "searchbook.php?q=" + encodeURIComponent(query);
                }
            }
        }
        function toggleMobileMenu() {
            const homeMenu = document.querySelector(".home");
            const a= document.getElementById("ul_li");
            const i= document.getElementById("icons");
            const l= document.getElementById("log");
           
            if (homeMenu.style.display === "flex"  ) {
                homeMenu.style.display = "none";
          

            } else {
                homeMenu.style.display = "block";
                homeMenu.style.display = "flex";
                a.style.display = "flex";
                a.style.flexDirection = "column";
                a.style.justifyContent = "space-around";
                i.style.marginTop="10px";
                i.style.display = "flex";
                i.style.flexDirection = "column";
                l.style.marginRight="50px";
                i.style.justifyContent = "center";
                
                homeMenu.style.flexDirection = "column";
                homeMenu.style.position = "absolute";
                homeMenu.style.top = "80px";
                homeMenu.style.right = "0";
                homeMenu.style.backgroundColor = "#fff";
                homeMenu.style.width = "200px";
                homeMenu.style.height = "auto";
                homeMenu.style.boxShadow = "0 4px 12px rgba(0, 0, 0, 0.1)";
                homeMenu.style.padding = "20px";
                homeMenu.style.justifyContent = "space-around";

                


            }
        }
    </script>
