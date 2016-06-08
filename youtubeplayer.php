<?php

//The following code reads a text file into an array, then randomly selects a video link.
//I've tried to embed the video player into the page but for some reason it won't work, so I've settled for the link

//text file with song links
$file = "text/songnames.txt";

//So I've seperated the links into an array of songs and simultaneously count the songs.
//Next, using the count of the songs I use the rand function to select a random song
$parts = new SplFileObject($file);
$countofsongs = 0;
$songarray = array();


foreach ($parts as $line) {
        $countofsongs += 1;
        array_push($songarray, $line);
      }
//grab random song
$randomvalue = rand(0, $countofsongs-1);
$randomsong = rtrim($songarray[$randomvalue]);

//originally I was going to randomly change the style sheet randomly every time the page was loaded, but then I
//realized that's the dumbest thing ever. Yes, this was the most creative thing I could come up with.
//merging html with php is not nice

?>

<html lang="en">
  <head>
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
    <link href="css/cover1.css" rel="stylesheet">

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

          <!--TOP PART -->

          <div class="masthead clearfix">
            <div class="inner">
              <h3 align="center"></h3>

            </div>
          </div>

          <!-- Sectionnew section -->



          <div class="inner cover">
            <h1 class="cover-heading">Random Youtube player <span class="glyphicon glyphicon-off"></span></h1>

            <p class="lead">
              <!-- Embedded video
              Will not display for some reason!!

            -->

              <iframe width="560" height="315" src="<? php echo $randomsong ?>" frameborder="0" allowfullscreen></iframe>

            <!-- <a href="https://www.youtube.com/watch?v=ue5oHmUGiMM" class="btn btn-lg btn-default">Click here</a> -->


            </p>
          </div>

            <p class="nav masthead-nav" align="left">
              <li><b>Quick Website Navigation:</b></li>
              <li class="active" align="center"><a href="index.php">Home</a></li>
              <li><a href="pdf/resume.pdf">Resume</a></li>
              <li><a href="https://www.reddit.com/r/soccer/">Soccer</a></li>
              <li><a href="youtubeplayer.php">Next Song</a></li>
              <!--
            SOME HOW THIS works!!!!!!!!!!! Eff this
            -->
              <li><a href="<?php echo $randomsong?>"><?php echo $randomsong?></a></li>
            </p>


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
</html>"
