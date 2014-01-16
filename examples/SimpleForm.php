	<!doctype html>
	<html ng-app>
	<head>
		<meta charset="utf-8">
		<title>Simple Form</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.4/angular.min.js"></script>
	</head>
	<body>
		<form name="myForm">
			<span ng-show="myForm.$invalid">
	 			Found erros in the form!
	 		</span>
	 		<input type="text" ng-model="name" name="Name" value="Your Name" required />
	 		<button ng-disabled="myForm.$invalid"/>Save</button>
 		</form>
 	</body>
	</html>