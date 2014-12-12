app = angular.module("app",[]);

app.controller('planController', function($scope) {
    $scope.plan=[];
    $scope.addHito=function() {
        $scope.plan.push($scope.hito);
        $scope.hito={
            fecha='';
            entregables='';
            satisfaccion='';
        };
    };
    $scope.removeHito=function(index) {
        $scope.plan.splice(index,1);
    };
});
