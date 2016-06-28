
<!--
This is the front page of my website(a little bland but I'm not that creative to be honest so I went with the google mentality)
This page will link to all other pages for this project(if not directly, indirectly)
The hope is whatever this website lacks in visual appeal, it will gain in user will have a lot of powerfor input on the website features.

-->
<?php
session_start();

if (!isset($_SESSION["login"])){
  $_SESSION["login"] = "Guest";
}



?>



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

          <div id="nav">
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

            </div>
          </div>

          <!--No idea why the Username is off by so much, but it has to do with the toggle  -->
          <div>
          <form align="center" action="process_login.php" method="post" id="login">
                <p align="center">Username:<input type="text" value="" name="username" /></p>
                <p align="center">Password:<input type="text" value="" name="password" /></p>
                <p align="center"><input name="action"  type="submit" value="Login" /></p>
                <?php if($_SESSION["login"] != " Guest"){echo '<p align="center"><input name="action"  type="submit" value="Logout" /></p>'; } ?>
                <p align="center"><input name="action" "action" type="submit" value="Register" /> <?php echo $_SESSION["register_error"]; ?></p>

              </form>
              <form class="flexsearch-form" id="mainForm">
                    <div class="flexsearch-input-wrapper">
                    <input id="input" class="flexsearch-input" type="search" placeholder="search" list="stuff">
                    </div>
                    <p>
                    <input class="flexsearch-submit" type="submit" value="submit"/>
                    <p>
               </form>
               <button id="lucky">Extra points button</button>
          </div>


          <!-- Sectionnew section -->


        <p>
        <?php echo "<p align=\"center\">Welcome," . $_SESSION["login"] . "!</p>"; ?>
        </p>
        <p>
        <button id="button">Toggle login field</button>

      </p>



          <div class="inner cover">
            <h1 class="cover-heading">Brandon Lockridge's Website <span class="glyphicon glyphicon-off"></span></h1>
            <p class="lead">Welcome to my Webpage! Hopefully I can use this as a personal page. I'm using a bootstrap template to get going.</p>
            <p class="lead">


              <p id="player"><iframe width="560" height="315" src="https://www.youtube.com/embed/2RrhwDKw-j4" frameborder="0" allowfullscreen></iframe></p>




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
    <script src="register.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

</html>
