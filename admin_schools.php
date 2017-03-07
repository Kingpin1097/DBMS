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

    <title>Administrator</title>

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
                <a class="navbar-brand" href="admin_main.php">Administrator</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#div2">Add School</a>
                    </li>
                    <li>
                        <a href="#div3">List of Participating Schools</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="admin_report.php">Reports</a>
                  </li>
                  <li>
                      <a href="admin_students.php">Students</a>
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

    <!--Table Results -->
    <div class="container-fluid green" style="font-family:mySecondFont;" id="div2">
    <br />
    <br />
    <div class="row">
    <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
      <div class="well" align="center">
        <div class="row">
        <div class="col-sm-7">
        <h3 align="left">Add Participating School</h3>
        </div>
        <div class="col-sm-offset-2 col-sm-3">
        </div>
        </div>
      <br />
  <form class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-3" for="school_name">Name of School:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="school_name" name="nschool">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="username">Username:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="username" name="username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pword">Password:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="pword" name="pword">
    </div>
  </div>
  <label class="control-label col-sm-3">Diocese:</label>

    <div class="col-sm-3">
    <div class="btn-group">
  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" name="diocese">Diocese <span class="caret"></span>
  </button>
    <ul class="dropdown-menu scrollable-menu" role="menu">
      <li class="dropdown-header">Region 1</li>
      <li><input type="radio" id="diocs_name" name="diocese_name" value="VALUE"><label for="diocs_name">Diocese of Alaminos</label></li>
      <li><input type="radio" id="diocs_name1" name="diocese_name" value="VALUE"><label for="diocs_name1">Diocese of San Fernando(La Union)</label></li>
      <li><input type="radio" id="diocs_name2" name="diocese_name" value="VALUE"><label for="diocs_name2">Diocese of Baguio</label></li>
      <li class="dropdown-header">Region 2</li>
      <li><input type="radio" id="diocs_name3" name="diocese_name" value="VALUE"><label for="diocs_name3">Diocese of Ilagan</label></li>
      <li><input type="radio" id="diocs_name4" name="diocese_name" value="VALUE"><label for="diocs_name4">Diocese of Bayombong</label></li>
      <li class="dropdown-header">Region 3</li>
      <li><input type="radio" id="diocs_name5" name="diocese_name" value="VALUE"><label for="diocs_name5">Diocese of Iba</label></li>
      <li><input type="radio" id="diocs_name6" name="diocese_name" value="VALUE"><label for="diocs_name6">Diocese of San Fernando(Pampanga)</label></li>
      <li><input type="radio" id="diocs_name7" name="diocese_name" value="VALUE"><label for="diocs_name7">Diocese of Tarlac</label></li>
      <li><input type="radio" id="diocs_name8" name="diocese_name" value="VALUE"><label for="diocs_name8">Diocese of Balanga</label></li>
      <li><input type="radio" id="diocs_name9" name="diocese_name" value="VALUE"><label for="diocs_name9">Diocese of Cabanatuan</label></li>
      <li class="dropdown-header">Region 4 A/B</li>
      <li><input type="radio" id="diocs_name10" name="diocese_name" value="VALUE"><label for="diocs_name10">Diocese of Lipa</label></li>
      <li><input type="radio" id="diocs_name11" name="diocese_name" value="VALUE"><label for="diocs_name11">Diocese of Antipolo</label></li>
      <li><input type="radio" id="diocs_name12" name="diocese_name" value="VALUE"><label for="diocs_name12">Diocese of Imus</label></li>
      <li><input type="radio" id="diocs_name13" name="diocese_name" value="VALUE"><label for="diocs_name13">Diocese of San Pablo</label></li>
      <li><input type="radio" id="diocs_name14" name="diocese_name" value="VALUE"><label for="diocs_name14">Diocese of Calapan</label></li>
      <li class="dropdown-header">NCR</li>
      <li><input type="radio" id="diocs_name15" name="diocese_name" value="VALUE"><label for="diocs_name15">Diocese of Manila</label></li>
      <li><input type="radio" id="diocs_name16" name="diocese_name" value="VALUE"><label for="diocs_name16">Diocese of Novaliches</label></li>
      <li><input type="radio" id="diocs_name17" name="diocese_name" value="VALUE"><label for="diocs_name17">Diocese of Caloocan</label></li>
      <li class="dropdown-header">Visayas Region</li>
      <li><input type="radio" id="diocs_name18" name="diocese_name" value="VALUE"><label for="diocs_name18">Diocese of Jaro</label></li>
      <li><input type="radio" id="diocs_name19" name="diocese_name" value="VALUE"><label for="diocs_name19">Diocese of Bacolod</label></li>
      <li><input type="radio" id="diocs_name20" name="diocese_name" value="VALUE"><label for="diocs_name20">Diocese of Tagbilaran</label></li>
      <li><input type="radio" id="diocs_name21" name="diocese_name" value="VALUE"><label for="diocs_name21">Diocese of Capiz</label></li>
      <li class="dropdown-header">Mindanao Region</li>
      <li><input type="radio" id="diocs_name22" name="diocese_name" value="VALUE"><label for="diocs_name22">Diocese of Cagayan De Oro</label></li>
      <li><input type="radio" id="diocs_name23" name="diocese_name" value="VALUE"><label for="diocs_name23">Diocese of Malaybalay</label></li>
      <li><input type="radio" id="diocs_name24" name="diocese_name" value="VALUE"><label for="diocs_name24">Diocese of Iligan</label></li>
      <li><input type="radio" id="diocs_name25" name="diocese_name" value="VALUE"><label for="diocs_name25">Diocese of Zamboanga Sibugay</label></li>
      <!-- Other items -->
    </ul>
  </div>
</div>

  <div class="form-group">
    <br /><br /><br />
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-primary">Add School</button>
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
        <h3 align="left">List of Participating Schools</h3>
        </div>
        <div class="col-sm-offset-2 col-sm-5">
        </div>
        </div>
      <br />
  <div class="table-responsive">
  <table class="table table-hover" style="background-color:#fff;">
  <tr>
    <th>School Name</th>
    <th>Diocese</th>
    <th>Username</th>
    <th>Password</th>
    <th>School Code</th>
    <th></th>
    <th></th>
  </tr>

  <tr>
    <th>201310001</th>
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
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>

  <tr>
    <th>201310001</th>
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
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>

  <tr>
    <th>201310001</th>
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
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>

  <tr>
    <th>201310001</th>
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
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>

  <tr>
    <th>201310001</th>
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
