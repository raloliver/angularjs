    <!doctype html>
    <html ng-app="Mcustom">
    <head>
    <meta charset="utf-8">
    <title>AngularJS Modules</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>

    <div ng-controller="CtrlMcustom">
        Eu sou o <strong>{{nome}}</strong>
    </div>

    <script>
        angular.module('Mcustom', [])
        .controller('CtrlMcustom', function($scope) {
            $scope.nome = "Oliver";
        });
    </script>
    </body>
    </html>