'use strict';

angular.module('angularCliente')
  .controller('MainCtrl', function ($scope, $http) {
    $scope.date = new Date();
    $scope.items = []
    $scope.ingresaNum = true;
    //check if is number
    function isNumber(obj) { return !isNaN(parseFloat(obj)) }

      $scope.getItems = function() {
      if(!isNumber($scope.sendIdtarjeta)){
        $scope.despliega = false;
        $scope.invalido = true;
        return false;
      }
       $scope.ingresaNum = false;
       $scope.loading = true;
       $scope.despliega = false;
       $scope.invalido = false;
       $http({method : 'GET',url : 'http://bip-servicio.herokuapp.com/api/consulta/tarjeta/'+$scope.sendIdtarjeta})
          .success(function(data, status) {
              $scope.despliega = true;
              $scope.loading = false;
              $scope.items = data;
              if($scope.items == 'ID de la tarjeta invalido'){
                $scope.despliega = false;
                $scope.invalido = true;
              }
           })
          .error(function(data, status) {
            $scope.loading = false;
            $scope.despliega = false;
            $scope.invalido = true;
          })
      }


});