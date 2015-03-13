'use strict';

angular.module('angularCliente')
  .controller('MainCtrl', function ($scope, $http) {
    $scope.date = new Date();
    $scope.items = []
    $scope.ingresaNum = true;
    //check if is number
    function isInt(value) {
      var er = /^-?[0-9]+$/;
      return er.test(value);
    }
      $scope.getItems = function() {
      if(!isInt($scope.sendIdtarjeta)){
        $scope.despliega = false;
        $scope.invalido = true;
        return false;
      }
       $scope.ingresaNum = false;
       $scope.loading = true;
       $scope.despliega = false;
       $scope.invalido = false;
       $http({method : 'GET',url : 'http://bip-servicio.herokuapp.com/api/v1/solicitudes.json?bip='+$scope.sendIdtarjeta})
          .success(function(data, status) {
              $scope.despliega = true;
              $scope.loading = false;
              $scope.items = data;
              if($scope.items.saldoTarjeta === '---')$scope.items.saldoTarjeta = '$0';
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