<?php
try {

 $objDb = new PDO('mysql:host=localhost;dbname=project', 'root', 'jyoti9185');
 $objDb->exec('SET CHARACTER SET utf8');

 $sql = "SELECT DISTINCT State 
  FROM `finaldata1`";
 $statement = $objDb->query($sql);
 $list = $statement->fetchAll(PDO::FETCH_ASSOC);

 } catch(PDOException $e) {
 echo 'There was a problem';
 }

 ?>    

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>E-Governance at ur Fingertips&middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 10px;
        line-height: 1.5;
      }

    }
    </style>

    
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">COMMUNITY SERVICE CENTERS</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="#home">Home</a>
              </li>
              <li class="active">
                <a href="#about">About</a>
              </li>
              <li class="">
                <a href="#corevalue">Core Values</a>
              </li>
              <li class="">
                <a href="#corepurpose">Core Purpose</a>
              </li>
              <li class="">
                <a href="#achiev">Achievements</a>
              </li>
              <li class="">
                <a href="#contact">Contact</a>
              </li>
              <!----<li class="">
                <a href="./customize.html">Customize</a>
              </li>--->
            </ul>
          </div>
        </div>
      </div>
    </div>


    


    
   <section id="home">  
   <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="../assets/img/examples/8.jpeg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1> Election & Vote Counting Webcasting</h1>
            
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../assets/img/examples/1.jpeg" alt="">
         
        </div>
        <div class="item">
          <img src="../assets/img/examples/2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>AANGANWADI</h1>
             </div>
          </div> 
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    </section>
    
<!--code for district dropdown-->  
<?php 
mysql_connect("localhost","root","jyoti9185");
@mysql_select_db("project")or die("unable");
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//echo "<b>User selected State is=</b>";
$pt=$_REQUEST['InputState']; 
 echo "<br>";
$data=mysql_query("SELECT District FROM finaldata1 WHERE State='$pt'");
	 echo "CHOOSE DISTRICT OF:$pt";
	//$info=mysql_fetch_array($data))
?>

<html>
<body background="../assets/ico/t3.jpg">
<form action="new1.php" method="POST">
<?php
	echo "<select name=\"District\">"; // Open your drop down box
      //  echo $a=$_REQUEST['hotelname'];
// Loop through the query results, outputing the options one by one
while( $row = mysql_fetch_array( $data )) 
{
   echo "<option value='".$row['District']."'>".$row['District']."</option>";
}

echo "</select>";// Close your drop down box

		
echo "<br>";
	//echo "The total hotels on your selected State are=$i";

?>
<input type="submit" value="submit">
</form>
</body>
</html>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>	
<script src="ajax.js" type="text/javascript"></script>
</div>
  


      
      <section id="about">
      <hr class="featurette-divider">
      
      <div class="featurette">
        <img class="featurette-image pull-right" src="../assets/img/examples/mo.jpg">
        <h2 class="featurette-heading">About</h2>
        <p class="lead">The CSC is a strategic cornerstone of the National e-Governance Plan (NeGP), approved by the Government in May 2006, as part of its commitment in the National Common Minimum Programme to introduce e-governance on a massive scale.</p>
        
       <p class="lead">The CSCs would provide high quality and cost-effective video, voice and data content and services, in the areas of e-governance, education, health, telemedicine, entertainment as well as other private services. A highlight of the CSCs is that it will offer web-enabled e-governance services in rural areas, including application forms, certificates, and utility payments such as electricity, telephone and water bills.</p>
      </div>
      </section>
      
      <section id="corevalue">
      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="../assets/img/examples/corevalues_icons.png">
        <h2 class="featurette-heading">Core Values<span class="muted">...</span></h2>
        <p class="lead">Our flexible attitude and ability to offer a gamut of services based on our own
communication infrastructure effectively provides a tailored service, catering
to all our individual clients’ requirements – be they LSP Level Entrepreneurs,
Corporate or Government.</p>
      </div>
      </section>
      
    
      <section id="corepurpose">
      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="../assets/img/examples/3.jpeg">
        <h2 class="featurette-heading">Core Purpose <span class="muted">...</span></h2>
        <p class="lead">Empowering rural India using SCA's world class ICT enabled infrastructure led by an inspired team of village entrepreneurs and engaged employees for delivering both Government and consumer products and services.</p>
      </div>

      <hr class="featurette-divider">
      </section>
      


       <section id="achiev">
      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="../assets/img/examples/url.jpeg">
        <h2 class="featurette-heading">Achievements<span class="muted">...</span></h2>
        <p class="lead">The factors responsible in weaving a new Rural India :</p>
        <li>1900 CSC rolled out in 11 designated districts of CMS CSC Andhra Pradesh project and covering nearly 12000 villages.</li>

        <li>Offering several G2C and B2C routine and frequently used services like utility bill collection, mobile bill payment, Insurance premium collection etc. by the CSCs at the convenience of citizens where, no other options were available in the past in rural areas of Andhra Pradesh .</li>
        <li> Due to increased depth of roll out and improved service basket monthly 4-5 lacs citizens coming to CSC to avail various services. The count is increasing exponently month after month.</li>
        <li>The average monthly income of VLE has reached a sustainable bracket of Rs 2000-10000. In last financial year more than 190 times VLEs have earned Rs 10000.00 a month from CSC project service offering as commission.</li>

        <li>VLE of CMS Computers Ltd has been awarded as the Best VLE from Janupally center, East Godavari, Andhra Pradesh at Bhuvaneshwar Conference, and one more VLE was awarded as Best VLE for his Meeseva Center and received Sub Collector’s Rolling Trophy at Nizamabad, on15th Aug 2012.</li>

      </div>

      <hr class="featurette-divider">
      </section>
      


      
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div>


    
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="../assets/js/holder/holder.js"></script>
  </body>
</html>
