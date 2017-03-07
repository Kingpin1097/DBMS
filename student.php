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

    <title>Student</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--External CSS-->
    <link rel="stylesheet" href="stylesdbms.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <!-- Custom CSS -->
    <style>

    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                <a class="navbar-brand" href="student.php">Student</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="button">
                    <a href="index.php"><span class="glyphicon glyphicon-log-out"></span><b>Logout</b></a>
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
					<div class="col-lg-4" style="padding-top:35px;">
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

	<!--Table Personal Info -->
	<div class="container-fluid green" style="font-family:mySecondFont;">
	     <div class="row">
	        <div class="col-sm-offset-1 col-sm-10 col-sm-offset-1">
            <div class="card-panel white z-depth-3 hoverable">
            <br /><br />
		          <h3>Personal Information</h3>
		            <table class="table table-hover responsive-table table-bordered" style="background-color:#fff;">
		                <tr>
                      <?php
                      $username = ($_SESSION['username']);
                      $password = ($_SESSION['password']);
                      $stud=mysqli_query($db,"SELECT stud_id,fname,mname,lname,g_level,gender,age
                        FROM student
                        JOIN account
                        ON student.account_id=account.account_id
                        WHERE account.username='$username' and account.pword='$password'");
                        $stud_det=mysqli_fetch_row($stud);
                        ?>
	                       <td><b>Student ID</b></td>
		                       <td><?php echo $stud_det[0] ?></td>
	                        </tr>
		                        <tr>
	                             <td><b>Name</b></td>
		                             <td><?php echo $stud_det[1]." ".$stud_det[2]." ".$stud_det[3] ?></td>
	                              </tr>
		                              <tr>
	                                   <td><b>Grade Level</b></td>
		                                   <td><?php echo $stud_det[4] ?></td>
	                                    </tr>
		                                     <tr>
	                                          <td><b>Gender</b></td>
		                                          <td><?php echo $stud_det[5] ?></td>
	                                           </tr>
		                                           <tr>
	                                                 <td><b>Age</b></td>
		                                                 <td><?php echo $stud_det[6] ?></td>
	                                                  </tr>
		                                                </table>
                                                    <div class="row">
                                                      <div class="col-sm-offset-4 col-sm-3 ">
                                                        <a href="PTF.php" class="btn btn-primary btn-lg" align="center">Start SDOFP Testing</a>
                                                      </div>
                                                    </div>
                                                    <br />
	                                                 </div>
	                                                </div>
                                                </div>
                                              </div>

<!--Pre-Awareness Button  -->
	
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>

</body>

</html>
