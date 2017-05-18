angular.module('EmployeeDirective',[])
.directive('employeePhoneNumber', function () {
    return {
        restrict: 'A',
        link: function (scope, element, attr) {
            element.on('keyup', function () {
                var a = element.val();
                if (a.length > 9) {
                    element.css('border','1px solid red');
                } else {
                    element.css('border', '1px solid #ccc');
                }
            })
        }
    }
})


