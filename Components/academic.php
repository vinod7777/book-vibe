<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story</title>
     <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            padding-top: 80px;
            background-color: #f4f4f4;
            font-family: 'Segoe UI', sans-serif;
        }
        .story {
            padding: 40px 5%;
            text-align: center;
        }
        .story h2 {
            font-size: 40px;
            color: #0D3B66;
            text-transform: uppercase;
            margin-bottom: 40px;
            letter-spacing: 2px;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            justify-content: center;
        }
        .card {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .book {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }
        .content {
            padding: 20px;
            text-align: left;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .content h3 {
            font-size: 20px;
            color: #0D3B66;
            margin-bottom: 10px;
        }
        .content p {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }
        .content button {
            margin-top: auto;
            width: 100%;
            padding: 12px;
            background-color: #F26A21;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .content button:hover {
            background-color: #0D3B66;
        }
    </style>
</head>
<body>
  <?php include "nav.php"; ?>


    <section class="story">
        <h2>Academic books</h2>
        <div class="cards" id="cards">
             <!-- <div class="card">
               
                    <img class="book" src="../assets/recommendedimgs/storybook-1.webp" alt="" height="250" width="200">
                    <div class="content">
                        <h3>book name</h3>
                        <div style="display: flex;justify-content: space-between;align-items: center;  ">
                            <p>price:<span>₹499</span></p>
                        <p>type:<span>fiction</span>
                        </div>
                        <p>out of stock</p>
                        <button>view details</button>

                    </div>
                
             </div> -->
             
        </div>
        
    </section>
<?php include "footer.php"; ?>
    <script>
        const academicBooks = [
        {
            name: "Artificial Intelligence",
            price:899,
            type: "Programming",
            image: "../assets/academicimages/ai.jpg",
            stock: true
        },
        {
            name: "C++ Programming",
            price: 1059,
            type: "Programming",
            image: "../assets/academicimages/c++.jpg",
            stock: true
        },
        {
            name: "Data Structures",
            price: 1109,
            type: "Programming",
            image: "../assets/academicimages/dsa.jpg",
            stock: false
        },
        {
            name: "Java Programming",
            price: 999,
            type: "Programming",
            image: "../assets/academicimages/java.jpg",
            stock: true
        }
]
let cards = document.getElementById("cards")

academicBooks.forEach(book=>{
        cards.innerHTML += `
        <div class="card">
               
                    <img class="book" src="${book.image}" alt="" height="250" width="200">
                    <div class="content">
                        <h3>${book.name}</h3>
                        <div style="display: flex;justify-content: space-between;align-items: center;  ">
                            <p>price:<span>₹${book.price}</span></p>
                        <p>type:<span>${book.type}</span>
                        </div>
                        <p>${book.stock ? "In Stock" : "Out of Stock"}</p>
                        <button>view details</button>

                    </div>
        </div>
                
        `

}
)

    </script>
</body>
</html>