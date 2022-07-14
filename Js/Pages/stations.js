
app.controller('stationCtrl', function($scope, $http){

    $scope.pageTitle= {};
    $scope.pageTitle = 'SMHI station lists from DB';
    $scope.curPage = 1;
    $scope.itemsPerPage = 3;
    $scope.maxSize = 5;

    $scope.fetchStations = function() {

        var path = window.location.href;

        $http.get('./php/fetch.php').then(function (data) {
            $scope.stationer = data.data;
        }
        
    )};

    //Number of pages.
    $scope.numberOfPages = function(){
        
    }

    //TestButton.
    $scope.TestButton = function (msg){

        alert('Hello World input was >>' + msg);
        
    };

    $scope.RowClick = function(msg){
        alert('Row Click id => ' + msg);
    }
});