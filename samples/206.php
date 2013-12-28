    <!doctype html>
    <html ng-app>
    <head>
    <meta charset="utf-8">
    <title>AngularJS - ng-change</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>

        <div ng-controller="Ctrl">
            <!-- ng-change: TODA VEZ QUE O ELEMENTO É ALTERADO, UMA FUNCAO DEVE SER EXECUTADA -->
            <input ng-model="name" ng-change="loggin()">
            <h1>{{name}}</h1>
            <h2>{{age / 2}}</h2>
        </div>

    <script>
        var Ctrl = function ($scope) {
            $scope.name = "Ral Oliver";
            $scope.age  = 28;

            // AQUI É EXECUTADO O ng-change
            $scope.loggin = function (){
                alert($scope.name);
            };
        };
    </script>
    </body>
    </html>