    <!doctype html>
    <html ng-app>
    <head>
    <meta charset="utf-8">
    <title>AngularJS Eventos de Clique (ng-click)</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <!-- ESSA BUSCA FICOU FORA PARA PESQUISAR EM TODOS OS CONTROLLERS (ROOT MODE) -->
    Pesquisa: <input type="text" ng-model="busca">
    <body>

        <div ng-controller="CtrlList">
             <div>Total: <strong>{{perfil.length}}</strong></div>
            <ul>
                <li ng-repeat="item in perfil | filter:busca">
                    {{item.nome}}, <strong>{{item.cidade}}</strong>
                    <!-- $ SIGNIFICA A CONTAGEM DE ITENS -->
                    <button ng-click="remover($index)">Remover</button>
                </li>
            </ul>          

            <div>
                Nome: <input type="text" ng-model="vNome">
                <br>
                Cidade: <input type="text" ng-model="vCidade">
                <br>
                <button ng-click="adicionar()">Adicionar</button>
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
            // ADICIONAR
            $scope.adicionar = function() {
                $scope.perfil.push({
                    nome: $scope.vNome, 
                    cidade: $scope.vCidade
                });
            // LIMPAR CAMPOS
                $scope.vNome = "";
                $scope.vCidade = "";
            };
            // REMOVER
                // NESSE CASO NÃO PRECISA DO $ PQ O ANGULAR PASSA A ENTRADA NO INPUT
                $scope.remover = function(index){
                    $scope.perfil.splice(index, 1);
                };
        };
    </script>
    </body>
    </html>