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
        <a href=" login.php">Login</a>
      <?php endif; ?>
    </nav>
  </header>

  <div class="menus">
    <div class="containercateg">
      <h1>Tables and Atmosphere</h1>
      <div class="det-grid">
        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497472520398438480/IMG_20260425_133938_952.jpg?ex=69f04876&is=69eef6f6&hm=9e22688d6cce0f36225aa7ecccb378c6e29482fd7c7c5f6f98f18253df8163fc&=&format=webp&width=1203&height=902" />
          <div class="content">
            <h3>Common Table (Seats 5 to 6)</h3>
            <p>
             Perfect for small groups seeking a quiet and cozy escape, this 4-seater nook offers a relaxing garden-side setting. Surrounded by greenery, it provides a peaceful atmosphere ideal for intimate conversations, casual meals, or a simple break away from the crowd.
            </p>
            <a href="omsim.php?item=Common%20Table" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://images-ext-1.discordapp.net/external/ahaCe4awlP1OF8qSBLF_5iR2k9O7ZR3-T9SLc6aw2I0/%3F_nc_cat%3D106%26ccb%3D1-7%26_nc_sid%3D7b2446%26_nc_eui2%3DAeEVi0uUZ71duDm-41I_Q5ocw4XQM_w8jJHDhdAz_DyMkU4V2211AsEv0KeBIl5IXHp4lNmf1pDGrak4kQRx7APV%26_nc_ohc%3D4RsHhvRniI0Q7kNvwHFrnXN%26_nc_oc%3DAdpKWtv9ulDNgwjNoj86Fg6uuH3e5UnmldAW6pOUA3SKYLgPk9ee9D3O9jeu7Lh2VWQ%26_nc_zt%3D23%26_nc_ht%3Dscontent.fmnl43-1.fna%26_nc_gid%3DGekA5ZbcyBUUntCw2QK-CQ%26_nc_ss%3D7b2a8%26oh%3D00_Af1C4De7k4t-J86Xy9k4qQqN3ehv5oFCvtGrFFF08RAvBA%26oe%3D69F5148A/https/scontent.fmnl43-1.fna.fbcdn.net/v/t39.30808-6/495569644_694957336256425_1375155452132666931_n.jpg?format=webp" />
          <div class="content">
            <h3>Panorama Group Deck (8 Seater)</h3>
            <p>
              Enjoy a comfortable outdoor dining experience with this 6-seater patio table. Designed for small gatherings, it balances space and coziness under a shaded area, letting guests dine while taking in the refreshing ambiance of the garden.
            </p>
            <a href="omsim.php?item=Panorama%20Group%20Deck" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://images-ext-1.discordapp.net/external/1KGMAo58uhu7fQHlCa2n3o2uiz6FNOO0JfdwP2ohEcU/%3Fstp%3Dcp6_dst-jpg_tt6%26_nc_cat%3D109%26ccb%3D1-7%26_nc_sid%3D7b2446%26_nc_eui2%3DAeGrNUiqdtioAg1WQs2bz41hggvZtifZU2uCC9m2J9lTa4zpn-xWKJv1q4rBuuEjVW0ExBBip0pJLCrol8qvPilv%26_nc_ohc%3D8yhmpzyb2qsQ7kNvwGSXJkk%26_nc_oc%3DAdou3Shu5gzO_lWj5MFZDxiR61mMqVZ9MTeeRpnTEGbizbMcxk2MXtQ0pYzMNGQpz-0%26_nc_zt%3D23%26_nc_ht%3Dscontent.fmnl11-1.fna%26_nc_gid%3DYsl4W4lVCPSjfFzTIr5GSQ%26_nc_ss%3D7b2a8%26oh%3D00_Af1rQ5Bd66tSj3iPhrVq42wJCSZk4l5JFAxsMMnoNMf-XA%26oe%3D69F50120/https/scontent.fmnl11-1.fna.fbcdn.net/v/t39.30808-6/488364665_668225025596323_1563923258061635188_n.jpg?format=webp&width=1341&height=1006" />
          <div class="content">
            <h3>Panorama Group Deck 2 (8 Seater)</h3>
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
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471819249225769/IMG_20260425_133014_415.jpg?ex=69eef64f&is=69eda4cf&hm=d792add9f8296fabf808ef6005e8ac1d9cf7e8a9a4b9865a129b17e8291da004&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Garden View Nook (4 Seater)</h3>
            <p>
              Perfect for small families or a double date. This intimate 4-seater spot offers a more private experience while still enjoying the fresh air and rustic charm of our garden-side seating.
            </p>
            <a href="omsim.php?item=Garden%20View%20Nook" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471820243144814/IMG_20260425_133051_925.jpg?ex=69eef64f&is=69eda4cf&hm=48fc7c3253a10b40a9e60a6cd89b7527933414c15cdf41e5c1107f7609069a7f&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Garden Patio Table (6 Seater)</h3>
            <p>
              Enjoy a balanced outdoor dining experience with our 6-seater patio table. Perfect for family lunches or catching up with friends, this table provides a spacious yet cozy atmosphere under the shade, surrounded by our café's natural greenery.
            </p>
            <a href="omsim.php?item=Garden%20Patio%20Table" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471821463949392/IMG_20260425_133247_781.jpg?ex=69eef64f&is=69eda4cf&hm=f7a53037c6e83c018a7a60fae5c7d0c5438fbc1f6ed2b2964045fb796f920243&=&format=webp&width=527&height=703" />
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
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497472519924613150/IMG_20260425_133845_800.jpg?ex=69eef6f6&is=69eda576&hm=e21e7d3adf463ef9ae9ddc0b6d3f3388b9bd9ce512483a766c5c1278991bc503&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Classic Heritage Table (4 Seater)</h3>
            <p>
              Our Classic Heritage Table offers a timeless and sturdy design, ideal for guests who appreciate a traditional dining atmosphere. Positioned in a quiet, accessible area of the café, it provides the perfect comfort for long conversations and relaxing meals.
            </p>
            <a href="omsim.php?item=Classic%20Heritage%20Table" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497472520851427359/IMG_20260425_134028_049.jpg?ex=69eef6f6&is=69eda576&hm=6ebebc5fdf6c39a6ab5755f06a5a882a44056b45c51d4f573dae84d166ab2657&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Flexible Horizon Table (6-8 Seater)</h3>
            <p>
              Our most versatile seating option. This classic wooden 6-seater can be comfortably expanded to accommodate up to 8 guests. Located in a breezy spot with a great view, it’s perfect for groups that might have a few extra friends joining last minute.
            </p>
            <a href="omsim.php?item=Flexible%20Horizon%20Table&min=6&max=8" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497473180145549312/IMG_20260425_134330_429.jpg?ex=69eef793&is=69eda613&hm=a2f92edbc7bbf9610679f5b6542c340df798bcb05550be18a2fdaec6ff383357&=&format=webp&width=527&height=703" />
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
  <img src="https://media.discordapp.net/attachments/1496377481652076586/1497473179403288626/IMG_20260425_134312_108.jpg?ex=69eef793&is=69eda613&hm=d84b60c732ce0d39c3aeeefea89bcf8309c08d6cbe1634be89e359452a8cbc37&=&format=webp&width=527&height=703" />
  <div class="content">
    <h3>Overlook Date Nook (2 Seater)</h3>
    <p>
      Our most intimate seating option, designed specifically for couples. This 2-seater nook provides a private, cozy corner with an unobstructed view of the horizon. Whether it's a first date or an anniversary, this spot offers the quiet charm and romantic atmosphere you’re looking for.
    </p>
    <a href="omsim.php?item=Overlook%20Date%20Nook" class="btn">Reserve</a>
  </div>
