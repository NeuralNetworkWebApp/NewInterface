<?php
/**
 * Created by PhpStorm.
 * User: Irene
 * Date: 18-Jan-16
 * Time: 3:15 PM
 */
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>First Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    <script src="js/handleRegistration.js"></script>
    <script src="js/handleLogIn.js"></script>

</head>
<body>

<!-- Mixins-->
<!-- Pen Title-->
<!--<div class="pen-title">-->
<!--<h1>Material Login Form</h1>-->
<!--<span>Pen <i class='fa fa-code'></i> by <a href='http://andytran.me'>Andy Tran</a></span>-->
<!--</div>-->
<div class="rerun"><a href="">Rerun Pen</a></div>
<div class="container">
    <div class="card"></div>
    <div class="card">
        <h1 class="title">Welcome !!!</h1>
        <h3>You can either run a train Network or you can actually make your own :</h3>
        <!--Run a Network-->

        <form id="runNetwork_form" method="post" action="session.php">
            <div class="row">
                <div class="button-container col-xs-2 col-md-4">
                    <button ><span>Run Train Network !</span></button>
                </div>
                <div class="button-container col-xs-6 col-sm-4">
                    <button ><span>Customize a Network !</span></button>
                </div>
            </div>

        </form>
    </div>

</div>

<!--<a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>-->
<!--<a id="codepen" href="http://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>