<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    footer {
        background-color: #0a1620;
        color: #fff;
        padding: 60px 5% 20px;
        font-family: 'Segoe UI', sans-serif;
    }

    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }

    .contact h2, .webteam h3, .quick-links h3 {
        color: #F26A21;
        font-size: 24px;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .contact-con {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        align-items: center;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 14px;
    }

    .contact-item i {
        color: #F26A21;
        font-size: 18px;
    }

    .logo img {
        width: 80px;
        height: auto;
    }

    .bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 20px;
        text-align: center;
        font-size: 14px;
        color: #aaa;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .bottom i {
        color: #F26A21;
        margin-right: 5px;
    }

    .quick-links ul {
        list-style: none;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .quick-links li {
        margin-bottom: 0;
    }
    .quick-links a {
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .quick-links a:hover {
        color: #F26A21;
        padding-left: 5px;
    }
</style>

<footer id="footid">
    <div class="footer-content">
        <div class="contact">
            <h2>Contact Us</h2>
            <div class="contact-con">
                <div class="logo">
                    <img src="../assets/logo.png" alt="BookVibe Logo">
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="contact-item">
                    <i class="fa-brands fa-x-twitter"></i>
                </div>
                <div class="contact-item">
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>

        <div class="quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="../Components/index.php">Home</a></li>
                <li><a href="../Components/about.php">About</a></li>
                <li><a href="../Components/story.php">Story</a></li>
                <li><a href="../Components/academic.php">Academic</a></li>
                <li><a href="../Components/contact.php">Contact</a></li>
            </ul>
        </div>

    </div>

    <div class="bottom">
        <p>Designed & Developed By: Vinod Kumar, Yagneswararao P., Purnachandrarao P., Lokesh Konna, Laxminarayana M., Ajaykumar K.</p>
        <p>
            <i class="fa-regular fa-copyright"></i> 2026 BookVibe. All rights reserved.
        </p>
    </div>
</footer>
