    <!doctype html>
    <html ng-app>
    <head>
    <title>AngularJS Watch</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>
        <div ng-controller="CtrlApp">
            <input type="text" ng-model="nome">
            <h1>{{nome}}, {{idade}} - {{cidade}}</h1>
        </div>
        <div ng-controller="CtrlApp2">
            <h3>{{nome}}, {{idade}} - {{cidade}}</h3>
        </div>
    <script>
        var CtrlApp = function($scope) {
            $scope.nome = "Ral";
            $scope.idade = 28;
            $scope.cidade = "Curitiba";
            $scope.$watch('nome', function(){
                console.log ($scope.nome);
            })            
        };
        var CtrlApp2 = function($scope) {
            $scope.nome = "Fernanda";
            $scope.idade = 26;
            $scope.cidade = "Amargosa";            
        };
    </script>
    </body>
    </html>