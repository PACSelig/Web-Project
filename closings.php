<!DOCTYPE html>
<html>

<head>
  <title>IWTracker | Home</title>
  <!-- ****** faviconit.com favicons ****** -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
  <link rel="icon" type="image/png" sizes="196x196" href="/favicon-192.png">
  <link rel="icon" type="image/png" sizes="160x160" href="/favicon-160.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">
  <link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
  <link rel="apple-touch-icon" href="/favicon-57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/favicon-60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/favicon-180.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="/favicon-144.png">
  <meta name="msapplication-config" content="/browserconfig.xml">
  <!-- ****** faviconit.com favicons ****** -->
  <link rel="stylesheet" href="CSS/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400i" rel="stylesheet" />
  <meta name="theme-color" content="#2f2f2f" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body id="body">
  <div class="container">
    <nav>
      <div id="navBar">
        <img src="images/menu.png" alt="menuButton" id="menuButton" onclick="menuToggle()" />
        <h3 id="title">IWTracker</h3>
      </div>
    </nav>
    <div id="menuContainer">
      <div>
        <h1 class="menuText"><a href="index.php">Home</a></h1>
        <h1 class="menuText"><a href="closings.php">Closings</a></h1>
        <h1 class="menuText"><a href="forecast.html">Forecast</a></h1> 
        <h1 class="menuText"><a href="ourTeam.html">Our Team</a></h1>
        <h1 class="menuText"><a href="contact.html">Contact</a></h1>
        <h1 class="menuText"><a href="faq.html">FAQ</a></h1>
        <h5 class="menuText login"><a class="menuText login" href="login.php">Login</a></h1>
      </div>
    </div>
    <div id="main-container">
      <article>
        <iframe class="iframe vendor-embed-iframe" id="shortcode_iframe" width="770" height="672px" src="https://newcdn.tribtv.com/wnep/closings/school.html" frameborder="0" scrolling="yes"></iframe>
      </article>
    </div>
  </div>
  <script src="JS/titleScript.js"></script>
</body>

</html>
