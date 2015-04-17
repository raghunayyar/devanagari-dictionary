var app = angular.module('DictionaryApp', ['ngRoute']);

app.controller('SearchController', ['$scope',
	function($scope) {

		$scope.listoflanguages = [
			{ language: 'Hindi', value: '1'},
			{ language: 'Marathi', value: '2' },
			{ language: 'Sanskrit', value: '3'}
		];

		$scope.listofcombinations = [
			{ value: '1' },
			{ value: '2' },
			{ value: '3' },
			{ value: '4' }
		];

		/*
			Reset checkboxes
		*/

		$scope.resetcheckboxes = function () {
			$scope.resetvalue = false;

			angular.forEach($scope.listoflanguages, function (one) {
				one.languagemodel = $scope.resetvalue;
			});

			angular.forEach($scope.listofcombinations, function (one) {
				one.combinationmodel = $scope.resetvalue;
			});			
		};
	}
]);