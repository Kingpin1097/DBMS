<?php
    session_start();
    require 'connect.php';
$username = ($_SESSION['username']);
$sch=mysqli_query($db,"SELECT school.school_name,diocese.diocese_name,school.school_id
FROM school
INNER JOIN diocese
ON school.diocese_id=diocese.diocese_id
INNER JOIN coordinator
ON school.school_id=coordinator.school_id
INNER JOIN account
ON coordinator.account_id=account.account_id
WHERE account.username='$username'");
$scn=mysqli_fetch_row($sch);

$school=$scn[2];

$total=mysqli_query($db,"SELECT count('school_id') from student where school_id='1'");
//grade level
$g1=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='1'");
$g2=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='2'");
$g3=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='3'");
$g4=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='4'");
$g5=mysqli_query($db,"SELECT count('school_id') from student where school_id='$school' and g_level='5'");
$g6=mysqli_query($db,"SELECT count('school_id') from student where school_id='$school' and g_level='6'");
$g7=mysqli_query($db,"SELECT count('school_id') from student where school_id='$school' and g_level='7'");
$g8=mysqli_query($db,"SELECT count('school_id') from student where school_id='$school' and g_level='8'");
$g9=mysqli_query($db,"SELECT count('school_id') from student where school_id='$school' and g_level='9'");
$g10=mysqli_query($db,"SELECT count('school_id') from student where school_id='$school' and g_level='10'");

//gender
$ge1m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='1' AND gender='m'");
$ge2m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='2' AND gender='m'");
$ge3m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='3' AND gender='m'");
$ge4m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='4' AND gender='m'");
$ge5m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='5' AND gender='m'");
$ge6m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='6' AND gender='m'");
$ge7m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='7' AND gender='m'");
$ge8m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='8' AND gender='m'");
$ge9m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='9' AND gender='m'");
$ge10m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='10' AND gender='m'");

$ge1f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='1' AND gender='f'");
$ge2f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='2' AND gender='f'");
$ge3f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='3' AND gender='f'");
$ge4f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='4' AND gender='f'");
$ge5f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='5' AND gender='f'");
$ge6f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='6' AND gender='f'");
$ge7f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='7' AND gender='f'");
$ge8f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='8' AND gender='f'");
$ge9f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='9' AND gender='f'");
$ge10f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='10' AND gender='f'");

//PAT ans



// fetch g_level
$j1=mysqli_fetch_row($g1);
$j2=mysqli_fetch_row($g2);
$j3=mysqli_fetch_row($g3);
$j4=mysqli_fetch_row($g4);
$j5=mysqli_fetch_row($g5);
$j6=mysqli_fetch_row($g6);
$j7=mysqli_fetch_row($g7);
$j8=mysqli_fetch_row($g8);
$j9=mysqli_fetch_row($g9);
$j10=mysqli_fetch_row($g10);
$tot=mysqli_fetch_row($total);

//fetch gender
$gen1=mysqli_fetch_row($ge1m);
$gen2=mysqli_fetch_row($ge2m);
$gen3=mysqli_fetch_row($ge3m);
$gen4=mysqli_fetch_row($ge4m);
$gen5=mysqli_fetch_row($ge5m);
$gen6=mysqli_fetch_row($ge6m);
$gen7=mysqli_fetch_row($ge7m);
$gen8=mysqli_fetch_row($ge8m);
$gen9=mysqli_fetch_row($ge9m);
$gen10=mysqli_fetch_row($ge10m);

$gen11=mysqli_fetch_row($ge1f);
$gen12=mysqli_fetch_row($ge2f);
$gen13=mysqli_fetch_row($ge3f);
$gen14=mysqli_fetch_row($ge4f);
$gen15=mysqli_fetch_row($ge5f);
$gen16=mysqli_fetch_row($ge6f);
$gen17=mysqli_fetch_row($ge7f);
$gen18=mysqli_fetch_row($ge8f);
$gen19=mysqli_fetch_row($ge9f);
$gen20=mysqli_fetch_row($ge10f);


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--External CSS-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Custom CSS -->
    <style>
    body {
        /*padding-top: 70px;*/
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    #div2{
      background-color: #2196F3;
    }
    #div3{
      background-color: #009688;
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
                <a class="navbar-brand" href="school_main.php">School</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#div2">Baseline Results</a>
                    </li>
                    <li>
                        <a href="#div3">PAT Summary Results</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="school_students.php">Students</a>
                  </li>
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
    <div class="jumbotron" id="jumbo">
      <div class="container" style="font-family:myFirstFont">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="page-header">
              <h1 class="display-3">ECMI-Sons and Daughters of OFW Program Website</h1>
            </div>
            <footer>
              <p>
                The migrant is to be considered, not merely as an instrument of production but as a subject endowed with human dignity -Pope John Paul II
              </p>
            </footer>
          </div>
        </div>
        <!-- /.row -->
      </div>
    </div>
    <div class="container-fluid" style="background-color:#C5CAE9; font-family:mySecondFont" align="center">
      <h3><?php echo $scn[0]; ?></h3>
      <h3><?php echo $scn[1]; ?></h3>
    </div>
    <!--Table Results -->
    <div class="container-fluid" style="font-family:mySecondFont;" id="div2">
    <br />
    <br />
    <div class="row">
    <div class="col-sm-12">
      <div class="well" align="center">
        <div class="row">
        <div class="col-sm-5">
        <h3 align="left">Baseline Data Summary Results</h3>
        </div>
        <div class="col-sm-offset-2 col-sm-5">
        </div>
        </div>
      <br />
      <div class="table-responsive">
      <table class="table table-hover table-bordered" style="background-color:#fff;">
      <tr>
        <th rowspan="2">GRADE/YEAR LEVEL</th>
        <th rowspan="2">TOTAL Enrolees</th>
        <th colspan="4">Number of SDO</th>
        <th colspan="5">SDO Parents Category</th>
        <th colspan="5">Country</th>
        <th colspan="5">Years of Stay Overseas</th>
      </tr>
      <tr>
        <th>Total</th>
        <th>%</th>
        <th>Male</th>
        <th>Female</th>
        <th>Mother</th>
        <th>Father</th>
        <th>Both</th>
        <th>LB</th>
        <th>SB</th>
        <th>Asia</th>
        <th>Middle East</th>
        <th>USA</th>
        <th>Europe</th>
        <th>Others</th>
        <th>1-3</th>
        <th>4-6</th>
        <th>7-10</th>
        <th>11-15</th>
        <th>16-20</th>
      </tr>
      <tr>
        <td>NURSERY-PREP</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>GRADE 1</td>
        <td></td>
        <td><?php echo $j1[0];  ?></td>
        <td></td>
        <td><?php echo $gen1[0];  ?></td>
        <td><?php echo $gen11[0];  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>GRADE 2</td>
        <td></td>
        <td><?php echo $j2[0];  ?></td>
        <td></td>
        <td><?php echo $gen2[0];  ?></td>
        <td><?php echo $gen12[0];  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>GRADE 3</td>
        <td></td>
        <td><?php echo $j3[0];  ?></td>
        <td></td>
        <td><?php echo $gen3[0];  ?></td>
        <td><?php echo $gen13[0];  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>GRADE 4</td>
        <td></td>
        <td><?php echo $j4[0];  ?></td>
        <td></td>
        <td><?php echo $gen4[0];  ?></td>
        <td><?php echo $gen14[0];  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>GRADE 5</td>
        <td></td>
        <td><?php echo $j5[0];  ?></td>
        <td></td>
        <td><?php echo $gen5[0];  ?></td>
        <td><?php echo $gen15[0];  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>GRADE 6</td>
        <td></td>
        <td><?php echo $j6[0];  ?></td>
        <td></td>
        <td><?php echo $gen6[0];  ?></td>
        <td><?php echo $gen16[0];  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>GRADE 7</td>
        <td></td>
        <td><?php echo $j7[0];  ?></td>
        <td></td>
        <td><?php echo $gen7[0];  ?></td>
        <td><?php echo $gen17[0];  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>GRADE 8</td>
        <td></td>
        <td><?php echo $j8[0];  ?></td>
        <td></td>
        <td><?php echo $gen8[0];  ?></td>
        <td><?php echo $gen18[0];  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>GRADE 9</td>
        <td></td>
        <td><?php echo $j9[0];  ?></td>
        <td></td>
        <td><?php echo $gen9[0];  ?></td>
        <td><?php echo $gen19[0];  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>GRADE 10</td>
        <td></td>
        <td><?php echo $j10[0];  ?></td>
        <td></td>
        <td><?php echo $gen10[0];  ?></td>
        <td><?php echo $gen20[0];  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>OTHERS</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th>GRAND TOTAL</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      </table>
    </div>
    </div>
    </div>
    </div>
  </div>
<div class="container-fluid" style="font-family:mySecondFont;" id="div3">
    <br />
    <br />
    <div class="row">
    <div class="col-sm-12">
      <div class="well" align="center">
        <div class="row">
        <div class="col-sm-5">
        <h3 align="left">Pre Awareness Test Summary Baseline</h3>
        </div>
        <div class="col-sm-offset-2 col-sm-5">
        </div>
        </div>
      <br />
  <div class="table-responsive">
  <table class="table table-hover table-bordered" style="background-color:#fff;">
  <tr>
    <th rowspan="3">GRADE/YEAR LEVEL</th>
    <th colspan="35">Questionnaires Number</th>
  </tr>
  <tr>
    <th colspan="5">PAT Question 1</th>
    <th colspan="5">PAT Question 2</th>
    <th colspan="5">PAT Question 3</th>
    <th colspan="5">PAT Question 4</th>
    <th colspan="3">PAT Question 5</th>
    <th colspan="3">PAT Question 6</th>
    <th colspan="3">PAT Question 7</th>
    <th colspan="3">PAT Question 8</th>
    <th colspan="3">PAT Question 9</th>
  </tr>
  <tr>
    <!--Question1-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <!--Question2-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <!--Question3-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <!--Question4-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <!--Question5-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <!--Question6-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <!--Question7-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <!--Question8-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <!--Question9-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
  </tr>
  <tr>
    <th>GRADE 4</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>GRADE 5</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>GRADE 6</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Sub Total</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>GRADE 7</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>GRADE 8</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Sub Total</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</div>
</div>
</div>
</div>
</div>


	<footer>
	</footer>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
