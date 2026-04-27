<?php
session_start(); // THIS MUST BE AT THE TOP
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <title>Menu - Sikatan Sikada Cafe</title>
</head>

<body>
  <header>
    <div class="logo">

      <img
        img src='https://media.discordapp.net/attachments/1496377481652076586/1497614928008450158/logo.jpg?ex=69ee2a17&is=69ecd897&hm=aaa80ee66571838b6d3b92bef5219aed8a871dac8bec03f94f49e1de8b497ab6&=&format=webp&width=703&height=703'
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
        <a href="login.php">Login</a>
      <?php endif; ?>
    </nav>
  </header>

  <div class="menus">
    <div class="containercateg">
      <h1>Tables and Atmosphere</h1>
      <div class="det-grid">
        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471817538076782/IMG_20260425_132503_992.jpg?ex=69eda4ce&is=69ec534e&hm=2fdb3515cd9fba8a94fd54ac484d50fdc036eaeb7754a3a5f534fcde9e0488c3&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Common Table (Seats 5 to 6)</h3>
            <p>
              Immerse your group in the true spirit of Sikatan Sikada Café at this signature common table. Directly overlooked by our vibrant, handcrafted yellow sun mural—the symbol of the café's soul and name—this spot blends our favorite industrial-rustic aesthetic with the warmth of shared experiences.
            </p>
            <a href="cart.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471818083209297/IMG_20260425_132533_341.jpg?ex=69eda4cf&is=69ec534f&hm=9fc96f5ead4d6a8444ba334007a4d194852f46b4877a56b536d1ec75a9d8fdbc&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Panorama Group Deck (8 Seater)</h3>
            <p>
              Elevate your group gathering at our premier 8-seater long table, designed specifically for those who believe that great food is best enjoyed with even better company. Situated in the heart of our breezy, open-air deck, this spot offers the ultimate "overlooking" experience that has made Sikatan Sikada a destination in Binangonan.
            </p>
            <a href="cart.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471818582462464/IMG_20260425_132541_968.jpg?ex=69eda4cf&is=69ec534f&hm=c0f473764a2f541dc4ddcb675f4ec1f64df02c30d83c2620849ac2d7c769cc48&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Panorama Group Deck 2 (8 Seater)</h3>
            <p>
              Designed for the ultimate group hangout, our Corner Horizon table offers a unique vantage point of the Binangonan hills. Positioned at the edge of our glass-paneled deck, this expansive table allows your group to feel fully immersed in the landscape, providing a panoramic view that stretches from the lush valley to the distant lake.
            </p>
            <a href="cart.php" class="btn">Reserve</a>
          </div>
        </div>
      </div>
    </div>

    <div class="containercateg">
      <div class="det-grid">
        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471819249225769/IMG_20260425_133014_415.jpg?ex=69eef64f&is=69eda4cf&hm=d792add9f8296fabf808ef6005e8ac1d9cf7e8a9a4b9865a129b17e8291da004&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Garden View Nook (4 Seater)</h3>
            <p>
              Perfect for small families or a double date. This intimate 4-seater spot offers a more private experience while still enjoying the fresh air and rustic charm of our garden-side seating.
            </p>
            <a href="cart.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471820243144814/IMG_20260425_133051_925.jpg?ex=69eef64f&is=69eda4cf&hm=48fc7c3253a10b40a9e60a6cd89b7527933414c15cdf41e5c1107f7609069a7f&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Garden Patio Table (6 Seater)</h3>
            <p>
              Enjoy a balanced outdoor dining experience with our 6-seater patio table. Perfect for family lunches or catching up with friends, this table provides a spacious yet cozy atmosphere under the shade, surrounded by our café's natural greenery.
            </p>
            <a href="cart.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471821463949392/IMG_20260425_133247_781.jpg?ex=69eef64f&is=69eda4cf&hm=f7a53037c6e83c018a7a60fae5c7d0c5438fbc1f6ed2b2964045fb796f920243&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Grand Gathering Table (8 Seater)</h3>
            <p>
              Our most spacious option for the ultimate Sikatan Sikada experience. Perfect for birthday celebrations, reunions, or large family dinners. This long table ensures everyone has a seat at the heart of the conversation while enjoying the café's refreshing breeze.
            </p>
            <a href="cart.php" class="btn">Reserve</a>
          </div>
        </div>
      </div>
    </div>





    <div class="containercateg">
      <div class="det-grid">
        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497472519924613150/IMG_20260425_133845_800.jpg?ex=69eef6f6&is=69eda576&hm=e21e7d3adf463ef9ae9ddc0b6d3f3388b9bd9ce512483a766c5c1278991bc503&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Classic Heritage Table (4 Seater)</h3>
            <p>
              Our Classic Heritage Table offers a timeless and sturdy design, ideal for guests who appreciate a traditional dining atmosphere. Positioned in a quiet, accessible area of the café, it provides the perfect comfort for long conversations and relaxing meals.
            </p>
            <a href="cart.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497472520851427359/IMG_20260425_134028_049.jpg?ex=69eef6f6&is=69eda576&hm=6ebebc5fdf6c39a6ab5755f06a5a882a44056b45c51d4f573dae84d166ab2657&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Flexible Horizon Table (6-8 Seater)</h3>
            <p>
              Our most versatile seating option. This classic wooden 6-seater can be comfortably expanded to accommodate up to 8 guests. Located in a breezy spot with a great view, it’s perfect for groups that might have a few extra friends joining last minute.
            </p>
            <a href="cart.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497473180145549312/IMG_20260425_134330_429.jpg?ex=69eef793&is=69eda613&hm=a2f92edbc7bbf9610679f5b6542c340df798bcb05550be18a2fdaec6ff383357&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Sunset Terrace (4 Seater)</h3>
            <p>
              Located in our most popular open-air section, the Sunset Terrace features a row of 4-seater tables designed for those who love the "overlooking" vibe. Enjoy the refreshing Binangonan breeze and a panoramic view while you dine in this vibrant, airy space.
            </p>
            <a href="cart.php" class="btn">Reserve</a>
          </div>
        </div>
      </div>
    </div>


    <div class="containercateg">
      <div class="det-grid">
       <div class="det">
  <img src="https://media.discordapp.net/attachments/1496377481652076586/1497473179403288626/IMG_20260425_134312_108.jpg?ex=69eef793&is=69eda613&hm=d84b60c732ce0d39c3aeeefea89bcf8309c08d6cbe1634be89e359452a8cbc37&=&format=webp&width=527&height=703" />
  <div class="content">
    <h3>Overlook Date Nook (2 Seater)</h3>
    <p>
      Our most intimate seating option, designed specifically for couples. This 2-seater nook provides a private, cozy corner with an unobstructed view of the horizon. Whether it's a first date or an anniversary, this spot offers the quiet charm and romantic atmosphere you’re looking for.
    </p>
    <a href="cart.php" class="btn">Reserve</a>
  </div>
