<?php
// Best Seller Product Data
$bestSellers = [
    ["name" => "Sikatan Special Coffee", "price" => 120.00, "badge" => "🔥 Top Pick", "img" => "https://unsplash.com"],
    ["name" => "Iced Matcha Latte", "price" => 95.00, "badge" => "⭐ Best Rated", "img" => "https://unsplash.com"],
    ["name" => "Sikada Club Sandwich", "price" => 180.00, "badge" => "💥 Hot Deal", "img" => "https://unsplash.com"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sikatan Sikada Cafe</title>
    <style>
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            padding: 60px 0 40px 0 !important; 
            overflow: hidden;
            background-image: none !important; 
        }

        /* CENTERED CAROUSEL */
        .carousel-outer-div {
            width: 100%;
            display: flex;
            justify-content: center; 
            z-index: 10;
        }
        .hero-carousel {
            width: 90%;
            max-width: 800px;
            position: relative;
        }
        .carousel-container {
            overflow: hidden;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .carousel-track { display: flex; transition: transform 0.8s cubic-bezier(0.23, 1, 0.32, 1); }
        .carousel-slide { min-width: 100%; display: flex; align-items: center; padding: 20px; gap: 20px; box-sizing: border-box; color: white; }
        .carousel-slide img { width: 300px; height: 200px; object-fit: cover; border-radius: 12px; }
        
        .nav-btn { position: absolute; top: 50%; transform: translateY(-50%); background: #ffcc00; border: none; width: 35px; height: 35px; border-radius: 50%; cursor: pointer; z-index: 20; font-weight: bold; }
        .prev { left: -15px; } .next { right: -15px; }

        /* --- EYE CATCHER WELCOME TEXT --- */
        .welcome-outer-div {
            width: 100%;
            display: flex;
            justify-content: flex-start; 
            padding-left: 5%;
            z-index: 5;
        }
        .hero-text {
            text-align: left !important;
            max-width: 1000px; 
            transform: scale(0.8); 
            transform-origin: left bottom;
            color: white;
            animation: slideIn 1s ease-out forwards;
        }

        .hero-text h3 { 
            color: #ffcc00; 
            text-transform: uppercase; 
            letter-spacing: 6px; 
            font-size: 1.1rem; 
            margin: 0;
            font-weight: 600;
            text-shadow: 0 0 10px rgba(255, 204, 0, 0.4);
        }

        .hero-text h1 { 
            font-size: 3rem !important; /* Larger for eye-catch effect */
            line-height: 1; 
            margin: 15px 0; 
            color: #fff; 
            white-space: nowrap; 
            font-weight: 900;
            text-shadow: 2px 4px 20px rgba(0,0,0,0.5);
        }

        .hero-text p { 
            color: #fff; 
            opacity: 0.9; 
            margin-bottom: 35px; 
            font-size: 1.3rem;
            max-width: 600px;
            line-height: 1.5;
        }

        /* --- MODERN BUTTONS --- */
        .buttons { display: flex; gap: 20px; }
        
        .btn { 
            background: #ffcc00; 
            border: none; 
            padding: 15px 35px; 
            border-radius: 50px; /* Pill shape */
            font-weight: 800; 
            cursor: pointer; 
            color: #000;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(255, 204, 0, 0.3);
        }

        .btn-outline { 
            border: 2px solid #fff; 
            background: rgba(255, 255, 255, 0.1); 
            color: #fff; 
            padding: 15px 35px; 
            border-radius: 50px; 
            font-weight: 800; 
            cursor: pointer; 
            margin-left: 0;
            backdrop-filter: blur(5px);
            text-transform: uppercase;
            transition: 0.3s;
        }

        .btn:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(255, 204, 0, 0.5); }
        .btn-outline:hover { background: #fff; color: #000; }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-50px) scale(0.8); }
            to { opacity: 1; transform: translateX(0) scale(0.8); }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="https://media.discordapp.net/attachments/1496377481652076586/1497614928008450158/logo.jpg?ex=69ee2a17&is=69ecd897&hm=aaa80ee66571838b6d3b92bef5219aed8a871dac8bec03f94f49e1de8b497ab6&=&format=webp&width=703&height=703" alt="Logo">
    </div>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="menu.php">Menu</a>
        <a href="contact.php">Contact</a>
        <a href="omsim.php">Reserve Now</a>
    </nav>
</header>

<section class="hero">
    <div class="carousel-outer-div">
        <div class="hero-carousel">
            <div class="carousel-container">
                <button class="nav-btn prev" onclick="moveSlide(-1)">❮</button>
                <button class="nav-btn next" onclick="moveSlide(1)">❯</button>
                <div class="carousel-track" id="track">
                    <?php foreach ($bestSellers as $item): ?>
                    <div class="carousel-slide">
                        <img src="<?= $item['img'] ?>" alt="">
                        <div class="item-info">
                            <span style="color: #ffcc00; font-size: 0.7rem; font-weight: bold;"><?= $item['badge'] ?></span>
                            <h2 style="color: white; margin: 5px 0; font-size: 1.8rem;"><?= $item['name'] ?></h2>
                            <p style="color: #ffcc00; font-weight: bold; font-size: 1.6rem; margin:0;">₱<?= number_format($item['price'], 2) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="welcome-outer-div">
        <div class="hero-text">
            <h3>Welcome</h3>
            <h1>Sikatan Sikada Cafe</h1> 
            <p>Tuloy po kayo! Enjoy delicious food in a relaxing place.</p>
            <div class="buttons">
                <button class="btn">Explore Menu</button>
                <button class="btn-outline">Learn More</button>
            </div>
        </div>
    </div>
</section>

<script>
    let index = 0;
    const track = document.getElementById('track');
    function moveSlide(d) {
        const slides = document.querySelectorAll('.carousel-slide');
        index = (index + d + slides.length) % slides.length;
        track.style.transform = `translateX(-${index * 100}%)`;
    }
    setInterval(() => moveSlide(1), 6000); 
</script>
<a href="logout.php" style="color: red; font-weight: bold; text-decoration: none;">
    Logout
</a>
		<br/>
</body>
</html>
