
/*
    Station controller.
*/
app.controller('stationCtrl', function($scope, $http){

    $scope.pageTitle= {};
    $scope.pageTitle = 'Meterologiska stationer fran SMHI';
    $scope.curPage = 1;
    $scope.itemsPerPage = 3;
    $scope.maxSize = 5;

    //Hämtar stationer via php. Objectet heter stationer!.
    $scope.fetchStations = function() {

        var path = window.location.href;

        $http.get('./php/fetch_stationlist_pg.php').then(function (data) {
            $scope.stationer = data.data;
        }
        
    )};

    //Number of pages.
    $scope.numOfPages = function(){
        $scope.page_count = 10;
    }

    //TestButton.
    $scope.TestButton = function (msg){

        alert('Hello World input was >>' + msg);
        
    };

    $scope.RowClick = function(msg){
        console.log(msg);
        alert('Row Click id => ' + msg);
    }

    $scope.toggleOnOff = function(data, active, parameter){
        console.log(data, active, parameter);

        var phpLink = "./php/toggle_station.php";
        const header = new Headers();
        header.append("Content-Type", 'application/json');
        let phpData = {station: data, setting: active, prm: parameter};

        $http({
            
            method: 'POST',
            url: phpLink,
            data: phpData
        }).then(function(response){
            $scope.data = response.data;
        }).catch(function(err){
            $scope.status = err.status;
            throw err;
        });    
    } 
});