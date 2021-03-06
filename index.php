<?php
	session_start();
	require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CBCP ECMI-SDOFP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--External CSS-->
    <link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="css/materialize.min.css">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 50px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    #div2{
    padding-top:50px;
    padding-bottom: 50px;
    background-color:#fff;
    }
    #well2{
      color:#000000;
    }
    #div3{
      padding-top:50px;
      padding-bottom: 50px;
      background-color:#fff;
      font-family: roboto;
    }
		.logo {
			margin:0 auto;
			background-color:#004D40;
		}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top navbar-inverse" style="padding:6px; font-family:mySecondFont; " role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#div2">About</a>
                    </li>
                    <li>
                        <a href="#div3">Contact</a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> <b>Login</b> <span class="caret"></span></a>
                      <ul id="login-dp" class="dropdown-menu">
                        <li>
                          <div class="row">
                            <div class="col-md-12">
                              <h4 class="header" style="color:#000; font-family:myFirstFont; font-size:31px;">Please Log-In</h4>
                              <hr/>
                              <form action="login.php" class="form" role="form" method="post" accept-charset="UTF-8" id="login-nav">
                                <div class="form-group">
                                  <label class="sr-only" for="username">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                              	</div>
                                <div class="form-group">
                                  <label class="sr-only" for="password">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                  <button type="submit" name="submit" class="btn btn-primary btn-block waves-effect green">Log-In</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                </ul>
              </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
		<div class="container-fluid green" style="font-family:myFirstFont">
			<br />
			<div class="card-panel white z-depth-3">
				<div class="container-fluid">
        <div class="row">
					<div class="col-lg-4" style="padding-top:30px;">
						<img src="pictures/logo.jpg" class="img-responsive logo" alt="ECMI LOGO" />
					</div>
          <div class="col-lg-8 text-center">
				    <div class="page-header">
              <h1 class="display-3">ECMI-Sons and Daughters of OFW Program Website</h1>
            </div>
            <footer>
              <p style="font-size:17px;">
                The migrant is to be considered, not merely as an instrument of production but as a subject endowed with human dignity -Pope John Paul II
              </p>
            </footer>
          </div>
        </div>
        <!-- /.row -->
			</div>
		</div>
	</div>

    <div class="container-fluid green z-depth-2" id="div1">
			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-md-offset-1">

					<div class="carousel slide" data-ride="carousel" id="pictures">
						<ol class="carousel-indicators">
							<li data-target="#pictures" data-slide-to="0" class="active">
							</li>
							<li data-target="#pictures" data-slide-to="1">
							</li>
							<li data-target="#pictures" data-slide-to="2">
							</li>
							<li data-target="#pictures" data-slide-to="3">
							</li>
						</ol>
						<br /> <br />
						<div class="carousel-inner">
							<div class="item active">
								<img src="pictures/a.jpg" alt="SDOFP_1" />
								<div class="carousel-caption">
									<h2>Sample Picture</h2>
									<p>Description
									</p>
								</div>
							</div>
							<div class="item">
								<img src="pictures/b.jpg" alt="SDOFP_2" />
								<div class="carousel-caption">
									<h2>Sample Picture</h2>
									<p>Description
									</p>
								</div>
							</div>
							<div class="item">
								<img src="pictures/c.jpg" alt="SDOFP_3" />
								<div class="carousel-caption">
									<h2>Sample Picture</h2>
									<p>Description
									</p>
								</div>
							</div>
							<div class="item">
								<img src="pictures/d.jpg" alt="SDOFP_4" />
								<div class="carousel-caption">
									<h2>Sample Picture</h2>
									<p>Description
									</p>
								</div>
							</div>
							<a href="#pictures" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
							<a href="#pictures" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
					</div>
				</div>
				</div>
			</div>
		<div class="container-fluid green z-depth-3">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-md-offset-1">
				<div class="card-panel hoverable" id="div2">
					<h2 style="color:#000">ABOUT US</h2>
					<br />
					<p class="flow-text" style="font-family:roboto; font-size:20px;">
						The beginnings of the Catholic Bishops’ Conference of the Philippines may be traced back to 15 February 1945 , when the Catholic Welfare Organization (CWO) was created. Back then, it had 17 members.

						The beginnings of the Episcopal Commission for the Pastoral Care of Migrants and Itinerant People (ECMI) may be traced back to the year 1955, when the Episcopal Commission-Committee on Emigration reported to the CWO the situation of Filipinos in USA, Hawaii, and Guam, and the corresponding actions taken by the church.

						In the early 60’s the Body of Bishops established the Apostleship of the Sea to meet the needs of the seafarers nationwide.

						In January 1967, two Episcopal Commissions were created under the Article XXV of the CBCP Constitutions: Commission on Immigration and Tourism and, Commission on the Apostolates of the Sea and Air.

						In 1972, the Bishops merged these two Commissions into one body called Episcopal Commission on Migration and Tourism (ECMT), in order to answer the growing spiritual, pastoral and social needs of people on the move.

						In 1984, the actual office was opened and blessed by Bishop Gabriel V. Reyes D.D., then Chairman.

						Since then, ECMI has been headed by a Scalabrinian Missionary with the task of coordinating and promoting ECMI’s apostolates and services for people on the move.

						On February 21, 1988 , CBCP issued the first ever “Pastoral Letter of the Catholic Bishops’ Conference of the Philippines on the occasion of the National Migration Day.”

						In the year 1995, 3 major events occurred:

						First the 70th Bishops’ Plenary Assembly approved the change of name of Episcopal Commission on Migration and Tourism (ECMT) to Episcopal Commission for the Pastoral Care of Migrants and Itinerant People (ECMI).

						Second, the 71st Bishops’ Plenary Assembly issued a second pastoral letter called “Comfort My People, Comfort Them” (Is 40,1) - Pastoral Letter on Filipino Migrant Workers.

						Third, ECMI opened three Regional Migration Desks (RMD): RMD Luzon; RMD Visayas; and, RMD Mindanao to better cater to the needs of people on the move.

						The year 1997 (February 3) marked the opening of the Asian Migration Desk, tasked to coordinate the ministry for migrants in Asia. The year 2000 marks the consolidation of the Filipino ministry overseas.
					</p>
				</div>
			</div>
			</div>
		</div>
	<div class="container-fluid green z-depth-3">
		<div class="row>">
			<div class="col-md-offset-1 col-md-10 col-md-offset-1">
				<div class="card-panel hoverable" id="div3">
					<h2 style="color:#000">Contact Us</h2>
					<br/>
					<div class="row">
						<div class="col-md-offset-4 col-md-4 col-md-offset-4"
						<div class="well well-sm" style="background-color:#fff">
							<p align="center">
								<h3>Luzon Regional Coordinator</h3>
								MR. EDMUNDO H. RUGA – Coordinator

								C/o CBCP Bldg., 470 Gen. Luna Street
								1002 Intramuros, Manila
								Tel #: 527-4135 / 527-4142
								Fax #: 527-9568

								E-Mail: ecmiluzon97@yahoo.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
			</div>
		</div>

	  <footer>
      <hr/>
	  </footer>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
		<script src="js/materialize.min.js"></script>
</body>
</html>
