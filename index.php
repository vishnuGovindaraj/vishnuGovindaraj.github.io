<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Personal Portfolio </title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
 
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>


<link rel="stylesheet" type="text/css" href="css/style.css">


<!--Te sting Githib Commit-->

</head>
<body>
  <div class="container">
  <!-- Top Menu -->
    <div id="HeroImage" class="row">
        <div class="col-xs-12">
              <div class="col-xs-12">
      <ul class="topnav" id="myTopnav">
        <li><a href="#ContactButton">Contact</a></li>
        <li><a href="#PortfolioButton">Portfolio</a></li>
        <li><a href="#AboutMeButton">About Me</a></li>
        <li class="icon">
          <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
        </li>
      </ul>
      </div>
    <div class="col-xs-12" id="HeroLogo">
        <h1><a href="/index.php" class="notunderlinelink"><strong>Vishnu Govindaraj</strong></h1></a>
    <h2 id="HeroHeading">
    Innovate  .  Inspire  .  Educate
      </h2>
  </div>
    </div>
    </div>
  <!-- About Me Section --> 
  
  <div id="AboutMe" class="row">
    <div class="col-xs-12">
      <div class="col-xs-12"> 
    <h2 id="AboutMeHeading"><strong>
    About Me</strong>
      </h2>
      </div>
        <div id="personalDescription" class="col-xs-12 col-sm-6">
          <p>I have a BSc. in Computer Science. My background is in Java and C++. I'm experienced with basic to advanced programming principles/paradigms (Object Oriented/ Functional/ Optimization). As a Software Developer, I aim to always exceed the expectations of clients. I communicate clearly and effectively with others, take initiative when needed and look for creative solutions if possible. I strive to raise the synergy of the team I am embedded in by enabling members to perform better; this is done by being critical, yet supportive. I am rarely satisfied with meeting basic expectations, and believe good results are achieved with dedication and a positive attitude. </p>
      </div>
        <div id="portfolioImageContainer" class="col-xs-12 col-sm-6">
          <div class="thumbnail" id="portfolioImage">
            <img src="/images/PortfolioImage.JPG" border="0" alt="portfolio image" />
          </div>
            
            
            
            
        </div>
    </div>
  </div>
 <!--Portfolio Section-->
  <div id="Portfolio" class="row">
    <div class="col-xs-12">
         <div class="col-xs-12"> 
      <h2 id="PortfolioHeading"><strong>
Portfolio</strong>
    </h2>
         </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="thumbnail" id="portfolioElement">
             <a href="https://codepen.io/vishnuGovindaraj/full/WozoWR/" target="_blank"><img src="images/projectImage1.jpeg" /></a>
            <div class="caption">Tribute Page for Nobuo Uematsu</div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="thumbnail" id="portfolioElement">
            <img src="images/projectplaceholderimage.png" border="0" alt=" photo 20161201_070226_zpsab21qidn.jpg" />
          <div class="caption">Project #2</div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="thumbnail" id="portfolioElement">
            <img src="images/projectplaceholderimage.png" border="0" alt=" photo 20161201_070226_zpsab21qidn.jpg" />
          <div class="caption">Project #3</div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="thumbnail" id="portfolioElement">
            <img src="images/projectplaceholderimage.png" border="0" alt=" photo 20161201_070226_zpsab21qidn.jpg" />
         <div class="caption">Project #4</div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="thumbnail" id="portfolioElement">
            <img src="images/projectplaceholderimage.png" border="0" alt=" photo 20161201_070226_zpsab21qidn.jpg" />
          <div class="caption">Project #5</div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="thumbnail" id="portfolioElement">
            <img src="images/projectplaceholderimage.png" border="0" alt=" photo 20161201_070226_zpsab21qidn.jpg" />
          <div class="caption">Project #6</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact me section -->
  <div id="Contact" class="row">
    <div class="col-xs-12">
         <div class="col-xs-12"> 
      <h2 id="ContactHeading"><strong>
    Contact</strong>
        </h2>
         </div>
      <div class="col-xs-12">
        <form class="well form-horizontal" action=" " method="post" id="contact_form">
          <fieldset>
            <div class="form-group">
              <label class="col-md-1 control-label">Name</label>
              <div class="col-md-11 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="first_name" placeholder="First Name" class="form-control" type="text">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-1 control-label">E-Mail</label>
              <div class="col-md-11 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-1 control-label">Message</label>
              <div class="col-md-11 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                  <textarea class="form-control" name="comment" placeholder="Message"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-1 control-label"></label>
              <div class="col-md-11">
                <button type="submit" class="btn btn-warning">Send <span class="glyphicon glyphicon-send"></span></button>
              </div>
            </div>
         </form>
        </fieldset>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <div id="footer" class="row">
    <div class="col-xs-12">
      <div class="col-xs-6">
        <p id="author">
        &copy; Vishnu Govindaraj. All rights reserved.
         </p>
      </div>
      <div class="social">
        <ul>
          <li><a href="https://www.facebook.com/vishnu.govindaraj.33" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.linkedin.com/in/vishnu-govindaraj-610a3331" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="https://twitter.com/flaminhindu" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://plus.google.com/114499488099872318801" title="Google+" target="_blank"><i class="fa fa-google-plus"></i> </a></li>
          <li><a href="https://github.com/vishnuGovindaraj" title="GitHub" target="_blank"><i class="fa fa-github"></i></a></li>
          <li><a href="https://www.freecodecamp.com/vishnugovindaraj" title="FreeCodeCamp" target="_blank"><i class="fa fa-free-code-camp"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false'></script>

    <script src="js/index.js"></script>

</body>
</html>