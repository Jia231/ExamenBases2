angular.module('myApp', ['ngRoute', 'EmployeeDirective']);

angular.module('myApp')
.config(function ($routeProvider) {
    $routeProvider
    .when('/', {
        controller: "",
        templateUrl: "../View/MainMenu.php"
    })
     .when('/Add_Usuario', {
         controller: "AddUserController",
         templateUrl: "../View/Add_User.php"
     })
    .when('/Add_Empleado', {
        controller: "AddEmployeeController",
        templateUrl: "../View/Add_Employee.php"
    })
    .when('/Mostrar_Empleados', {
        controller: "AddEmployeeController",
        templateUrl: "../View/Show_Employee.php"
    })
    .when('/Mostrar_Usuarios', {
        controller: "AddUserController",
        templateUrl: "../View/Show_Users.php"
    })
   .otherwise({
       redirectTo: '/'
   });
})