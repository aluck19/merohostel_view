<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Main - Mero Hostel</title>

		<!-- Main Styslesheet -->
		<link rel="stylesheet" href="css/main.css" />
		<!-- Bootstrap CSS -->
		<link href="bootstrap/bootstrap.css" rel="stylesheet">
		<!-- Font-Awesome Icons -->
		<link href="font_awesome/css/font-awesome.css" rel="stylesheet">
		<!-- Semantic CSS -->
		<link href="semantic/dist/semantic.min.css" type="text/css" rel="stylesheet"/>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.address.js"></script>
		<!-- Semantic JS -->
		<script src="semantic/dist/semantic.min.js" type="text/javascript" ></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="bootstrap/html5shiv.min.js"></script>
		<script src="bootstrap/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
    <?php
  		$id=$_GET["id"];
		$conn=new mysqli("localhost","root","iam@@$#!M","merohost_el");

   		$row=$conn->query("SELECT * from Info where id='$id'");
    list($id,$name,$location,$gender,$ownerId,$email,$website,$contact,$additionalInfo,$mainPhotoUrl,$capacity)=$row->fetch_row();
		<div id="header">
			<div id="fixedSearch">
				<div class="container">
					<div class="row">

						<div style="float: left;padding: 14px 14px;margin-top: -15px;background-color: #C14800;margin-bottom: -15px;">
							<a href="first_page.html"> <img src="img/mero-hostel-logo.png"/> </a>
						</div>
						<!-- logo -->

						<div class="ui selection dropdown">
							<input type="hidden" name="gender">
							<i class="dropdown icon"></i>
							<div class="default text">
								Gender
							</div>
							<div class="menu">
								<div class="item" data-value="male" data-text="Male">
									<i class="male icon"></i>
									Male
								</div>
								<div class="item" data-value="female" data-text="Female">
									<i class="female icon"></i>
									Female
								</div>
							</div>
						</div>
						<!-- gender -->

						<div class="ui corner labeled input" style="margin-left: 3px;">
							<div class="ui local search">
								<div class="ui left icon input">
									<i class="world icon"></i>
									<input  style="border-radius: 4px;" type="text" placeholder="Enter Location" class="prompt">
								</div>
							</div>
						</div>
						<!-- location -->

						<div class="ui submit button" style="
						background-color: white;
						color: rgb(239, 103, 47);
						margin-left: 8px;
						" >
							<i class="search icon"></i> Search
						</div>

					</div><!--row -->
				</div><!--container -->

			</div><!-- fixedSearch -->
		</div><!-- header-->

		<div id="wrapper">

			<div id="content">

				<div id="feedback">
					<a href"#"><img src="img/feedback.png" /></a>
				</div>

				<div style="background: #fff;" class="container">

					<div class="row" style="padding: 20px;">

						<div class="col-md-8">
							<h2>A&O Amsterdam Zuidoost</h2>
							<div class="address">
								<a href="#" title="Amsterdam Hostels">Naxal, Kathmandu</a>
							</div>
							<div class="row" style="
							background-color: #f6f6f6;
							padding: 10px 0px;

							">
								<div class="col-md-3">
									<div class="hostelImage">
										<img src="img/hostel.jpg"/>
									</div>
								</div>
								<div class="col-md-9" style="border-left: 2px dotted #ccc;">

									<h4>General Info</h4>
									<p>
										<i class="circular inverted orange  point icon"></i>Location
									</p>
									<p>
										<i class="circular inverted orange  phone square icon"></i> Contact
									</p>
									<p>
										<i class="circular inverted orange  mail  icon"></i>Email
									</p>

								</div>

							</div>
							<!-- internal row 1 -->

							<div class="row ">
								<h3 id="facilities"><a name="facilities" id="facilities"></a>Facilities</h3>

								<div class="facilities">
									<ul class="facilitylist">
										<li>
											24 Hour Reception
										</li>
										<li>
											ATM
										</li>
										<li>
											Breakfast Not Included
										</li>
										<li>
											Elevator
										</li>
										<li>
											Free WiFi
										</li>
										<li>
											Games Room
										</li>
										<li>
											Luggage Storage
										</li>
										<li>
											Parking
										</li>
										<li>
											Reading Light
										</li>
										<li>
											Towels for hire
										</li>
										<li>
											Vending Machines
										</li>
										<li>
											Washing machine
										</li>
										<br style="clear: both;">
									</ul>
								</div>
							</div><!-- row 2 -->

							<div class="row ">
								<h3 id="review"><a name="review" id="review"></a>Submit Review</h3>

								<div class="ui form">

									<div class="field">
										<label>Add New Review</label>
										<textarea></textarea>
									</div>

									<div class="ui orange submit button">
										Submit Review
									</div>
								</div>
							</div><!-- internal row 2 -->

						</div><!-- main column -->

						<div class="col-md-4">
							<h2>Advertisement</h2>
						</div><!-- sidebar -->

					</div><!-- content -->
				</div><!-- container -->
			</div>
			<!-- content -->

			<div id="footer">

				<div id="mainFooter">
					<div class="container">
						<div class="row">
							<div class="col-sm-3">
								<ul>
									<li>
										Company
									</li>
									<li>
										Agreement
									</li>
									<li>
										Privacy
									</li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul>
									<li>
										<i class="fa fa-facebook-square"></i>
										Facebook
									</li>
									<li>
										<i class="fa fa-twitter-square"></i>
										Twitter
									</li>
									<li>
										<i class="fa fa-google-plus-square"></i>
										Google Plus
									</li>
								</ul>
							</div>
							<div class="col-sm-5">
								<ul>
									<li>
										Hosting Partner subisu
									</li>
									<li>
										Copyright © 2015, Sodhpuch Pvt. Ltd.
									</li>
								</ul>
							</div>

						</div><!--row -->
					</div><!--container -->
				</div><!-- mainFooter -->

			</div><!-- footer -->
		</div>

		<!-- Main Script -->
		<script src="js/main.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.js"></script>

	</body>
</html>