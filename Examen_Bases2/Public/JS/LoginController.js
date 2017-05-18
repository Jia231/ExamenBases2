angular.module('LoginController', [])
.controller('myLogin', function ($scope, $http, $window) {
    
    $scope.Validar = function () {
        if ($scope.user != null || $scope.pass != null) {
            $http({
                url: '../Controller/ValidarUsuario.php',
                method: "POST",
                data: { 'usuario': $scope.user, 'password': $scope.pass },
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            }).success(function (data) {
                if (data == true) {
                    //$scope.message = "Usuario encontrado";
                    $window.location.href = 'index.php';
                }
                else {
                    $scope.message_text = "alert alert-danger"
                    $scope.message = 'Usuario o contraseña invalida';
                    $scope.user = "";
                    $scope.pass = "";
                }

            }).error(function () {
                //$scope.changeDir = 'Hubo un error!';
            }
                )
        }
        else {
            $scope.errorValidacion = "Por favor indique un usuario y contraseña";
        }
    }

})

