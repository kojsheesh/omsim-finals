<?php
session_start(); // THIS MUST BE AT THE TOP
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Sikatan Sikada Cafe</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
            <?php if (isset($_SESSION['user_email'])): ?>
                <a href="omsim.php">Reserve Now</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <div class="contact-page-wrapper">
        <div class="contact-header">
            <div class="logo-box">
                <img src="https://images-ext-1.discordapp.net/external/Iv_uM4ovE93BfieHqvzXhL3b3vIXcSInD5MTZ2KNz1k/%3F_nc_cat%3D106%26ccb%3D1-7%26_nc_sid%3D1d70fc%26_nc_eui2%3DAeFQUpA0R51jfbXZhayH37dWyGrljN9-icDIauWM336JwDUg88Lc9v2uoi16LPeNoRxWo04MhijL2tsH4rhlP4H2%26_nc_ohc%3DlrGlivI-syoQ7kNvwHseGw9%26_nc_oc%3DAdp6-EEQczwo28L5tGMPACZh1dPgbJvEB70UH1Cl5x3Uu6GGx8Y4uDp_T5kXg7p11Oc%26_nc_zt%3D23%26_nc_ht%3Dscontent.fmnl43-1.fna%26_nc_gid%3D3gEh7cCPlIvEXSlIIPxB3A%26_nc_ss%3D7b2a8%26oh%3D00_Af3o87A8ZlfGIWploemViOOCWhg9bQDszfc86zHZ9PAgtQ%26oe%3D69F29026/https/scontent.fmnl43-1.fna.fbcdn.net/v/t39.30808-6/414728256_380365187715643_1319917961571997362_n.jpg?format=webp" alt="Sikatan Sikada Logo">
            </div>
            <h1>Contact Us</h1>
            <p>Connect with Sikatan Sikada Café directly using the information below.</p>
        </div>

        <div class="contact-cards-container">
            <a href="https://www.facebook.com/profile.php?id=100072264930559&sk=about" class="contact-card" target="_blank">
                <div class="icon-circle"><i class="fab fa-facebook-f"></i></div>
                <h3>Facebook</h3>
                <span class="fb-link-text">[Visit Page]</span>
            </a>

            <a href="tel:0995 655 4094" class="contact-card">
                <div class="icon-circle"><i class="fas fa-phone-alt"></i></div>
                <h3>Landline</h3>
                <p>+0995 655 4094</p>
                <span class="fb-link-text">[Call Us]</span>
            </a>

            <a href="https://www.google.com/maps/search/Sikatan+Sikada+Cafe+Binangonan+Rizal" class="contact-card" target="_blank">
                <div class="icon-circle"><i class="fas fa-map-marker-alt"></i></div>
                <h3>Location</h3>
                <p>Binangonan, Rizal</p>
                <span class="fb-link-text">[Open Maps]</span>
            </a>
        </div>

        <div class="feedback-section">
            <a href="feedback.php" class="feedback-btn">
                [ Submit Feedback / Contact Form ]
            </a>
            <p>Click here to send us your thoughts or ask a question.</p>
        </div>
    </div>
<!-- ===================== -->
<!-- FAQ FLOATING WIDGET   -->
<!-- ===================== -->
<style>
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
</style>

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
    const faqs = [
        { q: "What are your operating hours?", a: "We're open Monday to Sunday, 9:00 AM – 9:00 PM. We may have extended hours during holidays — follow our socials for updates!" },
        { q: "How do I make a reservation?", a: "Simply log in to your account and click 'Reserve Now' in the navigation bar. Choose your preferred date, time, and party size." },
        { q: "Is there a minimum spend for reservations?", a: "We have a minimum spend of ₱300 per head for reserved tables. Walk-in guests have no minimum requirement." },
        { q: "Do you offer dine-in and takeout?", a: "Yes! We offer both dine-in and takeout. For takeout orders, please call us or place your order in advance to reduce wait time." },
        { q: "Are your ingredients locally sourced?", a: "Absolutely. We pride ourselves on using fresh, locally sourced Filipino ingredients to keep every dish authentic and flavorful." },
        { q: "Do you accommodate dietary restrictions?", a: "We do our best to accommodate requests. Please inform our staff of any allergies or dietary needs when ordering." },
        { q: "Where are you located?", a: "You can find our full address and a map on our Contact page. We're easily accessible by public transport and have parking available." },
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
</script>
</body>

</html>