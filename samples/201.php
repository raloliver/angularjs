    <!doctype html>
    <html ng-app>
    <head>
    <title>AngularJS Diretivas</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>
        <p>Por favor, informe seu nome e marque a consulta</p>
        <input type="text" ng-model="nome">
        <input type="checkbox" ng-model="checked"> Agendar
        <div ng-show="checked">
            X Consulta do Sr(a) {{nome}} marcada.
        </div>
    </body>
    </html>