    <!doctype html>
    <html ng-app>
    <head>
     <meta charset="utf-8">
    <title>AngularJS - Controllers</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>

        <div ng-controller="Ctrl">
            <input ng-model="name">
            <h1>{{name}}</h1>
            <h2>{{age / 2}}</h2>
        </div>

        <div ng-controller="AnotherCtrl">
            <input ng-model="name">
            <h1>{{name}}</h1>
            <h2>{{age}}</h2>
        </div>

    <script>
        var Ctrl = function ($scope) {
            $scope.name = "Ral Oliver";
            $scope.age  = 28;
        };

        var AnotherCtrl = function ($scope) {
            $scope.name = "Israel Oliveira";
            $scope.age  = 28;
            $scope.$watch('name', function () {
                console.log($scope.name);
            });
        };
    </script>
    </body>
    </html>