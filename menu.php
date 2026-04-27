<?php
session_start(); // THIS MUST BE AT THE TOP
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="menu.css" />
  <title>Document</title>
</head>

<body>
  <header>
    <div class="logo">

      <img
        img src='logo.jpg'
        alt="Logo" />
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
        <a href=" login.php">Login</a>
      <?php endif; ?>
    </nav>
  </header>

  <div class="menus">
    <div class="containercateg">
      <h1>Tables and Atmosphere</h1>
      <div class="det-grid">
        <div class="det">
          <img src="event place.jpg" />
          <div class="content">
            <h3>Event Table (Seats 5 to 6)</h3>
            <p>
             Perfect for small groups seeking a quiet and cozy escape, this 4-seater nook offers a relaxing garden-side setting. Surrounded by greenery, it provides a peaceful atmosphere ideal for intimate conversations, casual meals, or a simple break away from the crowd.
            </p>
            <a href="omsim.php?item=Common%20Table" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="6-8.png" />
          <div class="content">
            <h3>Event Place (6 to 8 Seater)</h3>
            <p>
              Enjoy a comfortable outdoor dining experience with this 6-seater patio table. Designed for small gatherings, it balances space and coziness under a shaded area, letting guests dine while taking in the refreshing ambiance of the garden.
            </p>
            <a href="omsim.php?item=Panorama%20Group%20Deck" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="taas.jpg" />
          <div class="content">
            <h3>Roof Deck (8 to 12 Seater)</h3>
            <p>
              Designed for larger groups, this spacious 8-seater table is perfect for celebrations, reunions, or family get-togethers. With ample seating and a welcoming setup, it creates a lively dining experience where everyone can comfortably share meals and moments together.
            </p>
            <a href="omsim.php?item=Panorama%20Group%20Deck%202" class="btn">Reserve</a>
          </div>
        </div>
      </div>
    </div>

    <div class="containercateg">
      <div class="det-grid">
        <div class="det">
          <img src="first.jpg" />
          <div class="content">
            <h3>Garden View Nook (4 Seater)</h3>
            <p>
              Perfect for small families or a double date. This intimate 4-seater spot offers a more private experience while still enjoying the fresh air and rustic charm of our garden-side seating.
            </p>
            <a href="omsim.php?item=Garden%20View%20Nook" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="2nd.jpg" />
          <div class="content">
            <h3>Garden Patio Table (6 Seater)</h3>
            <p>
              Enjoy a balanced outdoor dining experience with our 6-seater patio table. Perfect for family lunches or catching up with friends, this table provides a spacious yet cozy atmosphere under the shade, surrounded by our café's natural greenery.
            </p>
            <a href="omsim.php?item=Garden%20Patio%20Table" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="3rd.jpg" />
          <div class="content">
            <h3>Grand Gathering Table (8 Seater)</h3>
            <p>
              Our most spacious option for the ultimate Sikatan Sikada experience. Perfect for birthday celebrations, reunions, or large family dinners. This long table ensures everyone has a seat at the heart of the conversation while enjoying the café's refreshing breeze.
            </p>
            <a href="omsim.php?item=Grand%20Gathering%20Table" class="btn">Reserve</a>
          </div>
        </div>
      </div>
    </div>





    <div class="containercateg">
      <div class="det-grid">
        <div class="det">
          <img src="4th.jpg" />
          <div class="content">
            <h3>Classic Heritage Table (4 Seater)</h3>
            <p>
              Our Classic Heritage Table offers a timeless and sturdy design, ideal for guests who appreciate a traditional dining atmosphere. Positioned in a quiet, accessible area of the café, it provides the perfect comfort for long conversations and relaxing meals.
            </p>
            <a href="omsim.php?item=Classic%20Heritage%20Table" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="5th.jpg" />
          <div class="content">
            <h3>Flexible Horizon Table (6-8 Seater)</h3>
            <p>
              Our most versatile seating option. This classic wooden 6-seater can be comfortably expanded to accommodate up to 8 guests. Located in a breezy spot with a great view, it’s perfect for groups that might have a few extra friends joining last minute.
            </p>
            <a href="omsim.php?item=Flexible%20Horizon%20Table&min=6&max=8" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="6th.jpg" />
          <div class="content">
            <h3>Sunset Terrace (4 Seater)</h3>
            <p>
              Located in our most popular open-air section, the Sunset Terrace features a row of 4-seater tables designed for those who love the "overlooking" vibe. Enjoy the refreshing Binangonan breeze and a panoramic view while you dine in this vibrant, airy space.
            </p>
            <a href="omsim.php?item=Sunset%20Terrace%204-Seater" class="btn">Reserve</a>
          </div>
        </div>
      </div>
    </div>


    <div class="containercateg">
      <div class="det-grid">
       <div class="det">
  <img src="7th.jpg" />
  <div class="content">
    <h3>Overlook Date Nook (2 Seater)</h3>
    <p>
      Our most intimate seating option, designed specifically for couples. This 2-seater nook provides a private, cozy corner with an unobstructed view of the horizon. Whether it's a first date or an anniversary, this spot offers the quiet charm and romantic atmosphere you’re looking for.
    </p>
    <a href="omsim.php?item=Overlook%20Date%20Nook" class="btn">Reserve</a>
  </div>
</div>

       <div class="det">
  <img src="8th.jpg" />
  <div class="content">
    <h3>Bistro Breeze Deck (2-4 Seater)</h3>
    <p>
      Our most flexible outdoor seating! These bistro-style tables are perfect for a quick solo coffee, a cozy date for two, or can be combined for a group of four. Located right on the deck, it’s the best spot to feel the wind and soak in the casual café atmosphere.
    </p>
    <a href="omsim.php?item=Bistro%20Breeze%20Deck&min=2&max=4" class="btn">Reserve</a>
  </div>
</div>

       <div class="det">
  <img src="9th.jpg" />
  <div class="content">
    <h3>Grand Indoor Suite (8-12 Seater)</h3>
    <p>
      Our largest indoor seating option, perfect for big families, barkada reunions, or corporate meetings. This expansive long table offers a comfortable, air-cooled environment while keeping everyone together in one vibrant space. 
    </p>
    <a href="omsim.php?item=Grand%20Indoor%20Suite&min=8&max=12" class="btn">Reserve</a>
  </div>
</div>
      </div>
    </div>




    <div class="containercateg">
      <h1>Staycation you might like</h1>
      <div class="det-grid">
        <div class="det">
          <img src="pulag.jpg" />
          <div class="content">
            <h3>Mt. Pulag</h3>
            <p>
              Inspired by the serene beauty of Mt. Pulag, this room offers a calm and refreshing atmosphere. With its cozy setup and inviting interior, it’s perfect for those seeking a relaxing retreat, whether for a short break or a longer staycation experience.
            </p>
            <a href="omsim.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="apo.jpg" />
          <div class="content">
            <h3>Mt. Apo</h3>
            <p>
               Experience a cozy and welcoming stay inspired by the country’s highest peak. This room offers a relaxing space with a clean, modern interior and a touch of rustic charm. Perfect for guests looking to unwind, it provides comfort and privacy for a peaceful staycation escape.
            </p>
            <a href="omsim.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="halcon.jpg" />
          <div class="content">
            <h3>Mt. Halcon</h3>
            <p>
              Named after one of the Philippines’ most iconic mountains, this room blends simplicity with comfort. Its warm ambiance and thoughtfully arranged space create a soothing environment, ideal for rest and quiet moments during your stay.
            </p>
            <a href="omsim.php" class="btn">Reserve</a>
          </div>
        </div>
      </div>
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
</script>
</body>

</html>