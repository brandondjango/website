<? php
session_start();
$user = "Guest";
if (!isset($_SESSION["username"])){
  $_SESSION["username"] = "";
}

//if this is the first time the user enters the page, page assumes he hasn't logged in
if (!isset($_SESSION["login"])){
  $_SESSION["login"] = false;
}

//if the user has logged in his name will be displayed
if (($_SESSION["login"]) == true){
  $_SESSION["login"] = true;
  $user = $_SESSION["username"];
}

//if there is an error with login, display error
if (!isset($_SESSION["error"])){
  $_SESSION["error"] = "";
}

//display error if there is one
$error = $_SESSION["error"];




 ?>




<!--
This is the front page of my website(a little bland but I'm not that creative to be honest so I went with the google mentality)
This page will link to all other pages for this project(if not directly, indirectly)
The hope is whatever this website lacks in visual appeal, it will gain in user will have a lot of powerfor input on the website features.

-->



<html lang="en">
  <head>
<!--Style stuff -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Brandon  Lockridge Webpage</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <!--TOP PART / Navigation -->

          <div class="masthead clearfix">
            <div class="inner">
              <h3 align="center">Brandon Lockridge</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><b>Quick Website Navigation:</b></li>
                  <li class="active" align="right"><a href="index.php">Home</a></li>
                  <li><a href="pdf/resume.pdf">Resume</a></li>
                  <li><a href="https://www.reddit.com/r/soccer/">Soccer</a></li>
                  <li><a href="youtubeplayer.php">Music</a></li>
                  <li><a href="database.html">Database</a></li>
                </ul>
              </nav>
              <? php
              if($_SESSION["login"] == false){
                echo "<p>$error</p";
                echo "<form action=\"process.php\" method=\"post\">
                    <input type=\"text\" value=\"\" name=\"username\" />
                    <input type=\"text\" value=\"\" name=\"password\" />
                    <input type=\"submit\" value=\"Submit\" >
              </form>"; };
              else{
                echo "<p>Welcome" .  "$_SESSION[\"username\"]";
              }
              ?>
            </div>
          </div>

          <!-- Sectionnew section -->



          <div class="inner cover">
            <h1 class="cover-heading">Brandon Lockridge's Website <span class="glyphicon glyphicon-off"></span></h1>
            <p class="lead">Welcome to my Webpage! Hopefully I can use this as a personal page. I'm using a bootstrap template to get going.</p>
            <p class="lead">


              <p><iframe width="560" height="315" src="https://www.youtube.com/embed/2RrhwDKw-j4" frameborder="0" allowfullscreen></iframe></p>

            </p>
          </div>


          <div class="mastfoot">
            <div class="inner">
              <p>Leaving this here so I guess this guy gets credit</p>
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

</html>
