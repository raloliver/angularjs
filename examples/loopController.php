	<!doctype html>
	<html ng-app>
	<head>
		<meta charset="utf-8">
		<title>Loop Controller</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.4/angular.min.js"></script>
		<script src="js/loopController.js"></script>
	</head>
		<body ng-controller="loopController">
			<ul>
				<li ng-repeat="fruit in fruits">{{fruit}}</li>
			</ul>
		</body>
	</html>