<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Personal resume-JunHao Huang</title>

    <!-- Personal file -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">personal information</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#life">life</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                       <a class="page-scroll" href="#links">Links</a>

                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>JunHao Huang</h1>
                 <h2>university of pittsburgh senior student<h2>
                <hr>
                <p>I am seeking to gain experience in the Computer Engineering and programming or any job.  I am currently looking an internship and I am willing to try or learn anything when the opportunity comes!</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">More information</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Skill and Life!</h2>
                    <hr class="light">
                  <div class="mouse-over">
 	           <span>mouse over event</span>
                <p class="text-faded">During three years college life I learned about the basics of the programming and how the circuits work.  I am also good at math and use Excel to calculate or graph information based on the raw data. And since I am familiar with the computer, I can fix most of small computer problems and trouble shoot the problem.
!</p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="project.js"></script>
<button type="button" class="btn btn-primary btn-lg btn-block" id="button1">Motto</button>
       	<div id="myResult"></div>
    </div>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>	
	<script type="text/javascript">
		$(document).ready(function(){
			var downloaded = 0;
			$("#button1").click(function(){
				if (downloaded ==0){
					downloaded = 1;
					<?php
						$data = file_get_contents("file1.txt");
						echo '$("#myResult").append("<h2>'.$data.'</h2>");';
					?>
				}
				else
					$("#myResult").toggle();
			});
	
		})();</script>

                    
        </div>
    </section>

    <section class="pg-primary"  section id="Deatil information">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Detail information</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">

                        <h3>working experience</h3>
                        <p class="text-muted">
Seasame Inn Chinese restaurant(cashier).
<br>
Giant stone (truck driver and translater)
.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <h3>Education</h3>
                        <p class="text-muted">University of Pittsburgh, junior, B.S. Electrical & Computer Engineering, GPA: 2.9 
</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <h3>couse taken</h3>
                        <p class="text-muted">Fundamentals of Programming, Probability & Statistics for Engineering, Micro Computing for Management, Calculus 1&2, Linear Circuits and System 1, and Differential Equations, Computer .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <section class="no-padding" id="life">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/life/1.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">                                                            Conturys i have been to.
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/life/2.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Conturys i have been to.
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/life/3.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Conturys i have been to.
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/life/4.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Conturys i have been to.
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                 <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/life/5.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Conturys i have been to.

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<section class="links" section id="links" class="links content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 centered">
               
            <h1>My favorite Movie and Game</h1>
            <p class="med">Welcome to talk if you like them!</p>
          </div>
          <div class="col-lg-12 centered last-row">
            <p class="uc red-txt bold">Links</p>
            <ul>
              <li class="b-ten">
                <a href="https://www.youtube.com/watch?v=T50_qHEOahQ">The Last Samurai</a>
              </li>
              <li class="b-ten">
                <a href="https://www.youtube.com/watch?v=HJGRSuNjasg">The lord of rings+Hobbit</a>
              </li>
              <li class="b-ten">
                <a href="https://www.youtube.com/watch?v=_wUcbN34leM">Yip Man</a>
              </li>
              <li class="b-ten">
                <a href="https://www.youtube.com/watch?v=HKSZtp_OGHY">Pirates of the Caribbean</a>
              </li>
              <li class="b-ten">
                <a href="https://www.youtube.com/watch?v=u_diRgwPCS8">Now You See Me </a>
              </li>
              <li class="b-ten">
                <a href="https://www.youtube.com/watch?v=gvn1k6__yTc">Halo</a>
              </li>
              <li class="b-ten">
                <a href="https://www.youtube.com/watch?v=USV1699z3bY">NBA 2k series</a>
              </li>
              <li class="b-ten">
                <a href="https://www.youtube.com/watch?v=cq5MxnMEiu4">Call of duty</a>
              </li>
              <li class="b-ten">
                <a href="https://www.youtube.com/watch?v=ERTIWNfx93w">Dota2</a>
              </li>
              <li class="b-ten">
                <a href="https://www.youtube.com/watch?v=UMqBOmvba0g">Heartstone</a>
              </a>
              </li>
            </ul>
          </div>
        </div>


    <section id="contact">
        <div class="container">
            <div class="row">
                
<form action = "db.php"
          method = "POST">
  <div class="col-lg-4  text-left">
    <b>What is your  phone number?</b>
    <input type = "text" name = "number" value =""placeholder="number~" size = "30" maxlength = "30">
    <br /><br />
    <b>name!</b>
    <input type = "text" name = "name" value ="" placeholder="name~"size = "60" maxlength = "60">
</div>
<div class="col-lg-4 col-lg-offset-2 text-right">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Contact me whenever you want~<p>
                </div>
                
 <div class="col-lg-4  text-left">
<b>Please type your message below:</b><br />
    <br />
    <textarea name="msg" name = "somthing" value ="" placeholder="say something~" rows="5" cols="60"></textarea>
    <br /><br />
    <input type = "submit" value = "Submit">
    </form>
</div>
<div class="col-lg-2 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>412-889-2817</p>
                </div>
                <div class="col-lg-2 col-lg-offset-1  text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">juh47@pitt.edu</a></p>
           
                </div>   
            </div>
        </div>
<?php
include_once("db.php");
if(isset($_POST['number'])&& isset($_POST['name'])&& isset($_POST['something'])){
if($_POST['number']!=""&& $_POST['name']!=""&& $_POST['something']!=""){
$number=$_POST['number'];
$name=$_POST['name'];
$something=$_POST['something'];
$sql_store="INSERT into names(id,name,number,des) VALUES(NULL,'$name','$number','$something')";
$sql=mysqli_query($db,$sql_store)or die(mysql_error());
}else{
echo"you need to enter something in the boxes.";
}
}else{
echo"you need to enter something in the boxes.";
}
?>

    </section>




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
