<?php
include("includes/config.php");
include("includes/main.php");
?>

<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jukebox - Responsive Music and Band Website Template">
    <link rel="icon" href="assets/images/favicon.png">
    
    <title>NTT-Music</title>

    <!-- Bootstrap -->
    <link href="assets/stylesheets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Stylesheets -->

    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- JQuery -->
    <script src="assets/javascripts/jquery.min.js"></script>


    <!-- jpreloader -->
    <link href="assets/javascripts/jpreloader/jpreloader.css" rel="stylesheet">
    <script src="assets/javascripts/jpreloader/jpreloader.min.js"></script>

    <!-- font-awesome.css -->
    <link href="assets/stylesheets/css/fontawesome/font-awesome.css" rel="stylesheet">
    <link href="assets/stylesheets/css/fontawesome/font-awesome.min.css" rel="stylesheet">

    <!-- animate.css -->
    <link href="assets/stylesheets/css/animate.css" rel="stylesheet">
    
    <!-- Jplayer -->
    <link href="assets/javascripts/jplayer/skin/jukebox/css/jplayer.jukebox.css" rel="stylesheet" type="text/css" />

    <!-- Fancybox -->
    <link href="assets/javascripts/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />

    <!-- Owl Carousel -->
    <link href="assets/javascripts/owl.carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/javascripts/owl.carousel/owl.theme.css" rel="stylesheet" type="text/css" />
  
    <!-- User Defined Style -->
    <link href="assets/stylesheets/css/style.css" rel="stylesheet">
    <link href="assets/stylesheets/css/responsive.css" rel="stylesheet">

     
    </head>
    
  <body>
    <!-- <script type="text/javascript">             
             window.location.href="http://localhost/music/index.php?page=home";             
        </script> -->
    <!-- Splash Screen Begin -->
    <div id="jSplash" class="preloader">
      <div id="loader">
        <div class="shape-wrap">
          <div class="shape">
            <h2>Loading</h2>
          </div>
        </div>
        <div id="fadingBarsG">
          <div id="fadingBarsG_1" class="fadingBarsG">
          </div>
          <div id="fadingBarsG_2" class="fadingBarsG">
          </div>
          <div id="fadingBarsG_3" class="fadingBarsG">
          </div>
          <div id="fadingBarsG_4" class="fadingBarsG">
          </div>
          <div id="fadingBarsG_5" class="fadingBarsG">
          </div>
          <div id="fadingBarsG_6" class="fadingBarsG">
          </div>
          <div id="fadingBarsG_7" class="fadingBarsG">
          </div>
          <div id="fadingBarsG_8" class="fadingBarsG">
          </div>
        </div>
      </div>
    </div>
    <!-- Splash Screen End -->
    
			<?php
			include ("modules/banner.php"); 
			include ("modules/menu.php"); 
			  if(isset($_GET["page"])){
			  switch($_GET["page"]){
				case "home":
				  include ("modules/newsong.php");
				  include ("modules/mediaplay.php");
				  include ("modules/painted.php");
				  include ("modules/higlight.php");
				  break;
				case "rank":
				  include("pages/rank.php");
				  break;
				case "album":
				  include("pages/album.php");
				  break;
				case "detailsong":
				  include("pages/detailsong.php");
				  break;
				case "detailsinger";
				  include("pages/detailsinger.php");
          break;
        case "search";
          include("pages/search.php");
          break;



				 
			  }
			}
			include ("modules/footer.php");
			?>








    
    <!-- Javascript Plugins -->
    <script src="assets/javascripts/bootstrap.min.js"></script>
    <script src="assets/javascripts/jplayer/jquery.jplayer.min.js"></script>
    <script src="assets/javascripts/jplayer/add-on/jplayer.playlist.min.js"></script>
    <script src="assets/javascripts/wow/wow.min.js"></script>
    <script src="assets/javascripts/modernizr.js"></script>
    <script src="assets/javascripts/jquery.hoverdir.js"></script>
    <script src="assets/javascripts/jquery.easing.js"></script>
    <script src="assets/javascripts/sly.min.js"></script>
    <script src="assets/javascripts/jquery.parallax-1.1.3.js"></script>
    <script src="assets/javascripts/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/javascripts/fancybox/jquery.fancybox.pack.js"></script>
    <script src="assets/javascripts/isotope.pkgd.min.js"></script>
    <script src="assets/javascripts/masonry.pkgd.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/javascripts/jquery-latest.js"></script>
            <script type="text/javascript" src="assets/javascripts/jquery.shorten.1.0.js"></script>
            <script type="text/javascript">
           
            $("#ntttt").shorten({"showChars" : 400, "moreText"  : "</br>Xem thêm", "lessText"  : "</br>Rút gọn",});
            
            </script> -->
            
    
    <script src="assets/javascripts/custom.js"></script>
  </body>


</html>