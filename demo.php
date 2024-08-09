
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3D Carousel Example</title>
    <!-- Link Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- Link your custom CSS if needed -->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #00a1ff;
            margin: 0;
            overflow: hidden; /* Prevent scroll bars */
        }

        .carousel-container {
            position: relative;
            width: 80%;
            height: 60vh;
            perspective: 1200px; /* Added perspective for 3D effect */
        }

        .carousel {
            width: 100%;
            height: 100%;
            position: absolute;
            transform-style: preserve-3d; /* Enable 3D transformation for children */
            transition: transform 1s;
        }

        .card {
            width: 200px;
            height: 300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 50%;
            left: 50%;
            transform-style: preserve-3d;
            transition: transform 1s, opacity 1s;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5em;
            transform-origin: center;
            opacity: 0;
            visibility: hidden;
            cursor: pointer;
        }

        .card.active {
            transform: translateX(-50%) translateY(-50%) translateZ(200px);
            opacity: 1;
            visibility: visible;
            z-index: 10;
        }

        .card.left {
            transform: translateX(calc(-50% - 220px)) translateY(-50%) rotateY(15deg) translateZ(150px);
            opacity: 0.7;
            visibility: visible;
            z-index: 5;
        }

        .card.right {
            transform: translateX(calc(-50% + 220px)) translateY(-50%) rotateY(-15deg) translateZ(150px);
            opacity: 0.7;
            visibility: visible;
            z-index: 5;
        }

        .card.left-hidden, .card.right-hidden {
            transform: translateX(calc(-50% - 440px)) translateY(-50%) translateZ(0);
            opacity: 0.5;
            visibility: visible;
            z-index: 1;
        }

        .card.right-hidden {
            transform: translateX(calc(-50% + 440px)) translateY(-50%) translateZ(0);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .carousel-container {
                width: 90%;
                height: 50vh;
            }

            .card {
                width: 150px;
                height: 225px;
            }

            .card.active {
                transform: translateX(-50%) translateY(-50%) translateZ(150px);
            }

            .card.left {
                transform: translateX(calc(-50% - 170px)) translateY(-50%) rotateY(15deg) translateZ(100px);
            }

            .card.right {
                transform: translateX(calc(-50% + 170px)) translateY(-50%) rotateY(-15deg) translateZ(100px);
            }

            .card.left-hidden, .card.right-hidden {
                transform: translateX(calc(-50% - 340px)) translateY(-50%) translateZ(0);
            }

            .card.right-hidden {
                transform: translateX(calc(-50% + 340px)) translateY(-50%) translateZ(0);
            }
        }
    </style>
</head>
<body>
    <div class="carousel-container">
        <div class="carousel">
            <div class="card" style="background-color: red;">Box 1</div>
            <div class="card">Box 2</div>
            <div class="card">Box 3</div>
            <div class="card">Box 4</div>
            <div class="card">Box 5</div>
            <div class="card">Box 6</div>
            <div class="card">Box 7</div>
            <div class="card">Box 8</div>
            <div class="card">Box 9</div>
            <div class="card">Box 10</div>
        </div>
    </div>

    <!-- Link jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Link Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function(){
            let currentIndex = 2; // Index of the active card

            const cards = document.querySelectorAll('.card');
            const totalCards = cards.length;

            function updateCards() {
                cards.forEach((card, index) => {
                    card.classList.remove('active', 'left', 'right', 'left-hidden', 'right-hidden');
                    if (index === currentIndex) {
                        card.classList.add('active');
                    } else if ((index - currentIndex + totalCards) % totalCards === 1) {
                        card.classList.add('left');
                    } else if ((currentIndex - index + totalCards) % totalCards === 1) {
                        card.classList.add('right');
                    } else if ((index - currentIndex + totalCards) % totalCards === 2) {
                        card.classList.add('left-hidden');
                    } else if ((currentIndex - index + totalCards) % totalCards === 2) {
                        card.classList.add('right-hidden');
                    }
                });
            }

            updateCards();

            setInterval(() => {
                currentIndex = (currentIndex + 1) % totalCards;
                updateCards();
            }, 5000);

            // Add click event to cards
            cards.forEach((card, index) => {
                card.addEventListener('click', () => {
                    currentIndex = index;
                    updateCards();
                });
            });
        });
    </script>
</body>
</html>
apps-fileview.texmex_20240613.00_p2
index.html
Displaying index.html.