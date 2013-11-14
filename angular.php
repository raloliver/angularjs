    <!doctype html>
    <html ng-app>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>
    <div>
    <label>Mensagem:</label>
    <input type="text" ng-model="mensagem" placeholder="Escreva aqui sua mensagem">
    <label>Nome:</label>
    <input type="text" ng-model="nome" placeholder="Digite seu Nome aqui">
    <hr>
    <h3>{{mensagem}} {{nome}}.</h3>
    </div>
    </body>
    </html>