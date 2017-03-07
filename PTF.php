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

    <title>Pre-Awareness Testing Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">

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

	<!--Pre-Awareness Testing Form -->
  <div class="container-fluid green" style="font-family:mySecondFont;" align="center">
    <div class="row">
    <div class="col-md-offset-1 col-md-10 col-md-offset-1">

  <div class="well well-sm">

	<div class="row">
	<div class="col-sm-4">
    <h4 style="font-family:papyrus;" align="left"><b>Sons and Daughters of OFW</b></h4>
  </div>
  <div class="col-sm-offset-4 col-sm-4">
    <h5 align="right"><b>ECMI INSTRUMENT 2A</b></h5>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-4">
    <h5 align="left"><b>Pre-Awareness Test(PAT)</b></h5>
  </div>
  </div>
  <hr />
  <div class="well">
    <div class="row">
      <div class="col-md-12">
        <form action="" class="form-inline">
          <div class="row">
  				<div class="form-group">
            <?php
                  $username = ($_SESSION['username']);
                  $password = ($_SESSION['password']);
                  $stud=mysqli_query($db,"SELECT fname,mname,lname,g_level,gender,age
                  FROM student
                  JOIN account
                  ON student.account_id=account.account_id
                  WHERE account.username='$username' and account.pword='$password'");
                  $stud_det=mysqli_fetch_row($stud);
            ?>
  					<label for="name">Pangalan: </label>
  					<?php echo $stud_det[0]." ".$stud_det[1]." ".$stud_det[2]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?>
            <label for="age">Edad:</label>
            <?php echo $stud_det[3]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?>
            <label for="gender">Kasarian:</label>
            <?php echo $stud_det[4]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?>
            <label for="grade">Baitang:</label>
            <?php echo $stud_det[5]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?>
  				</div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form action="" class="form-inline">
          <div class="form-group">
            <label for="parentgender">Magulang na nagtatrabaho sa ibang bansa(Tatay/Nanay/Pareho):</label>
            <select name="parent" id="parentgender" class="form-control input-sm">
            <option value="">Pumili...</option>
            <option value="nanay">Nanay</option>
            <option value="tatay">Tatay</option>
            <option value="pareho">Pareho</option>
            </select>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form action="" class="form-inline">
          <div class="form-group">
            <label for="parent_country">Saang bansa nagtatrabaho:</label>
            <select name="country" id="parent_country" class="form-control input-sm">
            <option value="">Pumili...</option>
            <option value="AF">Afghanistan</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AG">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AG">Antigua &amp; Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AA">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia</option>
            <option value="BL">Bonaire</option>
            <option value="BA">Bosnia &amp; Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BR">Brazil</option>
            <option value="BC">British Indian Ocean Ter</option>
            <option value="BN">Brunei</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="CA">Canada</option>
            <option value="IC">Canary Islands</option>
            <option value="CV">Cape Verde</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CD">Channel Islands</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CI">Christmas Island</option>
            <option value="CS">Cocos Island</option>
            <option value="CO">Colombia</option>
            <option value="CC">Comoros</option>
            <option value="CG">Congo</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CT">Cote D'Ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CB">Curacao</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="TM">East Timor</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FA">Falkland Islands</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="FS">French Southern Ter</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GB">Great Britain</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GN">Guinea</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HW">Hawaii</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IA">Iran</option>
            <option value="IQ">Iraq</option>
            <option value="IR">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="NK">Korea North</option>
            <option value="KS">Korea South</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Laos</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macau</option>
            <option value="MK">Macedonia</option>
            <option value="MG">Madagascar</option>
            <option value="MY">Malaysia</option>
            <option value="MW">Malawi</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="ME">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="MI">Midway Islands</option>
            <option value="MD">Moldova</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Nambia</option>
            <option value="NU">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="AN">Netherland Antilles</option>
            <option value="NL">Netherlands (Holland, Europe)</option>
            <option value="NV">Nevis</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NW">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau Island</option>
            <option value="PS">Palestine</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PO">Pitcairn Island</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="ME">Republic of Montenegro</option>
            <option value="RS">Republic of Serbia</option>
            <option value="RE">Reunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russia</option>
            <option value="RW">Rwanda</option>
            <option value="NT">St Barthelemy</option>
            <option value="EU">St Eustatius</option>
            <option value="HE">St Helena</option>
            <option value="KN">St Kitts-Nevis</option>
            <option value="LC">St Lucia</option>
            <option value="MB">St Maarten</option>
            <option value="PM">St Pierre &amp; Miquelon</option>
            <option value="VC">St Vincent &amp; Grenadines</option>
            <option value="SP">Saipan</option>
            <option value="SO">Samoa</option>
            <option value="AS">Samoa American</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome &amp; Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="OI">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syria</option>
            <option value="TA">Tahiti</option>
            <option value="TW">Taiwan</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania</option>
            <option value="TH">Thailand</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad &amp; Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TU">Turkmenistan</option>
            <option value="TC">Turks &amp; Caicos Is</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States of America</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VS">Vatican City State</option>
            <option value="VE">Venezuela</option>
            <option value="VN">Vietnam</option>
            <option value="VB">Virgin Islands (Brit)</option>
            <option value="VA">Virgin Islands (USA)</option>
            <option value="WK">Wake Island</option>
            <option value="WF">Wallis &amp; Futana Is</option>
            <option value="YE">Yemen</option>
            <option value="ZR">Zaire</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
            </select>
            <label for="parent_work">Anong trabaho:</label>
            <input type="text" id="parent_work" class="form-control input-sm">
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form action="" class="form-inline">
          <div class="form-group">
            <label for="duration">Ilang taon ng nagtatrabaho sa ibang bansa:</label>
            <select name="duration" id="duration" class="form-control input-sm">
            <option value="">Pumili...</option>
            <option value="1-3">1-3 years</option>
            <option value="4-6">4-6 years</option>
            <option value="7-10">7-10 years</option>
            <option value="11-15">11-15 years</option>
            <option value="16-20">16-20 years</option>
            </select>
            <label for="when">Gaano kadalas umuwi:</label>
            <select name="when" id="when" class="form-control input-sm">
            <option value="">Pumili...</option>
            <option value="1">1 beses sa isang taon</option>
            <option value="2">2 beses sa isang taon</option>
            <option value="3">3 beses sa isang taon</option>
            <option value="4">4 beses sa isang taon</option>
            <option value="5">5 beses sa isang taon</option>
            </select>
          </div>
        </form>
      </div>
    </div>

  </div>
  </div>

<h4 align="center">Piliin ang mga naaangkop na sagot.</h4>
<p >
1.	Nang unang umalis papuntang ibang bansa ang iyong magulang. Ano ang iyong nararamdaman?
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
<div class="input-field" align="left">
  <p>
    <input id="a1" type="radio" name="q1" value="a" checked>
    <label for="a1">a. galit</label>
  </p>
  <p>
    <input id="b1" type="radio" name="q1" value="b" checked/>
    <label for="b1">b. masaya</label>
  </p>
  <p>
    <input id="c1" type="radio" name="q1" value="c" checked/>
    <label for="c1">c. malungkot</label>
  </p>
  <p>
    <input id="d1" type="radio" name="q1" value="d" checked/>
    <label for="d1">d. walang nararamdaman</label>
  </p>
  <p>
    <input id="e1" type="radio" name="q1" value="e" checked/>
    <label for="e1">e. masama ang loob</label>
  </p>
</div>
</div>
</div>
<br />
<p >
  2.   Kapag dumarating ang iyong magulang mula sa ibang bansa, ano ang iyong
             nararamdaman?
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a2" type="radio" name="q2" value="a" checked>
      <label for="a2">a. galit</label>
    </p>
    <p>
      <input id="b2" type="radio" name="q2" value="b" checked/>
      <label for="b2">b. masaya</label>
    </p>
    <p>
      <input id="c2" type="radio" name="q2" value="c" checked/>
      <label for="c2">c. malungkot</label>
    </p>
    <p>
      <input id="d2" type="radio" name="q2" value="d" checked/>
      <label for="d2">d. walang nararamdaman</label>
    </p>
    <p>
      <input id="e2" type="radio" name="q2" value="e" checked/>
      <label for="e2">e. masama ang loob</label>
    </p>
  </div>
</div>
</div>
<br />
<p>
3.   Tuwing muling umaalis ang iyong magulang, ano ang iyong pakiramdam?</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a3" type="radio" name="q3" value="a" checked>
      <label for="a3">a. galit</label>
    </p>
    <p>
      <input id="b3" type="radio" name="q3" value="b" checked/>
      <label for="b3">b. masaya</label>
    </p>
    <p>
      <input id="c3" type="radio" name="q3" value="c" checked/>
      <label for="c3">c. malungkot</label>
    </p>
    <p>
      <input id="d3" type="radio" name="q3" value="d" checked/>
      <label for="d3">d. walang nararamdaman</label>
    </p>
    <p>
      <input id="e3" type="radio" name="q3" value="e" checked/>
      <label for="e3">e. masama ang loob</label>
    </p>
  </div>
</div>
</div>
<br />
<p >
4.   Sa papaanong paraan ka nakikipag-usap sa iyong magulang sa ibang bansa?</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">

  <div class="input-field" align="left">
    <p>
      <input id="a4" type="radio" name="q4" value="a" checked>
      <label for="a4">a. sulat</label>
    </p>
    <p>
      <input id="b4" type="radio" name="q4" value="b" checked/>
      <label for="b4">b. telepono</label>
    </p>
    <p>
      <input id="c4" type="radio" name="q4" value="c" checked/>
      <label for="c4">c. cellphone</label>
    </p>
    <p>
      <input id="d4" type="radio" name="q4" value="d" checked/>
      <label for="d4">d. voice tape</label>
    </p>
    <p>
      <input id="e4" type="radio" name="q4" value="e" checked/>
      <label for="e4">e. email</label>
    </p>
  </div>
</div>
</div>
<br />
<p>
5.	Ano ang iyong mensahe kung ikaw ay nakikipag-usap sa iyong magulang sa ibang bansa?
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">

  <div class="input-field" align="left">
    <p>
      <input id="a5" type="radio" name="q5" value="a" checked>
      <label for="a5">a. masasayang balita tungkol sa pag-aaral at ng pamilya</label>
    </p>
    <p>
      <input id="b5" type="radio" name="q5" value="b" checked/>
      <label for="b5">b. di magagandang balita tungkol sap ag-aaral at ng pamilya</label>
    </p>
    <p>
      <input id="c5" type="radio" name="q5" value="c" checked/>
      <label for="c5">c. humihingi na padalhan ng mga gamit at pera</label>
    </p>
  </div>
</div>
</div>
<br />
<p>
6.	Sa palagay mo, ano ang dahilan kung bakit pumunta ang iyong magulang sa ibang bansa?
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">

  <div class="input-field" align="left">
    <p>
      <input id="a6" type="radio" name="q6" value="a" checked>
      <label for="a6">a. Walang trabaho sa Pilipinas</label>
    </p>
    <p>
      <input id="b6" type="radio" name="q6" value="b" checked/>
      <label for="b6">b. Maliit ang kita sa Pilipinas</label>
    </p>
    <p>
      <input id="c6" type="radio" name="q6" value="c" checked/>
      <label for="c6">c. Penitisyon ng kamag-anak</label>
    </p>
  </div>

</div>
</div>
<br />
<p>
7.	Ang pagpunta ba ng iyong magulang sa ibang bansa ay kagustuhan ng buong pamilya?
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">

  <div class="input-field" align="left">
    <p>
      <input id="a7" type="radio" name="q7" value="a" checked>
      <label for="a7">a. Oo</label>
    </p>
    <p>
      <input id="b7" type="radio" name="q7" value="b" checked/>
      <label for="b7">b. Hindi</label>
    </p>
    <p>
      <input id="c7" type="radio" name="q7" value="c" checked/>
      <label for="c7">c. Di-tiyak</label>
    </p>
  </div>
</div>
</div>
<p>
8.	Alam mo ba ang nangyayari sa iyong magulang sa ibang bansa?
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a8" type="radio" name="q8" value="a" checked>
      <label for="a8">a. Oo</label>
    </p>
    <p>
      <input id="b8" type="radio" name="q8" value="b" checked/>
      <label for="b8">b. Hindi</label>
    </p>
    <p>
      <input id="c8" type="radio" name="q8" value="c" checked/>
      <label for="c8">c. Di-tiyak</label>
    </p>
  </div>
</div>
</div>
<p>
9. Kung ikaw ay bibigyan ng pagkakataong magtrabaho sa ibang bansa, ito ba ay iyong pipiliin?
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a9" type="radio" name="q9" value="a" checked>
      <label for="a9">a. Oo</label>
    </p>
    <p>
      <input id="b9" type="radio" name="q9" value="b" checked/>
      <label for="b9">b. Hindi</label>
    </p>
    <p>
      <input id="c9" type="radio" name="q9" value="c" checked/>
      <label for="c9">c. Di-tiyak</label>
    </p>
  </div>
</div>
</div>

  </div>
	</div>
</div>


<!--Pre-Awareness Button  -->
<div class="container">
	<div class="row">
	<div class="col-sm-offset-5 col-sm-2 col-sm-offset-5" align="middle">
	<a href="" class="btn btn-primary btn-lg" align="center" name=submit>Submit</a>
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

</body>
</html>
