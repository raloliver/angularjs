    <!doctype html>
    <html ng-app>
    <head>
    <meta charset="utf-8">
    <title>AngularJS (ng-options)</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>

        Pesquisa: <input type="search" ng-model="busca">

        <div ng-controller="CtrlList">
        
        Defina o Perfil:
        <select ng-model="selected" 
                ng-options="item.nome for item in perfil | filter:busca" >
            <option value="">Escolher Perfil</option>
        </select>
        <hr>
        <div>
            Nome: <input type="text" ng-model="selected.nome">
            <br>
            Cidade: <input type="text" ng-model="selected.cidade">
            <br>
        </div>

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