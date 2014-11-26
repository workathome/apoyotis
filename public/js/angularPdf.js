var app=angular.module("generador",['ui.bootstrap']);

app.controller("pdfController",function($scope) {
    $scope.mensaje="hola mundo!";
    $scope.fileExists = function() {
        var http = new XMLHttpRequest();
        http.open('HEAD', '/latex/plantilla.pdf', false);
        http.send();
        return http.status!=404;
    }
    $scope.navi=1;
});
