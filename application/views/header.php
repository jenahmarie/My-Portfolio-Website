<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>My Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #000;
      color: #fff;
			overflow-x: hidden; /* ✅ prevent horizontal scroll */
    }

    /* NAVBAR STYLES */
    .navbar {
      background: black;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 0 15px rgba(255, 105, 180, 0.8);
      position: relative;
      z-index: 10;
    }

    .navbar .logo {
      font-size: 20px;
      font-weight: bold;
      color: #ff69b4;
      text-shadow: 0 0 10px #ff69b4;
    }

    .navbar ul {
      list-style: none;
      display: flex;
    }

    .navbar ul li {
      margin: 0 15px;
    }

    .navbar ul li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    .navbar ul li a:hover {
      color: #ff69b4;
      text-shadow: 0 0 10px #ff69b4;
    }

    /* HAMBURGER MENU (MOBILE) */
    .hamburger {
      display: none;
      font-size: 24px;
      color: white;
      cursor: pointer;
    }

		@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    align-items: flex-start;
  }

  .navbar ul {
  flex-direction: column;
  width: 100vw;          /* ✅ Use viewport width to prevent overflow */
  max-width: 100vw;      /* ✅ Prevent extra width from children */
  overflow-x: hidden;    /* ✅ Hide any accidental horizontal overflow */
  display: none;
  padding: 20px 0;
  box-shadow: 0 10px 15px rgba(255, 105, 180, 0.2);
  position: static;      /* ✅ Keep static unless you’re toggling visibility */
  background-color: black;
}


  .navbar ul.active {
    display: flex;
  }

  .navbar ul li {
    margin: 10px 0;
    text-align: center;
    width: 100%;
  }

  .hamburger {
    display: block;
    align-self: flex-end;
  }
}


    /* BUBBLES */
    .bubble {
  position: absolute;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 50%;
  pointer-events: none;
  animation: floatRandom 12s infinite ease-in-out;
}

@keyframes floatRandom {
  0% {
    transform: translate(0, 0);
    opacity: 1;
  }
  25% {
    transform: translate(30px, -50px);
  }
  50% {
    transform: translate(-20px, -30px);
  }
  75% {
    transform: translate(20px, 50px);
  }
  100% {
    transform: translate(0, 0);
    opacity: 0.9;
  }
}

  </style>
</head>
<body>
  <div class="bubbles"></div>

  <div class="navbar">
    <div class="logo">My Portfolio</div>

    <!-- Hamburger Icon -->
    <div class="hamburger" onclick="toggleMenu()">
      <i class="fas fa-bars"></i>
    </div>

    <!-- Navigation Links -->
    <ul id="navLinks">
      <li><a href="<?php echo base_url('index.php/home'); ?>">Home</a></li>
      <li><a href="<?php echo base_url('index.php/about_me'); ?>">About</a></li>
      <li><a href="<?php echo base_url('index.php/skills'); ?>">Skills</a></li>
      <li><a href="<?php echo base_url('index.php/portfolio'); ?>">Portfolio</a></li>
      <li><a href="<?php echo base_url('index.php/contact'); ?>">Contact</a></li>
    </ul>
  </div>

	<script>
  function toggleMenu() {
    const navLinks = document.getElementById("navLinks");
    navLinks.classList.toggle("active");
  }
</script>



	<script>
  const bubbleCount = 25; // Number of bubbles
  const bubbleContainer = document.querySelector(".bubbles");

  for (let i = 0; i < bubbleCount; i++) {
    const bubble = document.createElement("div");
    bubble.classList.add("bubble");

    const size = Math.random() * 60 + 20;
    bubble.style.width = `${size}px`;
    bubble.style.height = `${size}px`;
    bubble.style.left = `${Math.random() * 100}%`;
    bubble.style.top = `${Math.random() * 100}%`;
    bubble.style.animationDuration = `${Math.random() * 10 + 10}s`;
    bubble.style.animationDelay = `${Math.random() * 5}s`;

    bubbleContainer.appendChild(bubble);
  }
</script>

</script>

</body>
</html>
