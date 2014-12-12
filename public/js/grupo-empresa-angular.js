angular.module('app',[])
.controller('planController', function($scope,$http) {
    $scope.plan=[];
    $scope.addHito=function() {
        $scope.plan.push($scope.hito);
        $scope.hito={
            nombre:"",
            fecha:"",
            entregables:"",
            satisfaccion:""
        };
    };
    $scope.removeHito=function(index) {
        $scope.plan.splice(index,1);
    };
    $scope.sendPlan=function() {
        $http({
            url: '/grupoempresa/planpagos',
            method: "POST",
            data: JSON.stringify($scope.plan),
            headers: {'Content-Type': 'application/json'}
        })
        .success(function (data, status, headers, config) {
            alert('funciono');
        })
        .error(function (data, status, headers, config) {
                  $scope.status = status + ' ' + headers;
        });
    };  
});
