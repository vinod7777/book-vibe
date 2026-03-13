<style>
/* Modern Marquee CSS */
        .marquee {
            width: 100%;
            overflow: hidden;
            position: relative;
            background: white;
            padding: 20px 0;
        }

        .marquee__inner {
            display: flex;
            width: max-content;
            animation: marquee 40s linear infinite;
        }

        .marquee__inner img {
            height: 200px;
            width: auto;
            margin: 0 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .marquee:hover .marquee__inner {
            animation-play-state: paused;
        }
    </style>

<section class="recomend-info">
        <h2>You Might Also Like</h2>
        <div class="marquee">
            <div class="marquee__inner">
                <img src="../assets/recommendedimgs/storybook-1.webp" alt="Book">
                <img src="../assets/recommendedimgs/storybook-2.webp" alt="Book">
                <img src="../assets/recommendedimgs/storybook-3.webp" alt="Book">
                <img src="../assets/recommendedimgs/storybook-4.webp" alt="Book">
                <img src="../assets/recommendedimgs/storybook-5.webp" alt="Book">
                <img src="../assets/recommendedimgs/storybook-1.webp" alt="Book">
                <img src="../assets/recommendedimgs/storybook-2.webp" alt="Book">
                <img src="../assets/recommendedimgs/storybook-3.webp" alt="Book">
                <img src="../assets/recommendedimgs/storybook-4.webp" alt="Book">
                <img src="../assets/recommendedimgs/storybook-5.webp" alt="Book">
            </div>
        </div>
    </section>
