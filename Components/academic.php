<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story</title>
     <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:sans-serif;
            padding-top: 80px;
        }
         
            .story{
                margin-bottom: 50px;
                text-align: center;
                margin-top: 10px;
               
            }
            .story h2{
                font-size: 50px;
                color: #0D3B66;
                text-transform: uppercase;
                margin-bottom: 20px;
            }
            .cards{
                margin: auto;
                margin-left: 45px;
                display: grid;
                gap: 10px;
                grid-template-columns: repeat(4, 1fr);
            }
            .cards .card{
                width: 320px;
                height: 450px;
                background-color: #e1e1e1;
                border-radius: 10px;
                transition: all 0.3s ease;
            }
             .cards .card:hover{
                transform: scale(1.02);  
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
             }
             .book{
                margin: 30px 30px 10px 30px;

             }

             .content{
                padding: 0px 20px;
                text-align: left;
             }
             .content h3{
                text-align: center;
                font-size: 20px;
                color: #0D3B66;
                margin-bottom: 10px;
                text-transform: uppercase;
             }
                .content p{
                    font-size: 16px;
                    text-transform: uppercase;
                    margin:0px 20px ;
                    margin-bottom: 10px;
                }
                .content button{
                    border: none;
                    border-radius: 10px;
                    padding: 10px 40px ;
                    background-color: #F26A21;
                    color: white;
                    margin: 0px 60px;
                    transition: all 0.3s ease;
                    
                }
                .content button:hover{
                    background-color: #0D3B66;
                    cursor: pointer;
                }
              
                .nav-link li a{
                    text-decoration: none;
                    color: #0D3B66;
                }
                .nav-link li a:hover{
                    color: #F26A21;
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
        const books = [
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

books.forEach(book=>{
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
                
        `

}
)

    </script>
</body>
</html>