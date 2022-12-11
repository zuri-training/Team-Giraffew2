<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Cardex Landing Page!</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      <header>
        <div class="main-header">
          <a class="logo" href="#home">
            <h1>Cardex</h1>
          </a>
          <nav>
            <ul class="nav-bar">
              <li><a class="nav-link active" href="#home">Home</a></li>
              <li><a class="nav-link" href="#">Library</a></li>
              <li><a class="nav-link" href="#">About us</a></li>
              <li><a class="nav-link" href="#">Contact Us</a></li>
  
            </ul>
  
          </nav>
          <div class="account">
            <ul>
              <li><a class="nav-link" href="login.php">Login</a></li>
              </li>
              <li class="stroke">|</li>
              <li><a id="su" class="nav-link" href="signup.php">Sign Up</a></li>
              </li>
            </ul>
          </div>
        </div>
        <div class="bg-img">
          <img src="images/bg-image.png" alt="">
        </div>
        <div class="caption">
          <p>Millions of choices <br> perfect for you</p>
          <div class="search-bar">
            <i id="i-search" class="ri-search-line"></i>
            <p>Search products</p>
            <i id="i-arrow" class="ri-arrow-right-line"></i>
  
          </div>
        </div>
  
      </header>
      <main id="home">
        <div class="explore-section">
          <div class="first-section">
            <p>Need credit card design inspiration?</p>
            <p>Explore our catalogue</p>
          </div>
          <div class="second-section">
            <div class="exp-img">
              <img src="images/exp-img3.png" alt="image">
            </div>
            <div class="exp-img">
              <img src="images/exp-img2.png" alt="image">
            </div>
            <div class="exp-img">
              <img src="images/exp-img1.png" alt="image">
            </div>
          </div>
          <div class="explore-section2">
            <img src="images/exp-img4.png" alt="image">
            <div class="sectionTwo-txt">
              <h5>Your credit card design
                can be EPIC.</h5>
              <p>Explore our curated lists of products and stores for more inspo. Find something to love in Cardex.</p>
              <button class="su-btn">Sing Up</button>
              <button class="download-btn">Download App</button>
            </div>
  
          </div>
          <div class="explore-section3">
            <div class="sectionThree-header">
              <h2>What our users say</h2>
            </div>
            <div id="all-testimonials">
              <div class="testimonial">
                <p>
                  I ve visited other websites that offers the same service of virtual cards,
                  but none of them can match up to the standard of design that Cardex gives 
                </p>
                <div class="name">
                  <p >Oge Chidindu</p>
                </div>
              </div>
              <div class="testimonial">
                <p>
                  I ve visited other websites that offers the same service of virtual cards,
                  but none of them can match up to the standard of design that Cardex gives 
                </p>
                <div class="name">
                  <p >Peter Sean</p>
                </div>
              </div>
              
            <div class="testimonial">
              <p>
                I ve visited other websites that offers the same service of virtual cards,
                but none of them can match up to the standard of design that Cardex gives
              </p>
              <div class="name">
                <p >Shola Olalekan</p>
              </div>
            </div>
            </div>
          </div>
      </main>
      <footer>
        <div class="cta"><h3>Join our News letter</h3></div>
        <div class="cta-form">
          <input class="form-one" type="text" id="email" placeholder="Email">
          <input class="join-btn" type="submit" value="Join">
        </div>
        <div>
          <ul class="footer-nav">
            <li><a class="nav-link" href="#"> Our Campaigns</a></li>
            <li><a class="nav-link" href="#">Privacy Poicy</a></li>
            <li><a class="nav-link" href="#">Orders & Payment</a></li>
            <li><a class="nav-link" href="#">FAQs</a></li>
          </ul>
          <ul class="footer-nav">
            <li><a class="nav-link" href="#">Contact Us</a></li>
            <li><a class="nav-link" href="#">Terms and Condition</a></li>
            <li><a class="nav-link" href="#">products Reviews</a></li>
            <li><a class="nav-link" href="#">Support</a></li>
          </ul>
        </div>
      </footer>
    </div>
    <!-- <a href="Team-Giraffew2/saved.html">saved</a> -->
    <script src="js/app.js"></script>
  </body>
</html>
