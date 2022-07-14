var app = angular.module('myApp', []);

app.controller('mainCtrl', function ($scope){

    $scope.helloTo = {};
    $scope.helloTo.title = "Anders Selborn";

    $scope.globalFunction = {};

    $scope.globalFunction.stationList  =
    [
        {"stationId": 1, "stationName" : "station 1"},
        {"stationId": 2, "stationName" : "station 2"},
        {"stationId": 3, "stationName" : "station 3"},
        {"stationId": 4, "stationName" : "station 4"},
        {"stationId": 5, "stationName" : "station 5"}
    ]

    $scope.globalFunction.TestButton = function (msg){

        alert('Hello World input was> ' + msg);
        
    };


    $scope.globalFunction.GetStations = function(){

        $http.get('../php/fetch.php').success(function(data){

            $scope.globalFunction.GetStations = data;

        });


    };

    


});