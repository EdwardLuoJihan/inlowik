<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/queries.css">
  <link rel="icon" href="images/logo.png"></link>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/609ade8089.js"></script>
  <script src="index.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
  <title>Inlowik</title>
</head>
<body id="body">
  <div class="loader" id="loader">
  <img src="images/logo.png" alt="" class="loading-logo">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
  </div>
  <!-- <div class="navbar">
    <div class="logo_container">
      <img src="images/logo.png" alt="" class="logo" onclick="home('home')" style="cursor:pointer">
      <span onclick="home('home')" style="cursor:pointer">Inlowik</span>
    </div>
    <div class="links">
      <a onclick="about('home')" class="navbar_link">
        <span>About</span>
      </a>
      <a onclick="projects('home')" class="navbar_link">
      <span>Projects</span>
      </a>
      <a onclick="contact('home')" class="navbar_link">
      <span>Contact</span>
      </a>
    </div>
  </div> -->
  <div class="main_content">
    <div class="title">
      <h1 id="intro">Hey! <span id="emoji">👋</span> I'm</h1>
      <h2 id="name">inlowik</h2>
      <h3 id="bio">A <span id="age"></span> year old programmer from Canada 🍁<br><br>I love playing <span class="val">Valorant</span>, <span class="cat">cats</span>, and anything related to <span class="python">programming</span>.</h3>
      <div class="social_icons" id="icons">
        <a title="Github" href="https://github.com/EdwardLuoJihan" target="_blank"><span>Github</span></a>
        <a title="Instagram" href="https://www.instagram.com/inlowik/" target="_blank"><span>Instagram</span></a>
        <a title="Gmail" href="https://mail.google.com/mail/u/0/?fs=1&to=inlowik@gmail.com&tf=cm" target="_blank"><span>Google</span></a>
      </div>
    </div>
  </div>
  <!-- <div class="loading_cont">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" id="Loader">
      <defs>
        <filter id="goo">
          <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
          <feBlend in2="goo" in="SourceGraphic" result="mix" />
        </filter>
        <linearGradient id="MyGradient">
            <stop offset="3%"  stop-color="#ff3e3e"/>
            <stop offset="60%" stop-color="#ff7a7a"/>
            <stop offset="100%" stop-color="#ff5757"/>
        </linearGradient>
      </defs>
      <mask id="maska">
        <g class="blobs">
          <circle class="blob" cx="440" cy="250" r="30" transform="rotate(0) translate(0, 0) rotate(0)"/>
          <circle class="blob" cx="500" cy="320" r="70"  transform="rotate(0) translate(0, 0) rotate(0)"/>
          <circle class="blob" cx="300" cy="390" r="40"  transform="rotate(0) translate(0, 0) rotate(0)"/>
          <circle class="blob" cx="380" cy="390" r="80"  transform="rotate(0) translate(0, 0) rotate(0)"/>
          <circle class="blob" cx="470" cy="450" r="20"  transform="rotate(0) translate(0, 0) rotate(0)"/>
        </g>
      </mask>
      <rect x="200" y="200"  mask="url(#maska)" fill="url(#MyGradient)" width="400" height="400">
    </svg>  
  </div> -->
  <div class="background"></div>
  <script>
    AOS.init();
    var radius = 8;
    TweenMax.staggerFromTo('.blob', 4 ,{
      cycle: {
        attr:function(i) {
          var r = i*90;
          return {
            transform:'rotate('+r+') translate('+radius+',0.1) rotate('+(-r)+')'
          }      
        }
      }  
    },{
      cycle: {
        attr:function(i) {
          var r = i*90+360;
          return {
            transform:'rotate('+r+') translate('+radius+',0.1) rotate('+(-r)+')'
          }      
        }
      },
      ease:Linear.easeNone,
      repeat:-1
    });
  </script>
</body>
</html>

<?php echo ''; ?>