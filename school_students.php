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

    <title>School</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="css/dropdowns-enhancement.min.css" rel="stylesheet">
    <!--External CSS-->
    <link rel="stylesheet" type="text/css" href="stylesdbms.css">
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
                        <a href="#div2">Add Students</a>
                    </li>
                    <li>
                        <a href="#div3">List of Students</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="school_report.php">Reports</a>
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
    <div class="container-fluid green" style="background-color:#C5CAE9; font-family:mySecondFont" align="center">
      <h3>School:Our Lady of the Sacred Heart School</h3>
      <h3>Diocese of Cubao</h3>
    </div>
    <!--Table Results -->
    <div class="container-fluid green" style="font-family:mySecondFont;" id="div2">
    <br />
    <br />
    <div class="row">
    <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
      <div class="well" align="center">
        <div class="row">
        <div class="col-sm-5">
        <h3 align="left">Add Students</h3>
        </div>
        <div class="col-sm-offset-2 col-sm-5">
        </div>
        </div>
      <br />
  <form class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-3" for="lname">Last Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="lname" name="lname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="fname">First Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="fname" name="fname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="mname">Middle Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="mname" name="mname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="uname">Username:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="uname" name="uname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pword">Password:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="pword" name="pword">
    </div>
  </div>
  <label class="control-label col-sm-3">Grade Level:</label>

    <div class="col-sm-3">
    <div class="btn-group">
  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Grade Level <span class="caret"></span></button>
    <ul class="dropdown-menu scrollable-menu" role="menu">
      <li class="dropdown-header">Grade Level</li>
      <li><input type="radio" id="grd_lvl1" name="grade_level" value="VALUE"><label for="grd_lvl1">Grade 1</label></li>
      <li><input type="radio" id="grd_lvl2" name="grade_level" value="VALUE"><label for="grd_lvl2">Grade 2</label></li>
      <li><input type="radio" id="grd_lvl3" name="grade_level" value="VALUE"><label for="grd_lvl3">Grade 3</label></li>
      <li><input type="radio" id="grd_lvl4" name="grade_level" value="VALUE"><label for="grd_lvl4">Grade 4</label></li>
      <li><input type="radio" id="grd_lvl5" name="grade_level" value="VALUE"><label for="grd_lvl5">Grade 5</label></li>
      <li><input type="radio" id="grd_lvl6" name="grade_level" value="VALUE"><label for="grd_lvl6">Grade 6</label></li>
      <li><input type="radio" id="grd_lvl7" name="grade_level" value="VALUE"><label for="grd_lvl7">Grade 7</label></li>
      <li><input type="radio" id="grd_lvl8" name="grade_level" value="VALUE"><label for="grd_lvl8">Grade 8</label></li>
      <li><input type="radio" id="grd_lvl9" name="grade_level" value="VALUE"><label for="grd_lvl9">Grade 9</label></li>
      <li><input type="radio" id="grd_lvl10" name="grade_level" value="VALUE"><label for="grd_lvl10">Grade 10</label></li>

      <!-- Other items -->
    </ul>
  </div>
</div>
    <label class="control-label col-sm-2">Gender:</label>
    <div class="col-sm-3">
    <div class="btn-group">
  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Gender <span class="caret"></span></button>
    <ul class="dropdown-menu scrollable-menu" role="menu">
      <li class="dropdown-header">Gender</li>
      <li><input type="radio" id="male" name="gender" value="VALUE"><label for="male">Male</label></li>
      <li><input type="radio" id="female" name="gender" value="VALUE"><label for="female">Female</label></li>
    </ul>
  </div>
</div>
  <div class="form-group">
    <br /><br /><br />
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-primary">Add Student</button>
    </div>
  </div>
  </form>
    </div>
    </div>
    </div>
  </div>

<div class="container-fluid green" style="font-family:mySecondFont;" id="div3">
    <br />
    <br />
    <div class="row">
    <div class="col-sm-12">
      <div class="well" align="center">
        <div class="row">
        <div class="col-sm-5">
        <h3 align="left">List of Students(@Name of School)</h3>
        </div>
        <div class="col-sm-offset-2 col-sm-5">
        </div>
        </div>
      <br />
  <div class="table-responsive">
  <table class="table table-hover" style="background-color:#fff;">
  <tr>
    <th>Student ID</th>
    <th>Last Name</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Grade Level</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Username</th>
    <th>Password</th>
    <th></th>
    <th></th>
  </tr>

  <tr>
    <th>201310001</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>

  <tr>
    <th>201310001</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>

  <tr>
    <th>201310001</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>

  <tr>
    <th>201310001</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>

  <tr>
    <th>201310001</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>

  <tr>
    <th>201310001</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>

  <tr>
    <th>201310001</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>

  <tr>
    <th>201310001</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>

  <tr>
    <th>201310001</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>
</table>
</div>
</div>
</div>
</div>
</div>


	
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>

    <!-- Dropdowns Enhancement -->
    <script src="js/dropdowns-enhancement.js"></script>

</body>

</html>
