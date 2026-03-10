
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
            font-family: 'Segoe UI', sans-serif;
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
  </style>

    <nav>
        <div class="logo">
            <img src="../assets/logo.png" alt="BookVibe Logo">
        </div>

        <div class="search">
            <input type="search" placeholder="Search books..." class="ser" id="navSearch" onkeypress="navigateToSearch(event)">
        </div>

        <div class="home">
            <ul>
                <li><a href="../Components/index.php">Home</a></li>
                <li><a href="../Components/about.php">About</a></li>
                <li><a href="../Components/story.php">Story</a></li>
                <li><a href="../Components/academic.php">Academic</a></li>
                <li><a href="../Components/contact.php">Contact</a></li>
            </ul>
        </div>

        <div class="nav-actions">
            <a href="login.php"><button class="login" >Login</button></a>
            <a href="cart.php" class="icon-link"><i class="fa-solid fa-cart-arrow-down"></i></a>
            <a href="wishlist.php" class="icon-link"><i class="fa-solid fa-clipboard-list"></i></a>
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
    </script>
