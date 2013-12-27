    <!doctype html>
    <html ng-app>
    <head>
    <meta charset="utf-8">
    <title>AngularJS Filtro de Lista</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    Pesquisa: <input type="text" ng-model="busca">
    <body>
        <div ng-controller="CtrlList">
            <ul>
                <li ng-repeat="item in perfil | filter:busca">
                    {{item.nome}}, <strong>{{item.cidade}}</strong>
                </li>
            </ul>
        </div>
    <script>
        var CtrlList =function ($scope){
            // ARRAY
            $scope.perfil = [
                {nome: "Maria", cidade: "Salvador"},
                {nome: "João", cidade: "Curitiba"},
                {nome: "Antonio", cidade: "Natal"},
                {nome: "José", cidade: "São Paulo"},
            ];
        };
    </script>
    </body>
    </html>