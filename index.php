<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>My First Angular App</title>
        <link rel="stylesheet" href="vendor/foundation-6/css/foundation.css">
        <link rel="stylesheet" href="vendor/foundation-6/css/app.css">
    </head>
    <body  ng-app="MyAplication">
        <header></header>
        <section ng-controller="MiControlador">
            <h1>Hello {{user.name}} {{user.surname}} !!</h1>
        </section>
        <section ng-controller="MiControlador2">
            <h1>Hello {{car.name}} {{car.color}} !!</h1>
        </section>
        <footer></footer>
    </body>
    <script src="vendor/foundation-6/js/jquery.js"></script>
    <script src="vendor/foundation-6/js/what-input.js"></script>
    <script src="vendor/foundation-6/js/foundation.js"></script>
    <script src="vendor/angular/angular.min.js"></script>
    <script src="js/app.js"></script>
</html>
