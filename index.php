<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Portfolio | Normandily Soto Rivera</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">NSR</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#about" class="nav-item">About</a></li>
        <li><a href="#portfolio" class="nav-item">Portfolio</a></li>
        <li><a href="#contact" class="nav-item">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#about">About</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container Jumbotron">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-2">Normandily Soto Rivera</h1>
        <div class="row center">
          <h5 class="header col s12 light">Full Stack Web Developer and Full Time Pizza Lover</h5>
        </div>
        <div class="row center">
          <button class="btn-floating btn-large waves-effect waves-light purple lighten-4" id="btn"/><i class="material-icons">keyboard_arrow_down</i></button>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section" id="about">

      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s6"><a class="active" href="#aboutme">About Me</a></li>
            <li class="tab col s6"><a href="#skills">Skills</a></li>
          </ul>
        </div>
        <div id="aboutme" class="col s12">          
            <div class="icon-block">
            <p class="center"><a href="https://credly.com/credit/13660033"><img src="assets/img/badge.png" style="height: 200px; width: 200px"></a></p>

            <p class="light">I am a certified full-stack web developer that specializes in fast, mobile friendly websites. Growing up I always loved expressing myself creatively through sketching or painting. Although I have always admired art in any form, I also have an unusual love for math and critical thinking. While struggling to determine what I wanted to do in life I was introduced to coding and the rest is history. I found something that fuses both of my passions into one unique experience. I enjoy writing code that delivers the final product in a fast, cost-effective way, while also creating a visually appealing website.</p>
          </div>
        </div>
        <div id="skills" class="col s12 center">
            <div class="icon-block">
            <p>
            <img src="assets/img/php.png" class="skills2" alt="PHP">
            <img src="assets/img/sql.png" class="skills2" alt="MySql">
            <img src="assets/img/bootstrap.png" class="skills2" alt="Bootstrap">
            <img src="assets/img/materialize.png" class="skills2" alt="Materialize">                 
            <img src="assets/img/nodejs.png" class="skills2" alt="NodeJS">
            </p>
            <p>
            <img src="assets/img/html.png" class="skills" alt="HTML5">                
            <img src="assets/img/css.png" class="skills" alt="CSS3">
            <img src="assets/img/js.png" class="skills" alt="Javascript">
            </p>            
          </div>
          <p>and more...</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
            <h1>Portfolio</h1>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section" id="portfolio">
<!--         <h3 class="center">Recent Projects</h3>
        <div class="carousel">
        <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
        <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
        <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
        <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
        <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        </div> -->
      <div class="row">
        <div class="col l6 s12 center">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light">
              <br><br>
                <img class="activator" src="assets/img/tthfo.png">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">WordPress<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Front End/Redesign<i class="material-icons right">close</i></span>
                <p>Updated client's blog to a modern minimal look.<br/> Added a navigation bar to sort posts and included an 'About' section.<br/> Used widgets to add social media and contact information.</p>
                <p><a href="https://tiltheheelsfalloff.com" target="_blank" rel="noopener">Til The Heels Fall Off</a></p></p>
              </div>
            </div>
        </div>
        <div class="col l6 s12 center">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light">
              <br><br>
                <img class="activator" src="assets/img/jm.png">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Native PHP<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Customizable Templates<i class="material-icons right">close</i></span>
                <p class="left-align">Created a mobile responsive PHP native template that allows for full customization.<br/>
                <a href="https://alegiantservices.com" target="_blank" rel="noopener">Alegiant</a> - Connected their job database to have a searchable job list on their site.<br/>
                <a href="https://johnsonmosslaw.com" target="_blank" rel="noopener">Johnson Moss LLC</a> - Complete frontend makeover; integrated WordPress blog posts directly onto site.</p>
              </div>
            </div>
        </div>
        <div class="col l6 s12 center">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="assets/img/gmy.png">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Geneomy<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">User Interactive Social Media<i class="material-icons right">close</i></span>
                <p class="left-align">Users can store their generational memories and connect with family and friends; built with CodeIgniter.<br/><i class="tiny material-icons">fiber_manual_record</i> Password encrypted signup; MySQL database<br/><i class="tiny material-icons">fiber_manual_record</i> Bucket storage integration for media uploads<br/> <i class="tiny material-icons">fiber_manual_record</i> Add accounts for kids and family members</p>
                <a href="https://geneomy.com">Geneomy</a>
              </div>
            </div>
        </div>
        <div class="col l6 s12 center">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light">
              <br>
              <br>
                <img class="activator" src="assets/img/dtlogo.png">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Dijatek<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Dijatek<i class="material-icons right">close</i></span>
                <p>Current full-stack chief engineer at Dijatek LLC.</p>
                <p>We build custom web solutions.</p>
                <p><a href="https://dijatek.com" target="_blank" rel="noopener">Learn More</a></p>
              </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col offset-l2 l8 offset-l2 s12 center">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light">
              <br><br>
                <img class="activator" src="assets/img/anas-alshanti-169265.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Full Stack Solutions<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Client Specific<i class="material-icons right">close</i></span>
                <p class="left-align">
                <a href="https://intentionalchocolate.com" target="_blank" rel="noopener">Intentional Chocolate</a> & <a href="https://hwvi.com" target="_blank" rel="noopener">HWVI</a>  - Moved their payment services for their online store from .Net to Square.<br/>
                <a href="https://advmechservs.com/" target="_blank" rel="noopener">Advanced Mechanical Services</a> - Created a desktop application with Electron that automatically generates text and CSV reports, and a sorted folder with the appropriate PDF invoices.<br/>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h1>Contact</h1>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

    <div class="container">
    <div class="section" id="contact">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
            <div class="row">
              <div class="col l4 s12">
              <p><a href="mailto: ndily1230@gmail" target="_blank" rel="noopener"><img src="assets/img/gmail.png" class="social" alt="Gmail"></p>
              <p>ndily1230@gmail.com</p></a>
              </div>
              <div class="col l4 s12">
              <p><a href="https://www.github.com/ndily1230" target="_blank" rel="noopener"><img src="assets/img/dpgithub.gif" class="social" alt="Github"></p>
              <p>Github</p></a>
              </div>
              <div class="col l4 s12">
              <br/>
              <p><a href="https://www.linkedin.com/in/nsotorivera/" target="_blank" rel="noopener"><img src="assets/img/linkedin.png" class="social" alt="LinkedIn"></p>
              <p>LinkedIn</p></a>
              </div>
            </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="page-footer purple lighten-3 center">
    <strong>Made with love in Orlando</strong>
    <br>
      <i class="tiny material-icons" style="color: red">favorite</i>
      <i class="tiny material-icons" style="color: orange">favorite</i>
      <i class="tiny material-icons" style="color: yellow">favorite</i>
      <i class="tiny material-icons" style="color: green">favorite</i>
      <i class="tiny material-icons" style="color: blue">favorite</i>
      <i class="tiny material-icons" style="color: purple">favorite</i>
    <div class="footer-copyright">
      <div class="container">
      <p>Normandily Soto-Rivera &#183 2017</p>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
  <script src="assets/js/init.js"></script>
  <script src="assets/js/main.js"></script>
  </body>
</html>