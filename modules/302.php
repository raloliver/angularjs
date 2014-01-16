    <!doctype html>
    <html ng-app>
    <head>
    <meta charset="utf-8">
    <title>AngularJS Dependency Injection</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>

    <div ng-controller="CtrlMcustom">
        Eu sou o <strong>{{nome}}</strong>
    </div>

    <script>
        var CtrlMcustom = function(r) {
            r.nome = "Leonidas";
        };
        
        // AQUI NOS INJETAMOS A DEPENDENCIA
        CtrlMcustom.$inject = ['$scope'];
    </script>
    </body>
    </html>