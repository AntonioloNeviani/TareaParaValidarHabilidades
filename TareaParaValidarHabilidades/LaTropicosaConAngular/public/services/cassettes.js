angular.module('cassettesService', [])
    .factory('cassettes', function ($http) {
        return {
            get: function () {
                return $http.get('/cassettes');
            },
            create: function (newCassettes) {
                return $http.post('/cassettes', newCassettes);
            },
            delete: function (id) {
                console.log(id);
                return $http.delete('/delete/' + id);
            },
            edit: function (editCassettes) {
                return $http.put('/edit/', editCassettes);
            }
        }
    });