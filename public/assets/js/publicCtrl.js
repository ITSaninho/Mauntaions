angular.module('app', ['ngCookies','ngAnimate', 'ngSanitize', 'ngAnimate']);

angular.module('app').controller('PublicCtrl',['$rootScope', '$scope', 'request', 'validate', 'logger', function($rootScope, $scope, request, validate, logger) {
	$scope.allData = {};	$scope.login = {'email': '', 'password': ''};
	$scope.order = {'name': '', 'phone': ''};
	$scope.contact = {'name': '', 'phone': '', 'email': ''};
	$scope.phonePattern =  /^\d+$/;
	$scope.namePattern = /^[a-zA-Z]+$/;
	$scope.emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	$scope.isLogIn = true;
	$scope.screen = isBigScreen();

	function isBigScreen() {
		return $( window ).width() > 720 ? true : false;
	};

	$(window).resize(function() {
		$scope.screen = isBigScreen();
	});

	$scope.init = function() {
		$scope.getData();
	};

	$scope.getData = function() {
		request.send('/getdata', '', function(data) {
			if (data) {
				$scope.allData = data;
				console.log(data);
			}
		});
	};

	$scope.saveOder = function() {
		var errorName = 1;
		var errorPhone = 1;
		errorName *= validate.check($scope.orderForm.name, 'Name');

		if ( ! errorName) {
			$('#go-input-name').addClass('warning');
		}

		errorPhone *= validate.check($scope.orderForm.phone, 'Phone');

		if  ( ! errorPhone) {
			$('#go-input-phone').addClass('warning');
		}

		if (errorName && errorPhone) {
			request.send('/save/order', $scope.order, function(data) {
				if (data) {
					console.log(data);
					$('#go-input-name, #go-input-phone').removeClass('warning');
					logger.logSuccess('Your data are sent!');
				}
			});
		}
	};

	$scope.saveContact = function() {
		var errorName = 1;
		var errorEmail = 1;
		var errorPhone = 1;

		errorName *= validate.check($scope.contactForm.name, 'Name');

		if ( ! errorName) {
			$('#contact-name').addClass('warning');
		}

		if ($scope.contact.phone) {
			errorPhone *= validate.check($scope.contactForm.phone, 'Phone');
		} else {

			if ($scope.contact.email) {
				errorEmail *= validate.check($scope.contactForm.email, 'Email');
			} else {
				errorPhone *= validate.check($scope.contactForm.phone, 'Phone');
				errorEmail *= validate.check($scope.contactForm.email, 'Email');
				$('#contact-phone, #contact-email').addClass('warning');
			}
		}

		if (errorName && (errorPhone || errorEmail)) {

			request.send('/save/contact', $scope.contact, function(data) {
				if (data) {
					console.log(data);
					$('#contact-phone, #contact-email, #contact-name').removeClass('warning');
					logger.logSuccess('Your data are sent!');
				}
			});
		}
	};

}]);