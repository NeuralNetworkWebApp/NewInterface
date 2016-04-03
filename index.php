<?php
include "setSelectionLists.php";
//let's start the session
session_start();
//finally, let's store our posted values in the session variables
$_SESSION['name'] = "";
$_SESSION['isLoggedIn']=false;
$_SESSION['email'] = "";

?>

<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Landed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
        <script src="js/landing_page_handlers.js"></script>
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Landed</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#"></a></li>
							<li><a href="logIn_SignUp.php" class="button special">LogIn/SignUp</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h3>Predict the secondary structure of proteins</h3>
							<p>Collect results from trained Neural <br />
								 Networks or create your own!</p>
						</header>
						<!--<span class="image"><img src="images/pic01.jpg" alt="" /></span>-->
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!--New Network -->
				<?php if ($_SESSION["isLoggedIn"]) {?>
					<section id="two" class="wrapper style1 special fade-up">
						<div class="container">
							<header>
								<h2>Create your own Network </h2>
							</header>
							<ul class="actions">
								<li><a href="logIn_SignUp.php" class="button">Learn More</a></li>
							</ul>
						</div>
						<a href="#three" style="display: block;" class="goto-next scrolly">Next</a>
					</section>
				<?php }else{?>
					<section id="one" class="wrapper style1 special fade-up">
						<div class="container">
							<header>
								<h2>Create your own Network </h2>
								<p>You have to first Log In or Sign Up</p>
							</header>
							<ul class="actions">
								<li><a href="logIn_SignUp.php" class="button">LogIn/SignUp</a></li>
							</ul>
						</div>
						<a href="#two" style="display: block;" class="goto-next scrolly">Next</a>
					</section>
				<?php }?>

			<!-- Trained Network -->
					<section id="three" class="wrapper style2 special fade-up">
						<div class="container">
							<form action="session.php" method="get">
								<div class="row uniform 50%">
									<header class="major 12u$">
										<h2>Run a trained Neural Network</h2>
										<p>Collect the result set</p>
									</header>
									<div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" />
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="selModel" id="selModel">
												<option value="1" type="text">- Model -</option>
												<?php
												$i=2;
												foreach($ResultModel as $row){
													print '<option value="'.$i++.'" type="text">'.$row['title'].'</option>';
												}
												?>
											</select>
										</div>
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="selTalgorithm" id="selTalgorithm">
												<option value="1" type="text">- Training Algorithm -</option>
												<?php
												$i=2;
												foreach($ResultTrainAlgorithm as $row) {
													print '<option value="'.$i++.' type="text"">'.$row['title'].'</option>';
												}
												?>
											</select>
										</div>
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="selTest" id="selTest">
												<option value="1" type="text">- Test Set -</option>
												<?php
												$i=2;
												foreach($ResultTestSet as $row) {
													print '<option value="'.$i++.' type="text"">'.$row['title'].'</option>';
												}
												?>
											</select>
										</div>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</section>

            <!--Run Trained Algorithm-->
                <section id="two" class="wrapper style1 special fade-up">
                    <div class="container">
                        <header>
                            <h2>Run our trained algorithm.</h2>
                        </header>
                        <div class="row uniform 50%">
                            <div class="6u 12u$(xsmall)">
                                <input type="text" name="name" id="name_trained" value="" placeholder="Name" />
                            </div>
                            <div class="6u$ 12u$(xsmall)">
                                <input type="email" name="email" id="email_trained" value="" placeholder="Email" />
                            </div>
                            <div class="12u$">
                                <ul class="actions">
                                    <li><a href="#"  onClick="runAlgorithm()" class="button">Run</a></li>
<!--                                    <li><a href="logIn_SignUp.php" class="button">Run</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="two" class="wrapper style1 special fade-up">
                    <div class="container">
                        <header>
                            <h2>Retrieve data.</h2>
                        </header>
                        <div class="row uniform 50%">
                            <div class="12u 12u$(xsmall)">
                                <input type="text" name="name" id="md5_password" value="" placeholder="MD5 Hashcode" />
                            </div>

                            <div class="12u$">
                                <ul class="actions">
                                    <li><a href="#"  onClick="retrieveResults()" class="button">Run</a></li>
                                    <!--                                    <li><a href="logIn_SignUp.php" class="button">Run</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>


			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/jquery.dropotron.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
			<script src="js/main.js"></script>

	</body>
</html>