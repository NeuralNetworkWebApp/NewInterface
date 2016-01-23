<?php
include "MySqlConnect.php";
include "setSelectionLists.php";
//let's start the session
/*session_start();
//finally, let's store our posted values in the session variables
$_SESSION['name'] = $_POST['name'];
$_SESSION['password'] = $_POST['email_address'];
        ....(from log IN)
*/
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Material Login Form</title>
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
        <h1 class="title">Create your own Network</h1>

        <!--Choose Model/Training Algorithm Form-->

        <form id="createNetwork_form" method="post" action="session.php">
            <div class="input-container">
                <!-- <input type="text" id="username_login" required="required"/>
                 <label for="Username">Username</label>
                 <div class="bar"></div>-->
                <div class="form-group">
                    <label for="selModel">Model:</label>
                    <br><br><br><br>
                    <select class="form-control" name="selModel" id="selModel">
                        <?php
                        foreach ($conn->query($sqlModel) as $rowModel) {
                            print "<option>" .  $rowModel['title'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="input-container">
                <label for="selAlgorithm">Training Algorithm:</label>
                <br><br><br><br>
                <select class="form-control" name="selAlgorithm" id="selAlgorithm">
                    <?php
                    foreach ($conn->query($sqlTAlgorithm) as $rowTAlgorithm) {
                        print "<option>" .  $rowTAlgorithm['title'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="input-container">
                <label for="selTrainSet">Training Set:</label>
                <br><br><br><br>
                <select class="form-control" name="selTrainSet" id="selTrainSet">
                    <?php
                    foreach ($conn->query($sqlTrain) as $rowTrain) {
                        print "<option>" .  $rowTrain['title'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="input-container">
                <label for="selTestSet">Testing Set:</label>
                <br><br><br><br>
                <select class="form-control" name="selTestSet" id="selTestSet">
                    <?php
                    foreach ($conn->query($sqlTest) as $rowTest) {
                        print "<option>" .  $rowTest['title'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="button-container">
                <button type="submit"><span>Next</span></button>
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