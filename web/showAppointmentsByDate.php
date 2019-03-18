<!DOCTYPE html>
<html>
<head>
	<title>
		Admin Panel | Total HealthCare
	</title>
	
	<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Total HealthCare Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>

<!-- //js -->


<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

<!--start-date-piker-->
	<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			});
		</script>
<!--/End-date-piker-->
	<script src="js/responsiveslides.min.js"></script>
			<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
	
</head>
<body>


<!-- header -->
<div class="header wow zoomIn">
	<div class="container">
		<div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+91 88800 88800</li>
				<li><a href="mailto:total_healthcare@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>total_healthcare@gmail.com</a></li>
			</ul>
		</div>
		<div class="header_right">
			<div class="login">
				<ul>
					<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp Welcome Doctor!</a></li>
					
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->
<div class="header-bottom ">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo grid">
						<div class="grid__item color-3">
							<h1><a class="link link--nukun"><i></i>TOTAL <span>H</span>EALTH<span>C</span>ARE</a></h1>
							<h4><a class="link link--nukun"><i></i> | <span> A</span>DMIN <span>P</span>ANEL</a></h4>
						</div>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--horatio">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><img src = "user-40.png"></li>
							<li class="menu__item"><a href="doctorPanel.php" class="menu__link"> Dashboard </a></li>
							<li class="menu__item"><a href="logoutAdminPanel.php" class="menu__link"> Logout </a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>





<div style = "margin-left:10%;margin-right:10%;">
<?php
	include("connection.php");
	
	$date_to_check = $_POST['date'];
	
	$query = "Select * from `appointmentDetails` WHERE `date_Appt.` = '$date_to_check'";
	
	$result = $connection->query($query);
	
	if(mysqli_query($connection, $query)) {
		
		if($result->num_rows<0) {
			echo "<h3 style = 'text-align:center;'> Sorry no records found </h3>";
			echo mysqli_error($connection);
		}
		else {
			echo "<h3> The Appointments for the date : ".$date_to_check." are shown below (if there exists any) :-</h3><br>";

			echo "<p style = 'font-family:Calibri;'>
				<table class='table table-hover' >
					<tr>
						<th> Name </th>
						<th> Email ID </th>
						<th> Age </th>
						<th> Date of Appoinment (MM/DD/YYYY) </th>
						<th> Department </th>
						<th> Patient ID </th>
						<th> Phone Number </th>
					</tr>";
			while($row = $result->fetch_row()) {
				echo "
						<tr>
							<td> $row[0] </td>
							<td> $row[1] </td>
							<td> $row[2] </td>
							<td> $row[3] </td>
							<td> $row[4] </td>
							<td> $row[5] </td>
							<td> $row[6] </td>
						</tr>
						
				";

			}
						
			echo "</table>
				</p>
			";

		}
	
	}

?>
</div>
<br>


<!-- contact -->
<div class="contact">
	<div class="container">
		
		<div class="col-md-6 contact-right wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h3>Contact Us</h3>
			<div class="strip"></div>
			<ul class="con-icons">
				<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+91 88800 88800</li>
				<li><a href="mailto:total_healthcare@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>total_healthcare@gmail.com</a></li>
			</ul>
			<ul class="fb_icons">
				<li class="hvr-rectangle-out"><a class="fb" href="https://www.facebook.com/total_healthcare"></a></li>
				<li class="hvr-rectangle-out"><a class="twit" href="https://www.twitter.com/Total_HealthCare"></a></li>
				<li class="hvr-rectangle-out"><a class="goog" href="https://plus.google.com/+TotalHealthCare"></a></li>
			</ul>
 
		</div>
		<div class="col-md-6 contact-left wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h2>Information</h2>
			<div class="strip"></div>
			<p class="para">Exceptional Care. Exceptional People.</p>
			<p class="copy-right">© 2017 Total HealthCare. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form action="doctorLogin.php" method="post">
											<div class="sign-in">
												<h4>Email ID:</h4>
												<input style = "color:#000000;" type="text" name="email" id="email" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input style = "color:#000000;" type="password" name="password" id="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												 
											</div>
											 
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									
								 
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>