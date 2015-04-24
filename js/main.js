var app = angular.module('DictionaryApp', ['ngRoute']);

app.controller('SearchController', ['$scope',
	function($scope) {

		$scope.checker = false;

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
		$scope.languagearray = [];

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
			$scope.languagearray = [];
			$scope.listofcombinationtabs = [];
			$scope.listoflanguagetabs = [];
			$scope.searchinput = '';
		};

		/*
			Change checkbox values
		*/

		$scope.changelanguage = function (language,value,bool) {
			console.log('yolo');
			if (bool === true) {
				if ($scope.languagearray.length === 0) {
					$scope.languagearray.push(value);
					$scope.listoflanguagetabs.push({
						language: language,
						value: value,
						bool: true
					});
				} else {
					if (jQuery.inArray(value,$scope.languagearray) === -1) {
						$scope.languagearray.push(value);
						$scope.listoflanguagetabs.push({
							language: language,
							value: value,
							bool: true
						});						
					}
				}
			} else {
				var p = jQuery.inArray(value,$scope.languagearray);
				$scope.languagearray.splice(p,1);
				$scope.listoflanguagetabs.splice(p,1);
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

		$scope.deletelanguagetab = function(tab) {
			var falsecheck = false;
			$scope.changelanguage(tab.language, tab.value, falsecheck);
		};

		$scope.deletecombinationtab = function(tab) {
			var falsecheck = false;
			$scope.changecombination(tab.value,falsecheck);
		};		


		var dd1 = new DropDown($('#languagesearch'));
		var dd2 = new DropDown($('#combinationsearch'));

	}
]);

app.controller('SearchWidgetController', ['$scope',
	function ($scope) {

		$scope.checker = false;

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
		$scope.languagearray = [];

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
			$scope.languagearray = [];
			$scope.listofcombinationtabs = [];
			$scope.listoflanguagetabs = [];
			$scope.searchinput = '';
		};

		/*
			Change checkbox values
		*/

		$scope.changelanguage = function (language,value,bool) {
			if (bool === true) {
				if ($scope.languagearray.length === 0) {
					$scope.languagearray.push(value);
					$scope.listoflanguagetabs.push({
						language: language,
						value: value
					});
				} else {
					if (jQuery.inArray(value,$scope.languagearray) === -1) {
						$scope.languagearray.push(value);
						$scope.listoflanguagetabs.push({
							language: language,
							value: value
						});						
					}
				}
			} else {
				var p = jQuery.inArray(value,$scope.languagearray);
				$scope.languagearray.splice(p,1);
				$scope.listoflanguagetabs.splice(p,1);
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

		$scope.deletelanguagetab = function(tab) {
			var falsecheck = false;
			$scope.changelanguage(tab.language, tab.value, falsecheck);
		};

		$scope.deletecombinationtab = function(tab) {
			var falsecheck = false;
			$scope.changecombination(tab.value,falsecheck);
		};		

		var dd1 = new DropDown($('#languagesearch'));
		var dd2 = new DropDown($('#combinationsearch'));
	}
]);

app.controller('ResultController', ['$scope',
	function ($scope) {

		$scope.contributeclick = function () {
			if ($scope.checker === false) {
				$('#contributionform').delay(0).slideDown(500);
				$scope.checker = true;
			} else {
				$('#contributionform').delay(0).slideUp(500);
				$scope.checker = false;
			}
		};
	}
]);