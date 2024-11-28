<html>
 <head>
  <title>
   DiamondiaStore
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css">
  <script>
    function handleClick(gameName) {
    const button = document.querySelector(`button[onclick*="${gameName}"]`);
    button.style.transition = "transform 0.1s ease, box-shadow 0.1s ease";
    button.style.transform = "scale(0.95)";
    setTimeout(() => {
        button.style.transform = "scale(1)";
    }, 150);
}

</script>
 </head>
 <body>
  <div class="navbar">
   <div class="logo">
    <img alt="DiamondiaStore logo" height="300" src="Screenshot_2024-11-07_230404-removebg-preview.png" width="75"/>
   </div>
   <div class="menu">
    <a href="">
     Home
    </a>
    <a href="">
    About
    </a>
    <a href="">
     <i class="fas fa-sign-in-alt">
     </i>
     Login
    </a>
   </div>
  </div>
  <div class="banner">
   <img alt="Topup Game Cepat Dan Murah" height="400" src="Screenshot_2024-11-07_230404-removebg-preview.png" width="100"/>
  </div>
  <div class="best-seller">
   <h2>
    <i class="fas fa-star" style="color: #ff69b4;">
    </i>
    Best Seller
   </h2>
   <div class="products">
   <a href="pembayaran.php">
    <button class="product" onclick="handleClick('Mobile Legends')">
        <img src="image-removebg-preview (26).png" alt="Mobile Legends" width="100" height="100">
        <p>Otomatis</p>
        <p>Mobile Legends</p>
        </a>
    </button>
    <button class="product" onclick="handleClick('Weekly Diamonds Pass')">
        <img src="image-removebg-preview (27).png" alt="Weekly Diamonds Pass" width="100" height="100">
        <p>Otomatis</p>
        <p>Weekly Diamonds Pass</p>
    </button>
    <button class="product" onclick="handleClick('Valorant')">
        <img src="image-removebg-preview (28).png" alt="Valorant" width="100" height="100">
        <p>Otomatis</p>
        <p>Valorant</p>
    </button>
    <button class="product" onclick="handleClick('Free Fire')">
        <img src="image-removebg-preview (29).png" alt="Free Fire" width="100" height="100">
        <p>Otomatis</p>
        <p>Free Fire</p>
    </button>
    <button class="product" onclick="handleClick('PUBG Mobile')">
        <img src="image-removebg-preview (30).png" alt="PUBG Mobile" width="100" height="100">
        <p>Otomatis</p>
        <p>PUBG Mobile</p>
    </button>
    <button class="product" onclick="handleClick('Honor Of Kings')">
        <img src="image-removebg-preview (31).png" alt="Honor Of Kings" width="100" height="100">
        <p>Otomatis</p>
        <p>Honor Of Kings</p>
    </button>
    </div>
  </div>
 </body>
</html>
