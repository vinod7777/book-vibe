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
        font-family: 'Segoe UI', sans-serif;
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
    }
    .card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
        display: flex;
        flex-direction: column;
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
        background: #0D3B66;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
        transition: background 0.3s ease;
    }
    .card button:hover {
        background: #F26A21;
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
    image:"https://images.squarespace-cdn.com/content/v1/5493706de4b0ecaa4047b871/1771290857334-2DZ36G7BNC4RTLG6Y6T1/Firefly+Cover+4+Opt.jpeg?format=1500w",
    type:"Fiction",
    price:"₹499",
    title:"Story Book",
    desc:"Interesting fictional story."
},
{
    image:"https://images.squarespace-cdn.com/content/v1/5493706de4b0ecaa4047b871/1771290877922-16RPMO3N15XSME9KKI5N/frontCover.jpg?format=1500w",
    type:"Non-Fiction",
    price:"₹399",
    title:"Learning Book",
    desc:"Educational and informative."
},
{
    image:"https://images.squarespace-cdn.com/content/v1/5493706de4b0ecaa4047b871/1771290980406-TKVJHNBIDVKQUS58IVIP/Cricket+Cover+Small+Opt.jpeg?format=750w",
    type:"Academic",
    price:"₹699",
    title:"Academic Textbook",
    desc:"Useful for exams and preparation."
},
{
    image:"https://m.media-amazon.com/images/I/61hqyA56z1L._AC_UF1000,1000_QL80_.jpg",
    type:"Fiction",
    price:"₹499",
    title:"Story Book",
    desc:"Interesting fictional story."
},
{
    image:"https://snworksceo.imgix.net/upb/b34ffa23-bb9f-4fb0-8c58-477a90add498.sized-1000x1000.jpg?w=1000",
    type:"Non-Fiction",
    price:"₹399",
    title:"Learning Book",
    desc:"Educational and informative."
},
{
    image:"https://s2982.pcdn.co/wp-content/uploads/2018/05/25-great-books-for-college-bound-students.png",
    type:"Academic",
    price:"₹699",
    title:"Academic Textbook",
    desc:"Useful for exams and preparation."
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
                <button>View Details</button>
            </div>
        </div>
    `;
}
</script>
<?php include "footer.php"; ?>

</body>
</html>