<!DOCTYPE html>
<html>

<head>
  <title>IWTracker | Home</title>
  <!-- ****** faviconit.com favicons ****** -->
  <link rel="shortcut icon" href="../images/favicon.ico">
  <link rel="icon" sizes="16x16 32x32 64x64" href="../images/favicon.ico">
  <link rel="icon" type="image/png" sizes="196x196" href="../images/favicon-192.png">
  <link rel="icon" type="image/png" sizes="160x160" href="../images/favicon-160.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../images/favicon-96.png">
  <link rel="icon" type="image/png" sizes="64x64" href="../images/favicon-64.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16.png">
  <link rel="apple-touch-icon" href="../images/favicon-57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../images/favicon-114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../images/favicon-72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../images/favicon-144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../images/favicon-60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../images/favicon-120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../images/favicon-76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../images/favicon-152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon-180.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="../images/favicon-144.png">
  <meta name="msapplication-config" content="../images/browserconfig.xml">
  <!-- ****** faviconit.com favicons ****** -->
  <link rel="stylesheet" href="CSS/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet" />
  <meta name="theme-color" content="#2f2f2f" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body id="body">
  <div class="container">
    <nav>
      <div id="navBar">
        <img src="images/menu.png" alt="menuButton" id="menuButton" onclick="menuToggle()" />
        <h3 id="title">IWTracker</h3>
        <!--<h3 id="team">By Christopher Selig & Marcus Toot</h3>-->
      </div>
    </nav>
    <div id="menuContainer">
      <div>
        <h1 class="menuText"><a href="index.php">Home</a></h1>
        <h1 class="menuText"><a href="closings.html">Closings</a></h1>
        <h1 class="menuText"><a href="forecast.html">Forecast</a></h1> 
        <h1 class="menuText"><a href="ourTeam.html">Our Team</a></h1>
        <h1 class="menuText"><a href="contact.html">Contact</a></h1>
        <h1 class="menuText"><a href="faq.html">FAQ</a></h1>
        <h5 class="menuText login"><a class="menuText login" href="login.php">Login</a></h1>
      </div>
    </div>
    <div id="main-container">
      <article>
        <div class="Article">
          <h1 id="main-Title">Website launch!</h1>
          <hr>
          <p id="mainArticleText">Welcome to IWTracker, this website was made to pull weather conditions from an
            external source and use them to make an approximation of the likeliness of your school delaying or closing
            on a specified day.
            We are made up of a very small team of 2 people and this project is being solely developed by us at the
            moment so if a feature on the website is broken please contact us and let us know what the issue is and we
            will attempt to fix it right
            away.
          </p>
        </div>
        <div class="Article">
          <h1 id="main-Title">Meet our team</h1>
          <hr>
          <p id="mainArticleText">
            Our team is currently made up of two people, Christopher Selig & Marcus Toot, if in the future we expand,
            we may bring more people onto the team to work on the website but for now I think you should learn a little
            more about the team. Follow this link to learn a little more about us: 
            <a href="ourTeam.html" style="text-decoration: none">Our Team</a>
          </p>
        </div>
      </article>
    </div>
  </div>
  </div>
  <script src="JS/titleScript.js"></script>
  <script src="JS/articles.js" onload="loadArticles()"></script>
</body>

</html>