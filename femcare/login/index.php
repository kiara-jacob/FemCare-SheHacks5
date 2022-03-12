<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FemCare</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a528595bc4.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="#home" id="navbar__logo">FemCare</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> 
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="#home" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__item">
            <a href="#about" class="navbar__links" id="about-page">About Us</a>
          </li>
          <li class="navbar__item">
            <a href="#services" class="navbar__links" id="services-page">Our Services</a>
          </li>
          <li class="navbar__btn">
            <a href="#sign-up" class="button" id="signup">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero" id="home">
      <div class="hero__container">
        <h1 class="hero__heading"> Accessible Healthcare for <span>all women</span></h1>
        <p class="hero__description"> Welcome, <?php echo $user_data['user_name']; ?></p>
        <button class="main__btn"><a href="#about">Explore</a></button>
      </div>
    </div>

    <!-- About Section -->
    <div class="main" id="about">
      <div class="main__container">
        <div class="main__img--container">
          <div class="main__img--card"><img src="images/logo.png"></div>
        </div>
        <div class="main__content">
          <h1>The Goal</h1>
          <h2>We aim to help all women meet their healthcare needs</h2>
          <p>Find out more about us</p>
          <button class="main__btn"><a href="about.html">Our Vision</a></button>
        </div>
      </div>
    </div>

    <!-- Services Section -->
    <div class="services" id="services">
      <h1>Our Services</h1>
      <div class="services__wrapper">
        <div class="services__card">
          <h2>Health Assistance</h2>
          <p>Ask our chatbot anything!</p>
          <div class="services__btn"><button class="main__btn"><a href="chatbot.html">Get Started</a></button></div>
        </div>
        <div class="services__card">
          <h2>Talk to a doctor</h2>
          <p>Connect with a doctor</p>
          <div class="services__btn"><button class="main__btn"><a href="doctor.html">Connect</a></button>
          </div>
        </div>
        <div class="services__card">
          <h2>Resources</h2>
          <p>Need more information?</p>
          <div class="services__btn"><button class="main__btn"><a href="resources.html">Find Resources</a></button></div>
        </div>
        <div class="services__card">
          <h2>Support Group</h2>
          <p>Connect with other women</p>
          <div class="services__btn"><button class="main__btn"><a href="forum.html">Our Forums</a></button></div>
        </div>
      </div>
    </div>

    <!-- Features Section -->
    <div class="main" id="sign-up">
      <div class="main__container">
        <div class="main__content">
          <h1>Our Community</h1>
          <h2>Connect with other women</h2>
          <p>You are not alone in your journey</p>
          <button class="main__btn"><a href="login.php">Join Us</a></button>
        </div>
        <div class="main__img--container">
          <div class="main__img--card" id="card-2"><i class="fa-solid fa-venus fa-10x"></i></div>
        </div>
      </div>
    </div>

    <!-- Footer Section -->
    <div class="footer__container">
      <div class="footer__links">
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a href="/" id="footer__logo">FEMCARE</a>
          </div>
          <p class="website__rights">© FEMCARE 2022. All rights reserved</p>
          <div class="social__icons">
            <a href="/" class="social__icon--link" target="_blank"
              ><i class="fab fa-facebook"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-instagram"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-youtube"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-linkedin"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-twitter"></i
            ></a>
          </div>
        </div>
      </section>
    </div>

    <script src="app.js"></script>
  </body>
</html>