</div>

       <div class="det">
  <img src="https://media.discordapp.net/attachments/1496377481652076586/1497472996451942490/IMG_20260425_134242_470.jpg?ex=69eef768&is=69eda5e8&hm=eea141ea17cdc74b5f7c77a9beb0172b38370ccb2814765986133c74dcddd748&=&format=webp&width=527&height=703" />
  <div class="content">
    <h3>Bistro Breeze Deck (2-4 Seater)</h3>
    <p>
      Our most flexible outdoor seating! These bistro-style tables are perfect for a quick solo coffee, a cozy date for two, or can be combined for a group of four. Located right on the deck, it’s the best spot to feel the wind and soak in the casual café atmosphere.
    </p>
    <a href="cart.php" class="btn">Reserve</a>
  </div>
</div>

       <div class="det">
  <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471820830343238/IMG_20260425_133222_236.jpg?ex=69eef64f&is=69eda4cf&hm=63d2d3961944139d9ffada5702376f43c1ecdcc317ebc45f197954daa7522339&=&format=webp&width=527&height=703" />
  <div class="content">
    <h3>Grand Indoor Suite (8-12 Seater)</h3>
    <p>
      Our largest indoor seating option, perfect for big families, barkada reunions, or corporate meetings. This expansive long table offers a comfortable, air-cooled environment while keeping everyone together in one vibrant space. 
    </p>
    <a href="cart.php" class="btn">Reserve</a>
  </div>
</div>
      </div>
    </div>




    <div class="containercateg">
      <h1>Reservations you might like</h1>
      <div class="det-grid">
        <div class="det">
          <img src="Photos\dummy_photo.jpg" />
          <div class="content">
            <h3>RecommReservation 1</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
            <a href="cart.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="Photos\dummy_photo.jpg" />
          <div class="content">
            <h3>RecommReservation 2</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
            <a href="cart.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="Photos\dummy_photo.jpg" />
          <div class="content">
            <h3>RecommReservation 3</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
            <a href="cart.php" class="btn">Reserve</a>
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