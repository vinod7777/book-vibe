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
            font-family:  sans-serif;
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
        .sec40-btn1 {
    
        background: #F26A21;
        height: 40px;
        width: 50px;
        color: white;
        border: none;
        border-radius: 8px;
        cursor:pointer;
       
    }
    
  
    .sec39 {
        height: 80px;
        width: 100%;

        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 10px;
     
       
    }
    .sec39 i {
        font-size: 20px;
        color: #F26A21;
        cursor: pointer;
        transition: color 0.3s ease;
        margin-top:40px;
   
    }
    </style>
</head>
<body>
   <?php include "nav.php"; ?>

    <section class="story">
        <h2>Story books</h2>
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
                        

                    </div>
                
             </div> -->
             
        </div>
        
    </section>
    <?php include "footer.php"; ?>

    <script>
        const storyBooks = [
        {
            name: "The Great Gatsby",
            price: 499,
            type: "Fiction",
            image: "../assets/recommendedimgs/storybook-1.webp",
            stock: true
        },
        {
            name: "To Kill a Mockingbird",
            price: 399,
            type: "Fiction",
            image: "../assets/recommendedimgs/storybook-2.webp",
            stock: true
        },
        {
            name: "1984",
            price: 299,
            type: "Dystopian",
            image: "../assets/recommendedimgs/storybook-3.webp",
            stock: false
        },
        {
            name: "Pride and Prejudice",
            price: 349,
            type: "Romance",
            image: "../assets/recommendedimgs/storybook-4.webp",
            stock: true
        },
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

         ];
        let cards = document.getElementById("cards")

        storyBooks.forEach(book=>{
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
                        
                        <div class="sec39">
                            <button class="sec40-btn1"> Buy now   </button>
                            <button class="sec40-btn1">Add to Cart</button>
                            <div onclick="toggleHeart(this)"><i class="fa-regular fa-heart"></i></div>
                        </div>
                    </div>
                    
                
        </div>
        `
        }
    )
    function toggleHeart(element){
    const icon = element.querySelector("i");
    if(icon.classList.contains("fa-regular")){
        icon.classList.remove("fa-regular");
        icon.classList.add("fa-solid");
        
    } else {
        icon.classList.remove("fa-solid");
        icon.classList.add("fa-regular");
    }

    if(icon.classList.contains("fa-solid")){
        alert("Added to wishlist!");
        
    } else {
        alert("Removed from wishlist!");
    }
}

</script>
</body>
</html>