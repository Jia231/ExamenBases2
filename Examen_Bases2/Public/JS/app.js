angular.module('myApp')
.controller('AddEmployeeController', function ($scope, $http,$window) {

    $scope.Agregar_Empleado = function () {
        $http({
            url: '../Controller/AgregarEmpleadoController.php',
            method: "POST",
            data: {
                'cedula': $scope.cedula_empleado, 'nombre': $scope.nombre_empleado,
                'apellido':$scope.apellido_empleado,'edad':$scope.edad_empleado,'telefono':$scope.telefono_empleado
            },
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).success(function (data) {
            if (data == true) {
                $window.location.href = 'index.php';
            }
            else {
                $scope.message_text = "alert alert-danger"
                $scope.message = 'Hubo un error al agregar empleado';
            }

        }).error(function () {
            //$scope.changeDir = 'Hubo un error!';
        }
                )
    }
    $scope.Lista_Empleados = function () {
        $http.get('../Controller/MostrarEmpleadoController.php')
             .success(function (data) {
                 // console.log(data);
                 var jsonArr = [];
                 for (var i = 0; i < data.length; i++) {
                     jsonArr.push(data[i]);
                 }
                 console.log(jsonArr);
                 $scope.empleados = jsonArr;


             })
             .error(function () {
                 $scope.list = 'Hubo un error!';
             });
    }


})

.controller('AddUserController', function ($scope,$http,$window) {
    $scope.Agregar_Usuario = function () {
        $http({
            url: '../Controller/AgregarUsuarioController.php',
            method: "POST",
            data: {
                'usuario': $scope.username, 'password': $scope.password,
                'email':$scope.email,'nombre':$scope.Nombre,'apellido':$scope.Apellido
            },
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).success(function (data) {
            if (data == true) {
                $window.location.href = 'Index.php';
            }
            else {
                $scope.message_text = "alert alert-danger"
                $scope.message = 'Hubo un error al agregar empleado';
            }

        }).error(function () {
            //$scope.changeDir = 'Hubo un error!';
        }
                )
    }

    $scope.Lista_Usuarios = function () {
        $http.get('../Controller/MostrarUsuarioController.php')
             .success(function (data) {
                 // console.log(data);
                 var jsonArr = [];
                 for (var i = 0; i < data.length; i++) {
                     jsonArr.push(data[i]);
                 }
                 console.log(jsonArr);
                 $scope.usuarios = jsonArr;


             })
             .error(function () {
                 $scope.list = 'Hubo un error!';
             });
    }
})


