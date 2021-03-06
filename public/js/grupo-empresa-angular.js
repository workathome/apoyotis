angular.module('app',[])
.controller('planController', function($scope,$http) {
    $scope.hitosucces=false;
    $scope.hitoerror=false;
    $scope.plan=[];
    $scope.addHito=function() {
        $scope.hito.fecha=angular.element('#fecha').val();
        $scope.plan.push($scope.hito);
        $scope.hito={
            nombre:"",
            fecha:"",
            entregables:"",
            porcentaje:""
        };
    };
    $scope.removeHito=function(index) {
        $scope.plan.splice(index,1);
    };
    $scope.sendPlan=function() {
        $http({
            url: '/grupoempresa/planpagos',
            method: "POST",
            data: angular.toJson($scope.plan),
            headers: {'Content-Type': 'application/json'}
        })
        .success(function (data, status, headers, config) {
            $scope.hitosucces=true;
            $scope.hitoerror=false;
        })
        .error(function (data, status, headers, config) {
            $scope.status = status + ' ' + headers;
            $scope.hitosucces=false;
            $scope.hitoerror=true;
        });
    };  
})
.controller('actividadesCtrl', function($scope) {
    $scope.actividades=[];
    $scope.addActividad=function() {
        $scope.actividades.push($scope.actividad);
        $scope.actividad={
            nombre:"",
            fecha:"",
            descripcion:"",
            global:false,
            respuesta:false
        };
    }
    $scope.nombre="hola";
})
.controller('actividades-grupoCtrl', function($scope) {
    $scope.actividades=[];
    $scope.addRespuesta=function() {
        $scope.respuesta.fecha= new Date();
        $scope.actividades.push($scope.respuesta);
        $scope.respuesta={
            titulo:"",
            descripcion:"",
            documento:""
        };
    }
});
