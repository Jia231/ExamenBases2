<?php
session_start();
if(!isset($_SESSION["Usuario"]) && empty($_SESSION["Usuario"]))
{
    header("Location:Login.php");
}
?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.3/angular-material.min.css" />
    <link href="../CSS/Style.css" rel="stylesheet" />
    <title>
        Panel de Control
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


</head>
<body ng-app="myApp">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    Panel de Control
                </a>
                <div class="navbar-brand pull-right">
                    
                    Bienvenido <?php echo $_SESSION["Usuario"]?>

                   
                </div>
            </div>
        </div>
    </nav>

    <div class="container" ng-view></div>



    <script src="http://code.jquery.com/jquery-3.1.1.js" charset="utf-8"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.js" charset="utf-8"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular-route.min.js" charset="utf-8"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js" charset="utf-8"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.3/angular-material.min.js" charset="utf-8"></script>
    <script src="../JS/config.js"></script>
    <script src="../JS/app.js"></script>
    <script src="../JS/Employee_Directive.js"></script>



</body>



</html>

