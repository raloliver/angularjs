	<!doctype html>
	<html ng-app>
	<head>
		<meta charset="utf-8">
		<title>Simple Controller</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.4/angular.min.js"></script>
		<script src="simpleController.js"></script>
	</head>
		<body ng-controller="simpleController">
			Hello <input type="text" ng-model="user.name"/>
		<hr/>
			<h1>Hello {{user.name}}</h1>
		</body>
	</html>