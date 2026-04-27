<?php
session_start(); // THIS MUST BE AT THE TOP
?>

<?php
// Best Seller Product Data
$bestSellers = [
    ["name" => "Halo-Halo", "price" => 189.00, "badge" => "🔥 Top Pick", "img" => "https://cdn.discordapp.com/attachments/1312440437679591427/1497940548802314260/image.png?ex=69ef5959&is=69ee07d9&hm=5346cc6c711aaa82e412a264aeea436a6216d686a99105b26ce00f48f43263f4&"],
    ["name" => "Sinigang na Ribs", "price" => 450.00, "badge" => "⭐ Best Rated", "img" => "https://cdn.discordapp.com/attachments/1312440437679591427/1497942037167866049/image.png?ex=69ef5abc&is=69ee093c&hm=fc5c8b506a7e83f8e93b2168f5f0f6e680f26b396f74952f311063042cf7927d&"],
    ["name" => "Matcha Latte", "price" => 159.00, "badge" => "💥 Hot Deal", "img" => "https://cdn.discordapp.com/attachments/1312440437679591427/1497943210968875109/image.png?ex=69ef5bd3&is=69ee0a53&hm=373790ddcc44eb7135e42b798d5fb995379a7ad24eb7daa0d9dc1693a8e1129a&"],
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
            padding: 60px 0 40px 0; 
            overflow: hidden;
            background-image: none; 
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
            text-align: left;
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
            font-size: 5rem;
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
            border-radius: 50px;
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

        /* ===================== */
        /* FAQ FLOATING WIDGET   */
        /* ===================== */
        .faq-fab {
            position: fixed;
            bottom: 28px;
            right: 28px;
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: #ffcc00;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 16px rgba(0,0,0,0.35);
        }
        .faq-fab:hover { transform: scale(1.08); }
        .faq-panel {
            position: fixed;
            bottom: 94px;
            right: 28px;
            width: 340px;
            max-height: 480px;
            background: #1a1a1a;
            border-radius: 16px;
            border: 1px solid rgba(255,204,0,0.25);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            z-index: 9998;
            opacity: 0;
            transform: translateY(16px) scale(0.97);
            pointer-events: none;
            transition: opacity 0.25s, transform 0.25s;
        }
        .faq-panel.faq-open {
            opacity: 1;
            transform: translateY(0) scale(1);
            pointer-events: all;
        }
        .faq-header {
            padding: 16px 20px 12px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            background: rgba(255,204,0,0.07);
        }
        .faq-header h2 { margin: 0 0 2px; font-size: 15px; font-weight: 600; color: #ffcc00; }
        .faq-header p { margin: 0; font-size: 12px; color: rgba(255,255,255,0.45); line-height: 1.4; }
        .faq-list { overflow-y: auto; flex: 1; padding: 10px 0; }
        .faq-item { border-bottom: 1px solid rgba(255,255,255,0.06); }
        .faq-item:last-child { border-bottom: none; }
        .faq-question {
            width: 100%;
            background: none;
            border: none;
            padding: 13px 20px;
            text-align: left;
            color: #fff;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            transition: background 0.15s;
        }
        .faq-question:hover { background: rgba(255,204,0,0.06); }
        .faq-question.faq-active { color: #ffcc00; }
        .faq-chevron { flex-shrink: 0; width: 16px; height: 16px; transition: transform 0.25s; opacity: 0.5; }
        .faq-question.faq-active .faq-chevron { transform: rotate(180deg); opacity: 1; }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.2s;
            padding: 0 20px;
            font-size: 12.5px;
            color: rgba(255,255,255,0.6);
            line-height: 1.6;
        }
        .faq-answer.faq-ans-open { max-height: 200px; padding: 0 20px 14px; }
        .faq-footer {
            padding: 12px 20px;
            border-top: 1px solid rgba(255,255,255,0.08);
            text-align: center;
            font-size: 11.5px;
            color: rgba(255,255,255,0.3);
        }

        /* ===================== */
        /* EXPIRED NOTICE        */
        /* ===================== */
        .expired-notice {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: #1a1a1a;
            border: 1px solid rgba(255,204,0,0.4);
            color: #ffcc00;
            padding: 12px 24px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            z-index: 99999;
            box-shadow: 0 4px 16px rgba(0,0,0,0.4);
            transition: opacity 0.5s;
        }
    </style>
</head>
<body>

<!-- SESSION EXPIRED NOTICE -->
<?php if (isset($_GET['expired'])): ?>
    <div class="expired-notice" id="expiredNotice">
        ⚠️ Your session has expired. Please log in again.
    </div>
<?php endif; ?>

<header>
    <div class="logo">
        <img src="logo.jpg" alt="Logo">
    </div>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="menu.php">Menu</a>
        <a href="contact.php">Contact</a>
        <?php if (isset($_SESSION['user_email'])): ?>
        <a href="omsim.php">Reserve Now</a>
        <a href="logout.php">Logout</a>
        <?php else: ?>
        <a href="login.php">Login</a>
        <?php endif; ?>
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
                            <span style="color: #ffcc00; font-size: 0.9rem; font-weight: bold;"><?= $item['badge'] ?></span>
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
                <a href="menu.php" class="btn">Explore Menu</a>
                <a href="about.php" class="btn-outline">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- ===================== -->
<!-- FAQ FLOATING WIDGET   -->
<!-- ===================== -->
<button class="faq-fab" id="faqBtn" aria-label="Open FAQ">
    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"/>
        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
        <line x1="12" y1="17" x2="12.01" y2="17"/>
    </svg>
</button>

<div class="faq-panel" id="faqPanel">
    <div class="faq-header">
        <h2>Sikatan Sikada Cafe — FAQ</h2>
        <p>Common questions answered for you</p>
    </div>
    <div class="faq-list" id="faqList"></div>
    <div class="faq-footer">Tuloy po kayo! We're happy to help.</div>
</div>

<script>
    /* --- Carousel --- */
    let index = 0;
    const track = document.getElementById('track');
    function moveSlide(d) {
        const slides = document.querySelectorAll('.carousel-slide');
        index = (index + d + slides.length) % slides.length;
        track.style.transform = `translateX(-${index * 100}%)`;
    }
    setInterval(() => moveSlide(1), 6000);

    /* --- FAQ Widget --- */
    const faqs = [
        { q: "What are your operating hours?", a: "We are open every day from 6:00 AM to 1:00 AM, so whether you're an early riser or a late-night diner, we've got you covered!" },
        { q: "Do you offer dine-in and takeout?", a: "We currently offer dine-in only. Come visit us and enjoy your meal in the relaxing ambiance of Sikatan Sikada Cafe!" },
        { q: "Do you accommodate dietary restrictions?", a: "Yes! If you have any food allergies or dietary needs, please inform our staff upon ordering and we will do our best to guide you to safe and suitable menu options." },
        { q: "How do I make a reservation?", a: "Simply log in to your account and click 'Reserve Now' in the navigation bar. Choose your preferred date, time, and party size." },
        { q: "Where are you located?", a: "You can find our full address and a map on our Contact page. We are easily accessible by public transport and have parking available." },
    ];

    const faqList = document.getElementById('faqList');
    faqs.forEach((f, i) => {
        const item = document.createElement('div');
        item.className = 'faq-item';
        item.innerHTML = `
            <button class="faq-question" onclick="toggleFaq(${i}, this)">
                ${f.q}
                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer" id="faqAns${i}">${f.a}</div>
        `;
        faqList.appendChild(item);
    });

    function toggleFaq(i, btn) {
        const ans = document.getElementById('faqAns' + i);
        const isOpen = ans.classList.contains('faq-ans-open');
        document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('faq-ans-open'));
        document.querySelectorAll('.faq-question').forEach(b => b.classList.remove('faq-active'));
        if (!isOpen) {
            ans.classList.add('faq-ans-open');
            btn.classList.add('faq-active');
        }
    }

    const faqBtn = document.getElementById('faqBtn');
    const faqPanel = document.getElementById('faqPanel');
    let faqOpen = false;

    faqBtn.addEventListener('click', () => {
        faqOpen = !faqOpen;
        faqPanel.classList.toggle('faq-open', faqOpen);
        faqBtn.innerHTML = faqOpen
            ? `<svg viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.5" stroke-linecap="round" width="22" height="22"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>`
            : `<svg viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" width="26" height="26"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>`;
    });

    /* --- Auto-hide expired notice after 4 seconds --- */
    const expiredNotice = document.getElementById('expiredNotice');
    if (expiredNotice) {
        setTimeout(() => {
            expiredNotice.style.opacity = '0';
            setTimeout(() => expiredNotice.remove(), 500);
        }, 4000);
    }
</script>
<?php if (isset($_GET['deleted'])): ?>
    <div class="expired-notice" id="deletedNotice">
        🗑️ Your account has been permanently deleted.
    </div>
    <script>
        setTimeout(() => {
            const n = document.getElementById('deletedNotice');
            n.style.opacity = '0';
            setTimeout(() => n.remove(), 500);
        }, 4000);
    </script>
<?php endif; ?>
</body>
</html>