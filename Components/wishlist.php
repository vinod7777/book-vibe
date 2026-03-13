<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Large Book List</title>
<script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        background: #f4f4f4;
        padding-top: 100px;
        font-family:  sans-serif;
    }
    .wishlist-header {
        text-align: center;
        margin-bottom: 40px;
    }
    .wishlist-header h1 {
        color: #0D3B66;
        font-size: 36px;
        text-transform: uppercase;
    }
    .products {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        padding: 0 5%;
        max-width: 1400px;
        margin: 0 auto;
        margin-bottom:20px;
    }
    .card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
        display: flex;
        flex-direction: column;
        flex-flow: wrap;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    .book {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }
    .content {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    .content h3 {
        font-size: 20px;
        color: #0D3B66;
        margin-bottom: 10px;
    }
    .price {
        font-size: 18px;
        font-weight: bold;
        color: #F26A21;
    }
    .type {
        font-size: 14px;
        color: #777;
    }
    .desc {
        font-size: 14px;
        color: #666;
        margin: 10px 0 20px;
        line-height: 1.5;
    }
    .card button {
        margin-top: auto;
        width: 100%;
        padding: 12px;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
        transition: background 0.3s ease;
        background: #F26A21;
    }
    .card button:hover {
        background: #0D3B66;
    }
    .no-results{
        width: 100%;
        padding: 40px;
        text-align: center;
        color: #666;
        font-size: 18px;
        margin-left:425px;
        
    }
    .s40-btn1{
         background: #F26A21;
        height: 40px;
        width: 50px;
        color: white;
        border: none;
        border-radius: 8px;
        cursor:pointer;
    }
    .wish{
         display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 10px;
     
    }
</style>
</head>

<body>
<?php include "nav.php"; ?>
<div class="wishlist-header">
    <h1>My Wishlist</h1>
</div>
<div class="products" id="products"></div>

<script>
const books = [
        {
    image:"https://images.squarespace-cdn.com/content/v1/5493706de4b0ecaa4047b871/1771290659903-Z93JLQNJ9FLXM7D2TC58/GuardianCoverFullOpt+Homepage.jpeg?format=750w",
    type:"Fiction",
    price:"₹499",
    title:"Story Book",
    desc:"Interesting fictional story."
},
{
    image:"https://images.squarespace-cdn.com/content/v1/5493706de4b0ecaa4047b871/1771290724312-6U491MRO5INP2KQGJST6/Gemma+Cover+Thumbnail+with+Title+Opt.jpeg?format=750w",
    type:"Non-Fiction",
    price:"₹399",
    title:"Learning Book",
    desc:"Educational and informative."
},
{
    image:"https://images.squarespace-cdn.com/content/v1/5493706de4b0ecaa4047b871/1771290827921-T0C5ICGNFQAUJYWQ0Y9U/Idontwantahaircutcover+thumbnail.jpg?format=1500w",
    type:"Academic",
    price:"₹699",
    title:"Academic Textbook",
    desc:"Useful for exams and preparation."
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
];

let cards = document.getElementById("products");

for (let i = 0; i < books.length; i++) {
    cards.innerHTML = cards.innerHTML + `
        <div class="card">
            <img class="book" src="${books[i].image}">
            <div class="content">
                <h3>${books[i].title}</h3>
                <div style="display:flex; justify-content:space-between;">
                    <p class="price">Price: ${books[i].price}</p>
                    <p class="type">Type: ${books[i].type}</p>
                </div>
                <p class="desc">${books[i].desc}</p>
                <div class="wish">
                <button onclick="window.location.href='greatgatsby.php?id=${i}'">Buy now</button>
                
                <button class="s40-btn1">Add to Cart</button>
                <div onclick="toggleHeart(this)"></div>
                </div>
            </div>
        </div>
    `;
}

if (books.length === 0) {
    cards.innerHTML = `<div class="no-results"><p>Your wishlist is empty.</p></div>`;
}
</script>
<?php include "footer.php"; ?>

</body>
</html>