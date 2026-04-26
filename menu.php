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
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471817538076782/IMG_20260425_132503_992.jpg?ex=69eda4ce&is=69ec534e&hm=2fdb3515cd9fba8a94fd54ac484d50fdc036eaeb7754a3a5f534fcde9e0488c3&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Common Table (Seats 5 to 6)</h3>
            <p>
              Immerse your group in the true spirit of Sikatan Sikada Café at this signature common table. Directly overlooked by our vibrant, handcrafted yellow sun mural—the symbol of the café's soul and name—this spot blends our favorite industrial-rustic aesthetic with the warmth of shared experiences.
            </p>
            <a href="omsim.php?item=Common%20Table" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471818083209297/IMG_20260425_132533_341.jpg?ex=69eda4cf&is=69ec534f&hm=9fc96f5ead4d6a8444ba334007a4d194852f46b4877a56b536d1ec75a9d8fdbc&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Panorama Group Deck (8 Seater)</h3>
            <p>
              Elevate your group gathering at our premier 8-seater long table, designed specifically for those who believe that great food is best enjoyed with even better company. Situated in the heart of our breezy, open-air deck, this spot offers the ultimate "overlooking" experience that has made Sikatan Sikada a destination in Binangonan.
            </p>
            <a href="omsim.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="https://media.discordapp.net/attachments/1496377481652076586/1497471818582462464/IMG_20260425_132541_968.jpg?ex=69eda4cf&is=69ec534f&hm=c0f473764a2f541dc4ddcb675f4ec1f64df02c30d83c2620849ac2d7c769cc48&=&format=webp&width=527&height=703" />
          <div class="content">
            <h3>Panorama Group Deck 2 (8 Seater)</h3>
            <p>
              Designed for the ultimate group hangout, our Corner Horizon table offers a unique vantage point of the Binangonan hills. Positioned at the edge of our glass-paneled deck, this expansive table allows your group to feel fully immersed in the landscape, providing a panoramic view that stretches from the lush valley to the distant lake.
            </p>
            <a href="omsim.php" class="btn">Reserve</a>
          </div>
        </div>
      </div>
    </div>

    <div class="containercateg">
      <div class="det-grid">
        <div class="det">
          <img src="Photos\dummy_photo.jpg" />
          <div class="content">
            <h3>Food Combo 1</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
            <a href="omsim.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="Photos\dummy_photo.jpg" />
          <div class="content">
            <h3>Food Combo 2</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
            <a href="omsim.php" class="btn">Reserve</a>
          </div>
        </div>

        <div class="det">
          <img src="Photos\dummy_photo.jpg" />
          <div class="content">
            <h3>Food Combo 3</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
            <a href="omsim.php" class="btn">Reserve</a>
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
            <a href="omsim.php" class="btn">Reserve</a>
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
            <a href="omsim.php" class="btn">Reserve</a>
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
            <a href="omsim.php" class="btn">Reserve</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>