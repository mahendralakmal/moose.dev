<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>moose clothing company</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="./font-awesome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Varela+Round" />
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</head>
<body>

  <?php
  include ('./nav.php'); 
  ?>

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="./images/background1.jpg"> <!-- random image -->
        <div class="caption center-align pink-text">
          <h3>This is our big Tagline!</h3>
          <h5 class="light pink-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="./images/girl-3.jpg"> <!-- random image -->
        <div class="caption left-align green-text">
          <h3>Left Aligned Caption</h3>
          <h5 class="light green-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="./women/girl-frontcrawl.jpg"> <!-- random image -->
        <div class="caption right-align yellow-text">
          <h3>Right Aligned Caption</h3>
          <h5 class="light yellow-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="./men/1.jpg"> <!-- random image -->
        <div class="caption left-align blue-text">
          <h3>Right Aligned Caption</h3>
          <h5 class="light blue-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row shop">
        <div class="col s12 m6">
          <div>
            <div class="icon-block">
              <h2 class="center pink-text"><i class="material-icons">flash_on</i></h2>
            </div>
            <div>
              <img class="responsive-img" src="./images/girl-1.1.jpg" alt="Unsplashed background img 1">
            </div>
            <div>
              <span><h4>Speeds up development</h4></span>
              <p>We did most of the heavy lifting for you to provide a default stylings that incorporate our
                custom components. Additionally, we refined animations and transitions to provide a smoother
                experience for developers.</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div>
            <div class="icon-block">
              <h2 class="center green-text"><i class="material-icons">new_releases</i></h2>
            </div>
            <div>
              <img class="responsive-img" src="./images/girl-2.jpg" alt="Unsplashed background img 1">
            </div>
            <div>
              <span><h4>Speeds up development</h4></span>
              <p>We did most of the heavy lifting for you to provide a default stylings that incorporate our
                custom components. Additionally, we refined animations and transitions to provide a smoother
                experience for developers.</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div>
            <div class="icon-block">
              <h2 class="center yellow-text"><i class="material-icons">perm_identity</i></h2>
            </div>
            <div>
              <img class="responsive-img" src="./images/girl-3.1.jpg" alt="Unsplashed background img 1">
            </div>
            <div>
              <span><h4>Speeds up development</h4></span>
              <p>We did most of the heavy lifting for you to provide a default stylings that incorporate our
                custom components. Additionally, we refined animations and transitions to provide a smoother
                experience for developers.</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div>
            <div class="icon-block">
              <h2 class="center blue-text"><i class="material-icons">polymer</i></h2>
            </div>
            <div>
              <img class="responsive-img" src="./images/girl-5.jpg" alt="Unsplashed background img 1">
            </div>
            <div>
              <span><h4>Speeds up development</h4></span>
              <p>We did most of the heavy lifting for you to provide a default stylings that incorporate our
                custom components. Additionally, we refined animations and transitions to provide a smoother
                experience for developers.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <?php include ('./footer.php'); ?>

  </body>
</html>
