angular.module('app',['ui.sortable'])
.controller('planController', function($scope) {
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
});
