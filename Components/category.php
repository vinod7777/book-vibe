
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .secbody {
        padding: 60px 5%;
        background-color: #f9f9f9;
    }
    .Categoryh1 h1 {
        text-align: center;
        font-size: 36px;
        color: #0D3B66;
        margin-bottom: 40px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .tabs {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 50px;
        flex-wrap: wrap;
    }
    .tab-btn {
        padding: 12px 30px;
        border: 2px solid #0D3B66;
        background: transparent;
        color: #0D3B66;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .tab-btn.active, .tab-btn:hover {
        background: #0D3B66;
        color: #fff;
    }
    .tab-content { display: none; }
    .tab-content.active { display: block; }

    .sec32 {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
    }
    .sec33 {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }
    .sec33:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    .sec34 {
        padding: 0;
        margin: 0;
        box-shadow: none;
    }
    .img34 {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }
    .sec35 {
        padding: 15px 20px 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .sec35 button {
        background: #e0f2fe;
        color: #0D3B66;
        padding: 5px 12px;
        border-radius: 15px;
        font-size: 12px;
        font-weight: bold;
        border: none;
    }
    .sec36 {
        font-size: 18px;
        font-weight: bold;
        color: #F26A21;
    }
    .sec37 {
        padding: 0 20px;
        font-size: 20px;
        font-weight: 700;
        color: #333;
        margin-bottom: 5px;
    }
    .sec38 {
        padding: 0 20px;
        color: #666;
        font-size: 14px;
        margin-bottom: 20px;
        flex-grow: 1;
    }
    .sec40-btn {
        width: calc(100% - 40px);
        margin: 0 20px 20px;
        padding: 12px;
        background: #F26A21;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s ease;
    }
    .sec40-btn:hover {
        background: #0D3B66;
    }
</style>

<section class="secbody">
    <div class="Categoryh1"><h1>Category</h1></div>

    <div class="tabs">
        <button class="tab-btn active" data-tab="all">ALL</button>
        <button class="tab-btn" data-tab="fiction">Fiction</button>
        <button class="tab-btn" data-tab="nonfiction">Non-Fiction</button>
        <button class="tab-btn" data-tab="academic">Academic</button>
    </div>
    <div id="all" class="tab-content active">
        <div class="sec32" id="all-container"></div>
    </div>

    <div id="fiction" class="tab-content">
        <div class="sec32" id="fiction-container"></div>
    </div>

    <div id="nonfiction" class="tab-content">
        <div class="sec32" id="nonfiction-container"></div>
    </div>

    <div id="academic" class="tab-content">
        <div class="sec32" id="academic-container"></div>
    </div>
</section>
<script>

document.querySelectorAll(".tab-btn").forEach(btn=>{
    btn.addEventListener("click",()=>{
        document.querySelectorAll(".tab-btn").forEach(b=>b.classList.remove("active"));
        document.querySelectorAll(".tab-content").forEach(c=>c.classList.remove("active"));

        btn.classList.add("active");
        document.getElementById(btn.dataset.tab).classList.add("active");
    });
});

function createCard(data){
    return `
    <div class="sec33">
        <div class="sec34">
            <img src="${data.image}" class="img34">
            <div class="sec35">
                <button>${data.type}</button>
                <span class="sec36">${data.price}</span>
            </div>
            <div class="sec37">${data.title}</div>
            <p class="sec38">${data.desc}</p>
        </div>
        <div><button class="sec40-btn">Add To the Cart</button></div>
    </div>`;
}

const categoryBooks = [
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


function Cards(containerId, items){
    const container = document.getElementById(containerId);
    container.innerHTML = items.map(item => createCard(item)).join("");
}


Cards("all-container", categoryBooks);
Cards("fiction-container", categoryBooks.filter(b=>b.type==="Fiction"));
Cards("nonfiction-container", categoryBooks.filter(b=>b.type==="Non-Fiction"));
Cards("academic-container", categoryBooks.filter(b=>b.type==="Academic"));

</script>
