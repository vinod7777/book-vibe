<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Books</title>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            overflow-x: hidden;
            padding-top: 80px;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
        }
        .search-container{
            width: 100%;
            background-color: #0D3B66;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            gap: 10px;
        }
        .ser{
            width: 100%;
            max-width: 500px;
            height: 50px;
            border-radius: 25px;
            padding: 0 25px;
            font-size: 16px;
            border: none;
            outline: none;
        }
        .search-btn {
            height: 50px;
            padding: 0 30px;
            background-color: #F26A21;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            transition: background 0.3s ease;
        }
        .search-btn:hover {
            background-color: #fff;
            color: #F26A21;
        }
        #results {
            padding: 40px 5%;
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .book {
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .book:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        .book img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 5px;
        }
        .book h3 {
            margin: 10px 0 5px;
            color: #0D3B66;
        }
        .book p {
            margin: 5px 0;
            color: #666;
        }
        .no-results {
            text-align: center;
            padding: 40px;
            color: #666;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="search-container">
        <input type="search" class="ser" id="searchInput" placeholder="Search books...">
        <button class="search-btn" onclick="performSearch()">Search</button>
    </div>
    <div id="results"></div>
    
    <script src="books.js"></script>
    <script>
        let resultsDiv = document.getElementById("results");
        let searchInput = document.getElementById("searchInput");

        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        function performSearch(searchQuery = null) {
            const query = (searchQuery || searchInput.value).toLowerCase();
            if (!query.trim()) {
                resultsDiv.innerHTML = '<div class="no-results">Please enter a book name to search.</div>';
                return;
            }
            const filteredBooks = books.filter(book => book.name.toLowerCase().includes(query));
            displayResults(filteredBooks, query);
        }

        function displayResults(filteredBooks, query) {
            resultsDiv.innerHTML = "";
            if (filteredBooks.length === 0) {
                resultsDiv.innerHTML = `<div class="no-results">No books found for "${query}".</div>`;
                return;
            }
            filteredBooks.forEach(book => {
                const bookDiv = document.createElement("div");
                bookDiv.classList.add("book");
                bookDiv.innerHTML = `
                    <img src="${book.image}" alt="${book.name}">
                    <h3>${book.name}</h3>
                    <p>Price: ₹${book.price}</p>
                    <p>Type: ${book.type}</p>
                    <p>${book.stock ? "In Stock" : "Out of Stock"}</p>
                `;
                resultsDiv.appendChild(bookDiv);
            });
        }

        searchInput.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                performSearch();
            }
        });

        window.addEventListener("load", function() {
            const initialQuery = getQueryParam("q");
            if (initialQuery) {
                searchInput.value = initialQuery;
                performSearch(initialQuery);
            }
        });
    </script>
    <?php include "footer.php"; ?>
</body>
</html>