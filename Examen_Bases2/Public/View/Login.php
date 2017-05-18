
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="../CSS/Style.css" rel="stylesheet" />
    
</head>
<body ng-app="LoginController">
    <div class="container" ng-controller="myLogin">
        <form name="userForm">
            <h1>Login</h1>
            <p ng-class="message_text">{{message}}</p>
            <p>Username</p>
            <input type="text" class="form-control" name="user" ng-model="user" required />
            <p>Password</p>
            <input type="password" class="form-control" ng-model="pass" required />
            <p>
                <input type="submit" ng-disabled="userForm.$invalid" class="btn btn-primary btn-lg" ng-click="Validar()" value="Ingresar" />
            </p>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
    <script src="../JS/LoginController.js"></script>
</body>
</html>