</div>

       <div class="det">
  <img src="https://media.discordapp.net/attachments/1496377481652076586/1497472996451942490/IMG_20260425_134242_470.jpg?ex=69eef768&is=69eda5e8&hm=eea141ea17cdc74b5f7c77a9beb0172b38370ccb2814765986133c74dcddd748&=&format=webp&width=527&height=703" />
  <div class="content">
    <h3>Bistro Breeze Deck (2-4 Seater)</h3>
    <p>
      Our most flexible outdoor seating! These bistro-style tables are perfect for a quick solo coffee, a cozy date for two, or can be combined for a group of four. Located right on the deck, it’s the best spot to feel the wind and soak in the casual café atmosphere.
    </p>
    <a href="omsim.php?item=Bistro%20Breeze%20Deck&min=2&max=4" class="btn">Reserve</a>
  </div>
</div>

       <div class="det">
  <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471820830343238/IMG_20260425_133222_236.jpg?ex=69eef64f&is=69eda4cf&hm=63d2d3961944139d9ffada5702376f43c1ecdcc317ebc45f197954daa7522339&=&format=webp&width=527&height=703" />
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
          <img src="https://images-ext-1.discordapp.net/external/jSNiC5mc9-y5W0laxPpAPOdvubY50T0cqRlUy_H7xqY/%3Fstp%3Dcp6_dst-jpg_tt6%26_nc_cat%3D104%26ccb%3D1-7%26_nc_sid%3D7b2446%26_nc_eui2%3DAeEogfdhV9vU6efkVvHUSY1acaZ2vkpZV11xpna-SllXXX78nrJ1dyuU8C7xBTclEQsEO-1d5Zb_3Vi0c7R1tyDR%26_nc_ohc%3Dctj8OjwR0ocQ7kNvwHLLyJq%26_nc_oc%3DAdobfu0FZ73rRwxIRdE7dBCIASoYzCOpPAEMQ4DtkqeawhH53zhXfr1jHyHw5iTV3Zk%26_nc_zt%3D23%26_nc_ht%3Dscontent.fmnl11-1.fna%26_nc_gid%3Dm3ITcBGu-mcdJWPpdY3q1A%26_nc_ss%3D7b2a8%26oh%3D00_Af1HqU3b41uUoz_btnj94WuFYkNaPLDoF31Zjt0i0Vm7mQ%26oe%3D69F5171F/https/scontent.fmnl11-1.fna.fbcdn.net/v/t39.30808-6/490798877_679135114505314_6918265849661747113_n.jpg?format=webp&width=225&height=300" />
          <div class="content">
            <h3>Mt. Pulag</h3>
            <p>
              Inspired by the serene beauty of Mt. Pulag, this room offers a calm and refreshing atmosphere. With its cozy setup and inviting interior, it’s perfect for those seeking a relaxing retreat, whether for a short break or a longer staycation experience.
            </p>
            <a href="omsim.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://images-ext-1.discordapp.net/external/Ne60DgRgp1bnSPQY830AfsBYZ9VAk0JhDqEz6aKwTsc/%3F_nc_cat%3D100%26ccb%3D1-7%26_nc_sid%3D7b2446%26_nc_eui2%3DAeFqII3eQ5Bvtx3_elbAIvB65p5hWLDgWQvmnmFYsOBZCzbjVX_ba_SrFSBeKjXqlYGbuAta3nqaCSSg8kTSBF5k%26_nc_ohc%3DwtpyMnbsQvcQ7kNvwEVjAOr%26_nc_oc%3DAdrWXqceLSUNARpq-ses6zuN48GfGNfxHujeRIuNgAVvzT-3aAogS7EFXbflQE3bA04%26_nc_zt%3D23%26_nc_ht%3Dscontent.fmnl43-1.fna%26_nc_gid%3DdLeseQY0t2wdJZKdOxh04Q%26_nc_ss%3D7b2a8%26oh%3D00_Af0b84OJyVMDSUq7akms83PQ_wxtEtf-mmfH7V0UrzWLXA%26oe%3D69F50755/https/scontent.fmnl43-1.fna.fbcdn.net/v/t39.30808-6/490326750_679134121172080_3535331217717813190_n.jpg?format=webp&width=225&height=300" />
          <div class="content">
            <h3>Mt. Apo</h3>
            <p>
               Experience a cozy and welcoming stay inspired by the country’s highest peak. This room offers a relaxing space with a clean, modern interior and a touch of rustic charm. Perfect for guests looking to unwind, it provides comfort and privacy for a peaceful staycation escape.
            </p>
            <a href="omsim.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://images-ext-1.discordapp.net/external/rA8jFnt8hxk9BJ8U4BDQFbJI9jtl_8OXn3lo_WbMYCE/%3Fstp%3Dcp6_dst-jpg_tt6%26_nc_cat%3D108%26ccb%3D1-7%26_nc_sid%3D7b2446%26_nc_eui2%3DAeEYi9A7o4m13achF-D4dNy6Yah9jFO6SMFhqH2MU7pIwZDjqfmaLcOjumY-87HunPCBhQboG66ABtvhK7-_3ibb%26_nc_ohc%3DocSAXqbDeYIQ7kNvwFiYF_I%26_nc_oc%3DAdojh2bIiv9REj-vlbA04zCyWV6UJohZu4kwe89_gIeXG5KHUEqlnlbb4rHZ-T_va6c%26_nc_zt%3D23%26_nc_ht%3Dscontent.fmnl43-1.fna%26_nc_gid%3DEtSbMqXs28aPIWarIuvKow%26_nc_ss%3D7b2a8%26oh%3D00_Af013eIBZhCaFqOmBzTB86iXz4iP-kR5CqIcKILKZFKXHw%26oe%3D69F4FDF6/https/scontent.fmnl43-1.fna.fbcdn.net/v/t39.30808-6/490473984_679135341171958_6103256923955071503_n.jpg?format=webp&width=225&height=300" />
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