	<!doctype html>
	<html ng-app>
	<head>
		<meta charset="utf-8">
		<title>Count Controller</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.4/angular.min.js"></script>
		<script src="js/countController.js"></script>
	</head>
		<body ng-controller="countController">
			<a href="#" ng-click="addOne()">Add 1</a>
		<hr/>
			<p>Counter value: {{counter}}</p>
		</body>
	</html>