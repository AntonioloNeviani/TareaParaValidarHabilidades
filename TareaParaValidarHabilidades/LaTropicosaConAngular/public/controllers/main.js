angular.module('cassettesController', [])

    .controller('mainController', function ($scope, $http) {

        $http.get('/cassettes')
            .success(function (data) {
                $scope.cassettes = data;
            })
            .error(function (data) {
                console.log('Error: ' + data);
            });

    });