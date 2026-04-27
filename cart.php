<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sikatan Sikada Cafe — Menu</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=DM+Sans:wght@300;400;500;700&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
 
    :root {
      --bg: #181818;
      --surface: #222;
      --surface2: #2a2a2a;
      --text: #f5f0e8;
      --muted: #888;
      --accent: #e8b84b;
      --accent-light: #f5d484;
      --border: #333;
      --badge: #c0392b;
      --green: #27ae60;
    }
 
    body { font-family: 'DM Sans', sans-serif; background: var(--bg); color: var(--text); min-height: 100vh; }
 
    /* ─── HEADER ─── */
    header {
      position: sticky; top: 0; z-index: 200;
      background: #111; border-bottom: 2px solid var(--accent);
      display: flex; align-items: center; justify-content: space-between;
      padding: 0 2rem; height: 66px;
    }
    .logo-wrap { display: flex; align-items: center; gap: 0.65rem; }
    .logo-icon { width: 38px; height: 38px; background: var(--accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; }
    .logo-text { font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; letter-spacing: 0.06em; color: var(--accent); line-height: 1.1; }
    .logo-sub  { font-size: 0.6rem; font-weight: 400; letter-spacing: 0.16em; color: var(--muted); text-transform: uppercase; display: block; }
 
    .cart-btn {
      position: relative; background: var(--accent); color: #111;
      border: none; padding: 0.58rem 1.2rem;
      font-family: 'DM Sans', sans-serif; font-size: 0.83rem; font-weight: 700;
      letter-spacing: 0.05em; cursor: pointer; border-radius: 3px;
      display: flex; align-items: center; gap: 0.5rem; transition: background 0.2s;
    }
    .cart-btn:hover { background: var(--accent-light); }
    .cart-badge {
      background: var(--badge); color: #fff; font-size: 0.68rem; font-weight: 700;
      border-radius: 50%; width: 20px; height: 20px;
      display: flex; align-items: center; justify-content: center;
      position: absolute; top: -8px; right: -8px;
    }
    .cart-badge.pop { animation: pop 0.3s ease; }
    @keyframes pop { 0%{transform:scale(1)} 50%{transform:scale(1.65)} 100%{transform:scale(1)} }
 
    /* ─── HERO ─── */
    .hero {
      background: linear-gradient(135deg,#111 0%,#1d1303 100%);
      border-bottom: 2px solid var(--accent);
      padding: 3rem 2rem 2.5rem; text-align: center; position: relative; overflow: hidden;
    }
    .hero::before { content:''; position:absolute; inset:0; background: radial-gradient(ellipse at 50% 0%,rgba(232,184,75,.13) 0%,transparent 70%); }
    .hero-label { font-size: 0.7rem; font-weight: 500; letter-spacing: 0.22em; text-transform: uppercase; color: var(--accent); margin-bottom: 0.4rem; }
    .hero h1 { font-family:'Cormorant Garamond',serif; font-size: clamp(2rem,5vw,3.6rem); font-weight:700; color: var(--accent); letter-spacing:0.05em; line-height:1; }
    .hero p { margin-top:0.7rem; font-size:0.88rem; color:var(--muted); font-style:italic; max-width:500px; margin-left:auto; margin-right:auto; }
 
    /* ─── TABS ─── */
    .tabs-wrap {
      position: sticky; top: 66px; z-index: 100;
      background: #111; border-bottom: 1px solid var(--border);
      overflow-x: auto; scrollbar-width: none;
    }
    .tabs-wrap::-webkit-scrollbar { display: none; }
    .tabs { display: flex; padding: 0 1.5rem; white-space: nowrap; max-width: 1200px; margin: 0 auto; }
    .tab {
      background: none; border: none; padding: 0.88rem 1.1rem;
      font-family: 'DM Sans', sans-serif; font-size: 0.75rem; font-weight: 600;
      color: var(--muted); cursor: pointer;
      border-bottom: 2px solid transparent; margin-bottom: -1px;
      transition: color 0.2s, border-color 0.2s;
      letter-spacing: 0.07em; text-transform: uppercase; flex-shrink: 0;
    }
    .tab:hover { color: var(--text); }
    .tab.active { color: var(--accent); border-bottom-color: var(--accent); }
 
    /* ─── CONTENT AREA ─── */
    .content { max-width: 1200px; margin: 0 auto; padding: 1.5rem 1.5rem 6rem; }
 
    /* ─── SECTION HEADER ─── */
    .section-header {
      margin-bottom: 1.2rem; padding-bottom: 0.6rem;
      border-bottom: 2px solid var(--accent);
      display: flex; align-items: baseline; gap: 0.8rem;
    }
    .section-header h2 { font-family:'Cormorant Garamond',serif; font-size:1.7rem; font-weight:700; color:var(--accent); }
    .section-header span { font-size:0.75rem; color:var(--muted); letter-spacing:0.1em; text-transform:uppercase; }
 
    /* subsection label */
    .sub-label {
      grid-column: 1 / -1;
      font-size: 0.7rem; font-weight: 700; letter-spacing: 0.16em;
      text-transform: uppercase; color: var(--accent);
      background: rgba(232,184,75,.08); border-left: 3px solid var(--accent);
      padding: 0.4rem 0.8rem; margin-top: 0.4rem;
    }
 
    /* ─── GRID ─── */
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px,1fr));
      gap: 1.1rem;
      margin-bottom: 2.5rem;
    }
 
    /* ─── CARD ─── */
    .card {
      background: var(--surface); border: 1px solid var(--border); border-radius: 4px;
      display: flex; flex-direction: column;
      transition: box-shadow 0.2s, transform 0.2s, border-color 0.2s;
      animation: fadeUp 0.35s ease both; overflow: hidden;
    }
    .card:hover { box-shadow:0 6px 28px rgba(232,184,75,.1); transform:translateY(-3px); border-color:rgba(232,184,75,.35); }
    @keyframes fadeUp { from{opacity:0;transform:translateY(14px)} to{opacity:1;transform:translateY(0)} }
 
    .card-top { background:#111; height:76px; display:flex; align-items:center; justify-content:center; font-size:2.4rem; border-bottom:1px solid var(--border); }
    .card-body { padding:0.85rem 0.95rem 1rem; display:flex; flex-direction:column; flex:1; }
    .card-name { font-family:'Cormorant Garamond',serif; font-size:1.1rem; font-weight:600; line-height:1.3; margin-bottom:0.28rem; color:var(--text); }
    .card-desc { font-size:0.74rem; color:var(--muted); line-height:1.55; flex:1; margin-bottom:0.8rem; }
    .card-foot { display:flex; align-items:center; justify-content:space-between; gap:0.4rem; }
    .price { font-family:'Cormorant Garamond',serif; font-size:1.35rem; font-weight:700; color:var(--accent); }
    .save-badge { font-size:0.65rem; font-weight:700; color:#fff; background:var(--badge); padding:0.15rem 0.45rem; border-radius:2px; margin-left:0.3rem; }
 
    .add-btn {
      background:var(--accent); color:#111; border:none; padding:0.4rem 0.85rem;
      font-family:'DM Sans',sans-serif; font-size:0.74rem; font-weight:700;
      letter-spacing:0.04em; cursor:pointer; border-radius:2px;
      transition:background 0.2s,transform 0.1s; white-space:nowrap; flex-shrink:0;
    }
    .add-btn:hover { background:var(--accent-light); }
    .add-btn:active { transform:scale(0.95); }
    .add-btn.added { background:var(--green); color:#fff; }
 
    /* ─── BUNDLE CARD (wide) ─── */
    .bundle-card {
      background:var(--surface); border:1px solid var(--accent); border-radius:4px;
      padding:1.1rem 1.2rem 1.2rem; display:flex; flex-direction:column;
      animation:fadeUp 0.35s ease both;
      transition:box-shadow 0.2s,transform 0.2s;
    }
    .bundle-card:hover { box-shadow:0 6px 28px rgba(232,184,75,.15); transform:translateY(-2px); }
    .bundle-top { display:flex; align-items:flex-start; justify-content:space-between; gap:1rem; flex-wrap:wrap; margin-bottom:0.7rem; }
    .bundle-name { font-family:'Cormorant Garamond',serif; font-size:1.15rem; font-weight:700; color:var(--accent); }
    .bundle-pax { font-size:0.7rem; color:var(--muted); letter-spacing:0.1em; text-transform:uppercase; margin-top:0.15rem; }
    .bundle-price-wrap { text-align:right; flex-shrink:0; }
    .bundle-price { font-family:'Cormorant Garamond',serif; font-size:1.6rem; font-weight:700; color:var(--accent); }
    .bundle-save { font-size:0.7rem; color:var(--green); font-weight:600; }
    .bundle-includes { font-size:0.76rem; color:var(--muted); line-height:1.7; margin-bottom:0.9rem; }
    .bundle-includes span { color:var(--text); }
    .bundle-foot { display:flex; align-items:center; justify-content:flex-end; }
 
    /* ─── CART DRAWER ─── */
    .overlay { display:none; position:fixed; inset:0; background:rgba(0,0,0,.6); z-index:300; }
    .overlay.open { display:block; }
    .drawer {
      position:fixed; right:0; top:0; bottom:0; width:min(400px,100vw);
      background:#111; z-index:301; display:flex; flex-direction:column;
      transform:translateX(100%); transition:transform 0.32s cubic-bezier(.4,0,.2,1);
      border-left:2px solid var(--accent);
    }
    .drawer.open { transform:translateX(0); }
    .drawer-header { display:flex; align-items:center; justify-content:space-between; padding:1.2rem 1.5rem; border-bottom:1px solid var(--border); }
    .drawer-header h2 { font-family:'Cormorant Garamond',serif; font-size:1.45rem; font-weight:700; color:var(--accent); }
    .close-btn { background:none; border:none; font-size:1.3rem; cursor:pointer; color:var(--muted); transition:color 0.2s; }
    .close-btn:hover { color:var(--text); }
    .drawer-items { flex:1; overflow-y:auto; padding:0.9rem 1.4rem; }
    .empty-msg { text-align:center; color:var(--muted); font-size:0.9rem; margin-top:3rem; font-style:italic; }
    .drawer-item { display:flex; align-items:center; gap:0.75rem; padding:0.85rem 0; border-bottom:1px solid var(--border); animation:fadeUp 0.22s ease; }
    .di-emoji { font-size:1.7rem; width:38px; text-align:center; flex-shrink:0; }
    .di-info { flex:1; min-width:0; }
    .di-name { font-size:0.84rem; font-weight:500; color:var(--text); white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
    .di-price { font-size:0.78rem; color:var(--accent); font-weight:600; }
    .di-qty { display:flex; align-items:center; gap:0.35rem; margin-top:0.28rem; }
    .qty-btn { background:var(--surface2); border:1px solid var(--border); width:23px; height:23px; font-size:0.95rem; cursor:pointer; display:flex; align-items:center; justify-content:center; color:var(--text); transition:background 0.15s; font-weight:600; border-radius:2px; }
    .qty-btn:hover { background:var(--border); }
    .qty-val { font-size:0.84rem; font-weight:600; min-width:18px; text-align:center; color:var(--text); }
    .di-remove { background:none; border:none; color:var(--muted); cursor:pointer; font-size:0.7rem; transition:color 0.2s; flex-shrink:0; }
    .di-remove:hover { color:#e74c3c; }
    .drawer-footer { border-top:1px solid var(--border); padding:1.2rem 1.5rem; }
    .summary-row { display:flex; justify-content:space-between; font-size:0.82rem; color:var(--muted); margin-bottom:0.3rem; }
    .total-row { display:flex; justify-content:space-between; font-family:'Cormorant Garamond',serif; font-size:1.4rem; font-weight:700; color:var(--accent); margin-top:0.65rem; margin-bottom:1rem; }
    .checkout-btn { width:100%; background:var(--accent); color:#111; border:none; padding:0.88rem; font-family:'DM Sans',sans-serif; font-size:0.86rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; cursor:pointer; border-radius:2px; transition:background 0.2s; }
    .checkout-btn:hover { background:var(--accent-light); }
 
    @media(max-width:600px){
      header{padding:0 1rem;}
      .logo-text{font-size:1rem;}
      .hero{padding:2.2rem 1rem 1.8rem;}
      .content{padding:1rem 0.8rem 5rem;}
      .grid{grid-template-columns:repeat(auto-fill,minmax(200px,1fr)); gap:0.85rem;}
    }
  </style>
</head>
<body>
 
<!-- HEADER -->
<header>
  <div class="logo-wrap">
    <div class="logo-icon">🦗</div>
    <div>
      <div class="logo-text">SIKATAN SIKADA CAFE</div>
      <span class="logo-sub">EST. 2022 · Binangonan, Rizal</span>
    </div>
  </div>
  <button class="cart-btn" onclick="toggleCart()">
    🛒 My Order
    <span class="cart-badge" id="cartBadge">0</span>
  </button>
</header>
 
<!-- HERO -->
<section class="hero">
  <p class="hero-label">Solid Ka Dito</p>
  <h1>MERYENDA NA!</h1>
  <p>Masayang kwentuhan kapag kapartner ang PIKA-PIKA. Dito Espesyal Ka!</p>
</section>
 
<!-- TABS -->
<div class="tabs-wrap">
  <div class="tabs" id="tabs"></div>
</div>
 
<!-- CONTENT -->
<div class="content" id="content"></div>
 
<!-- OVERLAY + DRAWER -->
<div class="overlay" id="overlay" onclick="toggleCart()"></div>
<div class="drawer" id="drawer">
  <div class="drawer-header">
    <h2>🛒 Your Order</h2>
    <button class="close-btn" onclick="toggleCart()">✕</button>
  </div>
  <div class="drawer-items" id="drawerItems">
    <p class="empty-msg">Wala pa sa cart. Pumili ka na! 😄</p>
  </div>
  <div class="drawer-footer" id="drawerFooter" style="display:none">
    <div class="summary-row"><span>Items</span><span id="itemCount">0</span></div>
    <div class="total-row"><span>Total</span><span id="total">₱0.00</span></div>
    <button class="checkout-btn" onclick="handleCheckout()">PLACE ORDER</button>
  </div>
</div>
 
<script>
// ══════════════════════════════════════════════════════════
//  5 CATEGORIES — exact order specified by user
//  1. Bundle       (photo 2 — Salo-Salo Panalo)
//  2. Kasalo       (photo 4 — Kasalo Panalo)
//  3. Meryenda     (photo 1 — Meryenda Na!)
//  4. Pamatid Uhaw (photo 3 — beverages)
//  5. Solo         (photo 4 bottom — Solo Panalo)
// ══════════════════════════════════════════════════════════
 
const CATEGORIES = ["Bundle", "Kasalo", "Meryenda", "Pamatid Uhaw", "Solo"];
 
// ── BUNDLE (Photo 2: Salo-Salo Panalo + Soups + Drinks) ──
const bundleItems = [
  {
    id:80, group:"Pasikat Salo-Salo A", pax:"4–5 pax", emoji:"🛖",
    price:1699, save:205,
    includes:["Rice","Lechon Kawali","5-6 pcs Fried Chicken","1 pc Fried Tilapia","12 pcs Calamares","12 pcs half-cut Shanghai","1 pc Salted Egg","12 pcs Breaded Veggies"],
    promo: { price:2299, save:254, label:"+ Soup & Drinks" }
  },
  {
    id:82, group:"Pasikat Salo-Salo B", pax:"4–5 pax", emoji:"🛖",
    price:1899, save:205,
    includes:["Pancit","Lechon Kawali","5-6 pcs Fried Chicken","1 pc Fried Tilapia","12 pcs Calamares","12 pcs half-cut Shanghai","1 pc Salted Egg","12 pcs Breaded Veggies"],
    promo: { price:2499, save:255, label:"+ Soup & Drinks" }
  },
  {
    id:84, group:"Pasikat Salo-Salo C", pax:"8–12 pax", emoji:"🎊",
    price:3349, save:659,
    includes:["Rice","Lechon Kawali","5-6 pcs Fried Chicken","1 pc Fried Tilapia","12 pcs Calamares","12 pcs half-cut Shanghai","1 pc Salted Egg","12 pcs Breaded Veggies"],
    promo: { price:3949, save:708, label:"+ Soup & Drinks" }
  },
];
 
const bundleExtraItems = [
  // A la Carte Soup
  { id:90, sub:"A La Carte Soup", name:"Sinigang na Ribs",            price:450, emoji:"🍖", desc:"Classic sinigang in tamarind broth." },
  { id:91, sub:"A La Carte Soup", name:"Sinigang na Hipon",           price:450, emoji:"🦐", desc:"Shrimp sinigang sa sampalok." },
  { id:92, sub:"A La Carte Soup", name:"Belly Salmon Sinigang sa Miso",price:450, emoji:"🐟", desc:"Salmon belly in sour miso broth." },
  { id:93, sub:"A La Carte Soup", name:"Sinigang na Bagnet",          price:450, emoji:"🥓", desc:"Crispy bagnet sinigang." },
  // Drinks (bundle drinks)
  { id:94, sub:"Drinks", name:"1.5 Coke or Sprite",   price:199, emoji:"🥤", desc:"1.5L bottle." },
  { id:95, sub:"Drinks", name:"Ice Tea / Lemon Cucumber", price:199, emoji:"🧋", desc:"Pitcher." },
];
 
// ── KASALO (Photo 4: Kasalo Panalo — upper section) ──
const kasaloItems = [
  // Kasalo Pang 2-3
  { id:100, sub:"Kasalo · Pang 2–3",  name:"Kare-Kare w/ Lechon Kawali",      price:499, emoji:"🍛", desc:"Rich peanut sauce stew with crispy lechon kawali." },
  { id:101, sub:"Kasalo · Pang 2–3",  name:"Buttered Garlic Chicken",          price:399, emoji:"🍗", desc:"Chicken in buttery garlic sauce." },
  { id:102, sub:"Kasalo · Pang 2–3",  name:"Crispy Pata",                      price:850, emoji:"🦵", desc:"Deep-fried crispy pork knuckle." },
  { id:103, sub:"Kasalo · Pang 2–3",  name:"Pork Sisig",                       price:399, emoji:"🐷", desc:"Sizzling chopped pork sisig." },
  { id:104, sub:"Kasalo · Pang 2–3",  name:"Lechon Kawali Alacart",            price:399, emoji:"🥩", desc:"Crispy deep-fried pork belly." },
  { id:105, sub:"Kasalo · Pang 2–3",  name:"Fried Chicken (Whole) w/ Camote", price:699, emoji:"🍗", desc:"Whole fried chicken with camote." },
  { id:106, sub:"Kasalo · Pang 2–3",  name:"Adobong Itik sa Gata Alacart",    price:399, emoji:"🦆", desc:"Duck adobo cooked in coconut milk." },
  { id:107, sub:"Kasalo · Pang 2–3",  name:"Baby Back Ribs",                   price:550, emoji:"🍖", desc:"Tender slow-cooked baby back ribs." },
  // Sabaw-Sabaw Pang 2-3
  { id:110, sub:"Sabaw-Sabaw · Pang 2–3", name:"Bulalo",                       price:599, emoji:"🍲", desc:"Rich beef bone marrow soup." },
  { id:111, sub:"Sabaw-Sabaw · Pang 2–3", name:"Salmon Belly Sinigang sa Miso",price:450, emoji:"🐟", desc:"Salmon belly in sour miso broth." },
  { id:112, sub:"Sabaw-Sabaw · Pang 2–3", name:"Sinigang na Hipon",           price:450, emoji:"🦐", desc:"Shrimp in sour tamarind broth." },
  { id:113, sub:"Sabaw-Sabaw · Pang 2–3", name:"Sinigang na Bagnet",          price:450, emoji:"🥓", desc:"Crispy bagnet in tamarind broth." },
  { id:114, sub:"Sabaw-Sabaw · Pang 2–3", name:"Sinigang na Ribs",            price:450, emoji:"🍖", desc:"Pork ribs in sour tamarind broth." },
  // Lamang Dagat Pang 2-3
  { id:120, sub:"Lamang Dagat · Pang 2–3", name:"Fried Bangus (Whole)",       price:399, emoji:"🐠", desc:"Whole fried milkfish, crispy and golden." },
  { id:121, sub:"Lamang Dagat · Pang 2–3", name:"Pinaputok na Tilapia",       price:349, emoji:"🐟", desc:"Stuffed and grilled tilapia." },
  { id:122, sub:"Lamang Dagat · Pang 2–3", name:"Mix Seafood",                price:549, emoji:"🦞", desc:"Mixed seafood platter." },
  { id:123, sub:"Lamang Dagat · Pang 2–3", name:"Calamares",                  price:349, emoji:"🦑", desc:"Crispy fried calamari rings." },
  { id:124, sub:"Lamang Dagat · Pang 2–3", name:"Buttered Shrimp",            price:399, emoji:"🍤", desc:"Juicy shrimp in garlic butter sauce." },
  { id:125, sub:"Lamang Dagat · Pang 2–3", name:"Creamy Fish Fillet",         price:349, emoji:"🐡", desc:"Fish fillet in creamy white sauce." },
  // Ginulayan Pang 2-3
  { id:130, sub:"Ginulayan · Pang 2–3", name:"Pinakbet Klasik w/ Lechon Kawali", price:399, emoji:"🥬", desc:"Classic pinakbet with crispy lechon kawali." },
  { id:131, sub:"Ginulayan · Pang 2–3", name:"Chopsuey",                      price:399, emoji:"🥦", desc:"Mixed vegetables in oyster sauce." },
  { id:132, sub:"Ginulayan · Pang 2–3", name:"Ensaladang Talong",             price:199, emoji:"🍆", desc:"Grilled eggplant salad with tomato and egg." },
  // Kanin
  { id:140, sub:"Kanin",  name:"Plain Rice",              price:35,  emoji:"🍚", desc:"Steamed white rice." },
  { id:141, sub:"Kanin",  name:"Garlic Fried Rice",       price:50,  emoji:"🍚", desc:"Sinangag na kanin." },
  { id:142, sub:"Kanin",  name:"Platter Plain Rice",      price:199, emoji:"🍚", desc:"Platter of steamed rice for sharing." },
  { id:143, sub:"Kanin",  name:"Platter Garlic Fried Rice",price:249,emoji:"🍚", desc:"Platter of garlic fried rice for sharing." },
  { id:144, sub:"Kanin",  name:"Chowpan Rice",            price:299, emoji:"🍚", desc:"Special chowpan fried rice." },
];
 
// ── MERYENDA (Photo 1: all items) ──
const meryendaItems = [
  // Pika-Pika
  { id:200, sub:"Pika-Pika", name:"Sikatan Pika-Pika",              price:399, emoji:"🍽️", desc:"Hungarian Sausage, Fish Fillet, Chicharap, Cheesestick, Fries." },
  { id:201, sub:"Pika-Pika", name:"Overload Cheesy Beef Nachos",    price:249, emoji:"🧀", desc:"Nachos loaded with cheesy beef toppings." },
  { id:202, sub:"Pika-Pika", name:"Pork Shanghai Overload",         price:249, emoji:"🥢", desc:"Overload serving of crispy pork shanghai." },
  { id:203, sub:"Pika-Pika", name:"Overload Cheesy Beef Fries",     price:249, emoji:"🍟", desc:"Fries loaded with cheesy beef sauce." },
  { id:204, sub:"Pika-Pika", name:"Fries w/ Flavor",               price:139, emoji:"🍟", desc:"Choose: Cheese, BBQ, or Sour & Cream." },
  { id:205, sub:"Pika-Pika", name:"Regular Fries",                 price:119, emoji:"🍟", desc:"Classic golden crispy fries." },
  { id:206, sub:"Pika-Pika", name:"Cheesestick",                   price:199, emoji:"🧀", desc:"Golden-fried cheesesticks." },
  // Sandwiches
  { id:210, sub:"Sandwiches", name:"Clubhouse w/ Fries",           price:299, emoji:"🥪", desc:"Classic clubhouse sandwich with fries." },
  { id:211, sub:"Sandwiches", name:"Cheesy Hungarian",             price:169, emoji:"🌭", desc:"Hungarian sausage with melted cheese." },
  { id:212, sub:"Sandwiches", name:"Triple Cheese Quesadilla",     price:199, emoji:"🫓", desc:"Three-cheese loaded quesadilla." },
  { id:213, sub:"Sandwiches", name:"Beef Quesadilla",              price:249, emoji:"🫓", desc:"Beefy quesadilla with melted cheese." },
  // Croffle
  { id:220, sub:"Croffle", name:"Nutella Croffle",    price:189, emoji:"🧇", desc:"Crispy croissant waffle with Nutella." },
  { id:221, sub:"Croffle", name:"Biscoff Croffle",   price:199, emoji:"🧇", desc:"Croffle with Biscoff cookie butter." },
  { id:222, sub:"Croffle", name:"Oreo Beat Croffle", price:189, emoji:"🧇", desc:"Croffle with Oreo crumbles and cream." },
  // Waffle Pancake
  { id:230, sub:"Waffle Pancake", name:"Plain Waffle Pancake",          price:159, emoji:"🥞", desc:"Classic fluffy waffle pancake." },
  { id:231, sub:"Waffle Pancake", name:"Strawberry Pancake w/ Whip",    price:169, emoji:"🍓", desc:"Waffle pancake with strawberry and whipped cream." },
  { id:232, sub:"Waffle Pancake", name:"Blueberry Pancake w/ Whip",     price:169, emoji:"🫐", desc:"Waffle pancake with blueberry and whipped cream." },
  // Pizza
  { id:240, sub:"Pizza", name:"Mexican Thin Pizza", price:399, emoji:"🍕", desc:"Thin crust pizza with Mexican-style toppings." },
  { id:241, sub:"Pizza", name:"Supreme Pizza",      price:459, emoji:"🍕", desc:"Loaded supreme pizza with all the toppings." },
  { id:242, sub:"Pizza", name:"All Meat Pizza",     price:439, emoji:"🍖", desc:"Meat lover's pizza." },
  // Pasta
  { id:250, sub:"Pasta", name:"Pancit Canton / Bihon / Mix", price:399, emoji:"🍜", desc:"Kasalo, Pang 2-3. Choose your style." },
  { id:251, sub:"Pasta", name:"Pancit Habhab",               price:399, emoji:"🍜", desc:"Kasalo, Pang 2-3. Quezon-style pancit habhab." },
  { id:252, sub:"Pasta", name:"Carbonara",                   price:249, emoji:"🍝", desc:"Solo. Creamy pasta carbonara." },
  { id:253, sub:"Pasta", name:"Special Palabok",             price:179, emoji:"🍝", desc:"Solo. Classic Filipino palabok." },
  // Panghimagas
  { id:260, sub:"Panghimagas", name:"Leche Plan",      price:220, emoji:"🍮", desc:"Classic Filipino caramel custard." },
  { id:261, sub:"Panghimagas", name:"Creamy Halo-Halo",price:189, emoji:"🍧", desc:"Filipino shaved ice with creamy toppings." },
  { id:262, sub:"Panghimagas", name:"Mais con Yelo",   price:149, emoji:"🌽", desc:"Sweet corn with shaved ice and milk." },
  { id:263, sub:"Panghimagas", name:"Saging con Yelo", price:149, emoji:"🍌", desc:"Banana with shaved ice and milk." },
  { id:264, sub:"Panghimagas", name:"Coffee Jelly",    price:80,  emoji:"☕", desc:"Refreshing coffee jelly dessert." },
  // Meryenda Promo
  { id:270, sub:"Meryenda Promo", name:"Special Palabok + Creamy Halo-Halo", price:299, emoji:"🎉", desc:"Combo promo! Special Palabok + Creamy Halo-Halo." },
];
 
// ── PAMATID UHAW (Photo 3: all beverages) ──
const uhawItems = [
  // Beverage (Kasalo Mo)
  { id:300, sub:"Beverage · Kasalo Mo", name:"Iced Tea Pitcher",        price:199, emoji:"🧋", desc:"Pitcher of refreshing iced tea." },
  { id:301, sub:"Beverage · Kasalo Mo", name:"Red Tea Pitcher",         price:199, emoji:"🧋", desc:"Pitcher of red tea." },
  { id:302, sub:"Beverage · Kasalo Mo", name:"Lemon w/ Cucumber Pitcher",price:199, emoji:"🍋", desc:"Refreshing lemon cucumber pitcher." },
  { id:303, sub:"Beverage · Kasalo Mo", name:"Coke 1.5L",               price:199, emoji:"🥤", desc:"1.5L bottle of Coca-Cola." },
  { id:304, sub:"Beverage · Kasalo Mo", name:"Sprite 1.5L",             price:199, emoji:"🥤", desc:"1.5L bottle of Sprite." },
  // Solo Ko
  { id:305, sub:"Beverage · Solo Ko", name:"Coke in Can",             price:80, emoji:"🥤", desc:"Can of Coca-Cola." },
  { id:306, sub:"Beverage · Solo Ko", name:"Coke Zero in Can",        price:80, emoji:"🥤", desc:"Can of Coke Zero." },
  { id:307, sub:"Beverage · Solo Ko", name:"Pineapple in Can",        price:80, emoji:"🍍", desc:"Canned pineapple juice." },
  { id:308, sub:"Beverage · Solo Ko", name:"Bottle Water",            price:30, emoji:"💧", desc:"Mineral water." },
  // Fresh Lemon
  { id:309, sub:"Fresh Lemon · Solo Ko", name:"Fresh Lemon w/ Cucumber", price:129, emoji:"🍋", desc:"Fresh squeezed lemon with cucumber." },
  { id:310, sub:"Fresh Lemon · Solo Ko", name:"Fresh Lemon w/ Yacult",   price:129, emoji:"🍋", desc:"Fresh lemon with Yakult." },
  // Hot Brewed
  { id:311, sub:"Hot Brewed · Solo Ko", name:"Sagada / Arabica", price:109, emoji:"☕", desc:"Hot brewed coffee." },
  { id:312, sub:"Hot Brewed · Solo Ko", name:"Barako",           price:109, emoji:"☕", desc:"Strong Batangas barako coffee." },
  // Kape Moto! Espresso
  { id:320, sub:"Kape Moto! · Espresso", name:"Cafe Latte",             price:179, emoji:"☕", desc:"Hot ₱179 / Cold ₱199." },
  { id:321, sub:"Kape Moto! · Espresso", name:"Cappuccino",             price:179, emoji:"☕", desc:"Hot ₱179 / Cold ₱199." },
  { id:322, sub:"Kape Moto! · Espresso", name:"Spanish Latte",          price:179, emoji:"☕", desc:"Hot ₱179 / Cold ₱199." },
  { id:323, sub:"Kape Moto! · Espresso", name:"Salted Caramel Latte",   price:179, emoji:"☕", desc:"Hot ₱179 / Cold ₱199." },
  { id:324, sub:"Kape Moto! · Espresso", name:"Dirty Matcha Latte",     price:179, emoji:"🍵", desc:"Hot ₱179 / Cold ₱199." },
  { id:325, sub:"Kape Moto! · Espresso", name:"Caramel Macchiato",      price:179, emoji:"☕", desc:"Hot ₱179 / Cold ₱199." },
  { id:326, sub:"Kape Moto! · Espresso", name:"Mocha Latte",            price:179, emoji:"☕", desc:"Hot ₱179 / Cold ₱199." },
  { id:327, sub:"Kape Moto! · Espresso", name:"Milo Coffee Cream Latte",price:179, emoji:"☕", desc:"Hot ₱179 / Cold ₱199." },
  { id:328, sub:"Kape Moto! · Espresso", name:"Hazelnut Latte",         price:179, emoji:"☕", desc:"Hot ₱179 / Cold ₱199." },
  { id:329, sub:"Kape Moto! · Espresso", name:"Choco Hazel Nut",        price:179, emoji:"🍫", desc:"Hot ₱179 / Cold ₱199." },
  { id:330, sub:"Kape Moto! · Espresso", name:"Roasted Almond",         price:179, emoji:"☕", desc:"Hot ₱179 / Cold ₱199." },
  { id:331, sub:"Kape Moto! · Espresso", name:"Coffee Jelly Latte",     price:119, emoji:"☕", desc:"Hot ₱119 / Cold ₱139." },
  { id:332, sub:"Kape Moto! · Espresso", name:"Americano",              price:119, emoji:"☕", desc:"Hot ₱119 / Cold ₱139." },
  // Non-Coffee
  { id:340, sub:"Non-Coffee", name:"Classic Chocolate",  price:139, emoji:"🍫", desc:"Hot ₱139 / Cold ₱159." },
  { id:341, sub:"Non-Coffee", name:"Milk Chocolate",     price:139, emoji:"🍫", desc:"Hot ₱139 / Cold ₱159." },
  { id:342, sub:"Non-Coffee", name:"Matcha Latte",       price:139, emoji:"🍵", desc:"Hot ₱139 / Cold ₱159." },
  { id:343, sub:"Non-Coffee", name:"Milo Cream Latte",   price:139, emoji:"🥛", desc:"Hot ₱139 / Cold ₱159." },
  { id:344, sub:"Non-Coffee", name:"Oreo Milk",          price:159, emoji:"🥛", desc:"Solo Ko." },
  { id:345, sub:"Non-Coffee", name:"Strawberry Milk",    price:159, emoji:"🍓", desc:"Solo Ko." },
  { id:346, sub:"Non-Coffee", name:"Blueberry Milk",     price:159, emoji:"🫐", desc:"Solo Ko." },
  // Soda Series
  { id:350, sub:"Soda Series · Solo Ko", name:"Blueberry Soda",   price:149, emoji:"🥤", desc:"Soda Series." },
  { id:351, sub:"Soda Series · Solo Ko", name:"Green Apple Soda", price:149, emoji:"🍏", desc:"Soda Series." },
  { id:352, sub:"Soda Series · Solo Ko", name:"Lychee Soda",      price:149, emoji:"🍈", desc:"Soda Series." },
  { id:353, sub:"Soda Series · Solo Ko", name:"Four Season Soda", price:149, emoji:"🥤", desc:"Soda Series." },
  { id:354, sub:"Soda Series · Solo Ko", name:"Strawberry Soda",  price:149, emoji:"🍓", desc:"Soda Series." },
  // Tipsy Fruity Soda
  { id:355, sub:"Tipsy Fruity Soda · Solo Ko (w/ Alcohol)", name:"Blueberry Tipsy Soda",   price:179, emoji:"🍹", desc:"With Alcohol." },
  { id:356, sub:"Tipsy Fruity Soda · Solo Ko (w/ Alcohol)", name:"Green Apple Tipsy Soda", price:179, emoji:"🍹", desc:"With Alcohol." },
  { id:357, sub:"Tipsy Fruity Soda · Solo Ko (w/ Alcohol)", name:"Lychee Tipsy Soda",      price:179, emoji:"🍹", desc:"With Alcohol." },
  { id:358, sub:"Tipsy Fruity Soda · Solo Ko (w/ Alcohol)", name:"Four Season Tipsy Soda", price:179, emoji:"🍹", desc:"With Alcohol." },
  { id:359, sub:"Tipsy Fruity Soda · Solo Ko (w/ Alcohol)", name:"Strawberry Tipsy Soda",  price:179, emoji:"🍹", desc:"With Alcohol." },
  // Milktea
  { id:360, sub:"Milktea · Solo Ko", name:"Dark Choco Milktea",     price:159, emoji:"🧋", desc:"Milktea Series." },
  { id:361, sub:"Milktea · Solo Ko", name:"Cookies & Cream Milktea",price:159, emoji:"🧋", desc:"Milktea Series." },
  { id:362, sub:"Milktea · Solo Ko", name:"Matcha Milktea",         price:159, emoji:"🍵", desc:"Milktea Series." },
  { id:363, sub:"Milktea · Solo Ko", name:"Okinawa Milktea",        price:159, emoji:"🧋", desc:"Milktea Series." },
  { id:364, sub:"Milktea · Solo Ko", name:"Wintermelon Milktea",    price:159, emoji:"🧋", desc:"Milktea Series." },
  // Ripe Milkshake
  { id:370, sub:"Ripe Milkshake · Solo Ko", name:"Ripe Mango Shake",  price:199, emoji:"🥭", desc:"Ripe Milkshake Series." },
  { id:371, sub:"Ripe Milkshake · Solo Ko", name:"Mango Graham Shake",price:179, emoji:"🥭", desc:"Ripe Milkshake Series." },
  { id:372, sub:"Ripe Milkshake · Solo Ko", name:"Buko Shake",        price:179, emoji:"🥥", desc:"Ripe Milkshake Series." },
  // Frappe
  { id:380, sub:"Frappe · Solo Ko", name:"Dark Choco Frappe",       price:189, emoji:"🥤", desc:"Blended frappe." },
  { id:381, sub:"Frappe · Solo Ko", name:"Matcha Frappe",           price:189, emoji:"🍵", desc:"Blended frappe." },
  { id:382, sub:"Frappe · Solo Ko", name:"Java Chips Frappe",       price:189, emoji:"🥤", desc:"Blended frappe." },
  { id:383, sub:"Frappe · Solo Ko", name:"Strawberry Frappe",       price:189, emoji:"🍓", desc:"Blended frappe." },
  { id:384, sub:"Frappe · Solo Ko", name:"Salted Caramel Frappe",   price:189, emoji:"🥤", desc:"Blended frappe." },
  { id:385, sub:"Frappe · Solo Ko", name:"Caramel Macchiato Frappe",price:189, emoji:"🥤", desc:"Blended frappe." },
  { id:386, sub:"Frappe · Solo Ko", name:"Oreo Cheesecake Frappe",  price:189, emoji:"🍪", desc:"Blended frappe." },
];
 
// ── SOLO (Photo 4 bottom: Solo Panalo — All Day Breakfast) ──
const soloItems = [
  // Combo Solo
  { id:400, sub:"Combo Solo", name:"Mix All Budbod",        price:249, emoji:"🍳", desc:"Garlic Fried Rice + Beef Tapa, Pork Tapa, Chicken Tapa, Shanghai, Scrambled Egg, Veggies." },
  // Solo w/ Garlic Fried Rice
  { id:401, sub:"Solo · w/ Garlic Fried Rice", name:"Beef Tapa w/ Egg",              price:249, emoji:"🥩", desc:"Garlic Fried Rice + Beef Tapa + Egg." },
  { id:402, sub:"Solo · w/ Garlic Fried Rice", name:"Lechon Kawali w/ Egg",          price:239, emoji:"🥓", desc:"Garlic Fried Rice + Lechon Kawali + Egg." },
  { id:403, sub:"Solo · w/ Garlic Fried Rice", name:"Fried Chicken w/ Egg",          price:229, emoji:"🍗", desc:"Garlic Fried Rice + Fried Chicken + Egg." },
  { id:404, sub:"Solo · w/ Garlic Fried Rice", name:"Lucban Longganisa w/ Egg",      price:229, emoji:"🌭", desc:"Garlic Fried Rice + Lucban Longganisa + Egg." },
  { id:405, sub:"Solo · w/ Garlic Fried Rice", name:"Tuguegarao Longganisa w/ Egg",  price:229, emoji:"🌭", desc:"Garlic Fried Rice + Tuguegarao Longganisa + Egg." },
  { id:406, sub:"Solo · w/ Garlic Fried Rice", name:"Adobong Itik w/ Egg",           price:249, emoji:"🦆", desc:"Garlic Fried Rice + Adobong Itik + Egg." },
  { id:407, sub:"Solo · w/ Garlic Fried Rice", name:"Fried Bangus w/ Egg Plant & Egg",price:249,emoji:"🐠", desc:"Garlic Fried Rice + Fried Bangus + Eggplant + Egg." },
  { id:408, sub:"Solo · w/ Garlic Fried Rice", name:"Boneless Chicken w/ Egg",       price:249, emoji:"🍗", desc:"Garlic Fried Rice + Boneless Chicken + Egg." },
];
 
// ══════════════════════════════════════════════════════════
//  CART
// ══════════════════════════════════════════════════════════
let cart = {};
let activeTab = "Bundle";
 
// ══════════════════════════════════════════════════════════
//  BUILD TABS
// ══════════════════════════════════════════════════════════
const tabsEl = document.getElementById("tabs");
CATEGORIES.forEach(cat => {
  const btn = document.createElement("button");
  btn.className = "tab" + (cat === activeTab ? " active" : "");
  btn.textContent = cat;
  btn.onclick = () => {
    activeTab = cat;
    tabsEl.querySelectorAll(".tab").forEach(b => b.classList.remove("active"));
    btn.classList.add("active");
    renderContent();
    document.getElementById("content").scrollIntoView({ behavior:"smooth", block:"start" });
  };
  tabsEl.appendChild(btn);
});
 
// ══════════════════════════════════════════════════════════
//  RENDER
// ══════════════════════════════════════════════════════════
function renderContent() {
  const el = document.getElementById("content");
  el.innerHTML = "";
 
  if (activeTab === "Bundle")       renderBundle(el);
  else if (activeTab === "Kasalo")  renderGrouped(el, "Kasalo Panalo", kasaloItems);
  else if (activeTab === "Meryenda")renderGrouped(el, "Meryenda Na!", meryendaItems);
  else if (activeTab === "Pamatid Uhaw") renderGrouped(el, "Pamatid Uhaw", uhawItems);
  else if (activeTab === "Solo")    renderGrouped(el, "Solo Panalo · All Day Breakfast", soloItems);
}
 
// ─── BUNDLE SECTION ───
function renderBundle(el) {
  // Header
  const hdr = document.createElement("div");
  hdr.className = "section-header";
  hdr.innerHTML = `<h2>Salo-Salo Panalo</h2><span>Bundle Packages</span>`;
  el.appendChild(hdr);
 
  // Big bundle cards grid
  const grid = document.createElement("div");
  grid.className = "grid";
  grid.style.gridTemplateColumns = "repeat(auto-fill,minmax(300px,1fr))";
 
  bundleItems.forEach((b, i) => {
    // Base card
    const card = document.createElement("div");
    card.className = "bundle-card";
    card.style.animationDelay = `${i*0.06}s`;
    card.innerHTML = `
      <div class="bundle-top">
        <div>
          <div class="bundle-name">${b.emoji} ${b.group}</div>
          <div class="bundle-pax">${b.pax}</div>
        </div>
        <div class="bundle-price-wrap">
          <div class="bundle-price">₱${b.price.toFixed(2)}</div>
          <div class="bundle-save">Save ₱${b.save}</div>
        </div>
      </div>
      <div class="bundle-includes">${b.includes.map(x=>`<span>✦ ${x}</span>`).join("<br>")}</div>
      <div class="bundle-foot">
        <button class="add-btn${cart[b.id]?' added':''}" id="addBtn-${b.id}" onclick="addToCart(${b.id},'${b.group}',${b.price},'${b.emoji}')">
          ${cart[b.id]?`✓ (${cart[b.id].qty})`:'+ Add'}
        </button>
      </div>`;
    grid.appendChild(card);
 
    // Promo card
    const pid = b.id + 500;
    const promoCard = document.createElement("div");
    promoCard.className = "bundle-card";
    promoCard.style.animationDelay = `${i*0.06+0.04}s`;
    promoCard.style.borderColor = "rgba(232,184,75,0.5)";
    promoCard.innerHTML = `
      <div class="bundle-top">
        <div>
          <div class="bundle-name">🎁 ${b.group} <span style="font-size:.8rem;color:var(--accent-light)">${b.promo.label}</span></div>
          <div class="bundle-pax">${b.pax} · Special Promo</div>
        </div>
        <div class="bundle-price-wrap">
          <div class="bundle-price">₱${b.promo.price.toFixed(2)}</div>
          <div class="bundle-save">Save ₱${b.promo.save}</div>
        </div>
      </div>
      <div class="bundle-includes">${b.includes.map(x=>`<span>✦ ${x}</span>`).join("<br>")}<br><span style="color:var(--accent)">✦ Soup + Drinks</span></div>
      <div class="bundle-foot">
        <button class="add-btn${cart[pid]?' added':''}" id="addBtn-${pid}" onclick="addToCart(${pid},'${b.group} ${b.promo.label}',${b.promo.price},'🎁')">
          ${cart[pid]?`✓ (${cart[pid].qty})`:'+ Add'}
        </button>
      </div>`;
    grid.appendChild(promoCard);
  });
 
  el.appendChild(grid);
 
  // A la Carte Soup & Drinks
  renderGrouped(el, "A La Carte Add-ons", bundleExtraItems, true);
}
 
// ─── GROUPED SECTION ───
function renderGrouped(el, title, items, skipHeader = false) {
  if (!skipHeader) {
    const hdr = document.createElement("div");
    hdr.className = "section-header";
    hdr.innerHTML = `<h2>${title}</h2>`;
    el.appendChild(hdr);
  } else {
    const hdr = document.createElement("div");
    hdr.className = "section-header";
    hdr.style.marginTop = "1.5rem";
    hdr.innerHTML = `<h2>${title}</h2>`;
    el.appendChild(hdr);
  }
 
  // Group by sub
  const grouped = {};
  items.forEach(item => {
    if (!grouped[item.sub]) grouped[item.sub] = [];
    grouped[item.sub].push(item);
  });
 
  Object.entries(grouped).forEach(([sub, subItems]) => {
    const grid = document.createElement("div");
    grid.className = "grid";
 
    const subLbl = document.createElement("div");
    subLbl.className = "sub-label";
    subLbl.textContent = sub;
    grid.appendChild(subLbl);
 
    subItems.forEach((item, idx) => {
      const inCart = cart[item.id];
      const card = document.createElement("div");
      card.className = "card";
      card.style.animationDelay = `${Math.min(idx*0.04,0.35)}s`;
      card.innerHTML = `
        <div class="card-top">${item.emoji}</div>
        <div class="card-body">
          <div class="card-name">${item.name}</div>
          <div class="card-desc">${item.desc}</div>
          <div class="card-foot">
            <span class="price">₱${item.price.toFixed(2)}</span>
            <button class="add-btn${inCart?' added':''}" id="addBtn-${item.id}"
              onclick="addToCart(${item.id},'${item.name.replace(/'/g,"\\'")}',${item.price},'${item.emoji}')">
              ${inCart?`✓ (${inCart.qty})`:'+ Add'}
            </button>
          </div>
        </div>`;
      grid.appendChild(card);
    });
 
    el.appendChild(grid);
  });
}
 
// ══════════════════════════════════════════════════════════
//  CART LOGIC
// ══════════════════════════════════════════════════════════
function addToCart(id, name, price, emoji) {
  if (cart[id]) cart[id].qty++;
  else cart[id] = { id, name, price, emoji, qty: 1 };
  updateBadge();
  renderContent();
  renderDrawer();
}
 
function changeQty(id, delta) {
  if (!cart[id]) return;
  cart[id].qty += delta;
  if (cart[id].qty <= 0) delete cart[id];
  updateBadge(); renderContent(); renderDrawer();
}
 
function removeItem(id) {
  delete cart[id];
  updateBadge(); renderContent(); renderDrawer();
}
 
function updateBadge() {
  const count = Object.values(cart).reduce((s,c) => s + c.qty, 0);
  const badge = document.getElementById("cartBadge");
  badge.textContent = count;
  badge.classList.remove("pop");
  void badge.offsetWidth;
  badge.classList.add("pop");
}
 
function renderDrawer() {
  const container = document.getElementById("drawerItems");
  const footer = document.getElementById("drawerFooter");
  const items = Object.values(cart);
 
  if (items.length === 0) {
    container.innerHTML = `<p class="empty-msg">Wala pa sa cart. Pumili ka na! 😄</p>`;
    footer.style.display = "none";
    return;
  }
 
  footer.style.display = "block";
  container.innerHTML = "";
  items.forEach(({ id, name, price, emoji, qty }) => {
    const div = document.createElement("div");
    div.className = "drawer-item";
    div.innerHTML = `
      <div class="di-emoji">${emoji}</div>
      <div class="di-info">
        <div class="di-name">${name}</div>
        <div class="di-price">₱${(price * qty).toFixed(2)}</div>
        <div class="di-qty">
          <button class="qty-btn" onclick="changeQty(${id},-1)">−</button>
          <span class="qty-val">${qty}</span>
          <button class="qty-btn" onclick="changeQty(${id},1)">+</button>
        </div>
      </div>
      <button class="di-remove" onclick="removeItem(${id})">✕</button>`;
    container.appendChild(div);
  });
 
  const total = items.reduce((s,c) => s + c.price * c.qty, 0);
  const count = items.reduce((s,c) => s + c.qty, 0);
  document.getElementById("itemCount").textContent = `${count} item(s)`;
  document.getElementById("total").textContent = `₱${total.toFixed(2)}`;
}
 
function toggleCart() {
  document.getElementById("drawer").classList.toggle("open");
  document.getElementById("overlay").classList.toggle("open");
}
 
// ── CONNECT YOUR BACKEND HERE ──
function handleCheckout() {
  const orderPayload = Object.values(cart).map(({ id, name, price, qty }) => ({
    id, name, price, qty, subtotal: price * qty
  }));
  console.log("📦 ORDER PAYLOAD:", orderPayload);
 
  // fetch('/api/orders', {
  //   method:'POST',
  //   headers:{'Content-Type':'application/json'},
  //   body: JSON.stringify({ items: orderPayload })
  // }).then(r=>r.json()).then(d=>{ window.location.href=`/checkout/${d.orderId}`; });
 
  alert(`✅ Order placed!\n${orderPayload.length} item(s). Check console for payload.`);
}
 
// INIT
renderContent();
</script>
</body>
</html>