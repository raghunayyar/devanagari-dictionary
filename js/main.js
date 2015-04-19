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

		$scope.listoflanguagetabs = [];
		$scope.listofcombinationtabs = [];

		/*
			Reset checkboxes
		*/

		$scope.resetcheckboxes = function () {
			$scope.resetvalue = false;

			angular.forEach($scope.listoflanguages, function (one) {
				one.languagemodel = $scope.resetvalue;
				$scope.disableresetbutton = true;
			});

			angular.forEach($scope.listofcombinations, function (one) {
				one.combinationmodel = $scope.resetvalue;
			});
			$scope.listofcombinationtabs = [];
			$scope.listoflanguagetabs = [];	
		};

		/*
			Change checkbox values
		*/

		$scope.changelanguage = function (language,value,bool) {
			if (bool === true) {
				if ($scope.listoflanguagetabs.length === 0) {
					$scope.listoflanguagetabs.push({
						language: language,
						value: value
					});
				} else {
					for (var i=0; i<$scope.listoflanguagetabs.length;i++) {
						if ($scope.listoflanguagetabs[i].value !== value) {
							$scope.listoflanguagetabs.push({
								language: language,
								value: value
							});	
						} else {
							$scope.listoflanguagetabs.splice(i,1);
						}
						console.log($scope.listoflanguagetabs);
					}
				}
			} else {
				if ($scope.listoflanguagetabs.length === 1) {
					$scope.listoflanguagetabs = [];
				} else {
					for (var j; j<$scope.listoflanguagetabs.length;j++) {
						if ($scope.listoflanguagetabs[i].value === value) {
							$scope.listoflanguagetabs.splice(i,1);
						}
					}
				}
			}
		};

		$scope.changecombination = function (value, bool) {
			if (bool === true) {
				if ($scope.listofcombinationtabs.length === 0) {
					$scope.listofcombinationtabs.push(value);
				} else {
					if (jQuery.inArray(value,$scope.listofcombinationtabs) === -1) {
						$scope.listofcombinationtabs.push(value);
					}
				}
			} else {
				var p = jQuery.inArray(value,$scope.listofcombinationtabs);
				$scope.listofcombinationtabs.splice(p,1);
			}
		};
	}
]);