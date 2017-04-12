/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function MiControlador($scope){
    $scope.user = {name: "My First", surname: "Angular App"};
}
function MiControlador2($scope){
    $scope.car = {name: "Renault Clio", color: "Blue"};
}

angular.module("MyAplication", [])
        .controller("MiControlador", MiControlador)
        .controller("MiControlador2", MiControlador2);

