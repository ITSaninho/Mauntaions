angular.module('app').controller('AdminCtrl',['$rootScope', '$scope', 'request', 'validate', 'logger', function($rootScope, $scope, request, validate, logger) {
	$scope.allData = {};
	$scope.adminData = {};
	$scope.login = {'email': '', 'password': ''};
	$scope.order = {'name': '', 'phone': ''};
	$scope.contact = {'name': '', 'phone': '', 'email': ''};
	$scope.phonePattern =  /^\d+$/;
	$scope.namePattern = $rootScope.namePattern;
	$scope.emailPattern = $rootScope.emailPattern;
	$scope.adminTitle = '';
	$scope.nextItem = {
		'travel': {'img': '', 'title': '', 'description': '', 'price': '', 'last_price': '', 'rating': '5'},
		'comment': {'img': '', 'name': '', 'work': '', 'text': ''}
	};
	$scope.itemToChange = '';
	$scope.cancelItem = {};
	$scope.password = '';
	$scope.uploadImage = {'name': '', 'img': ''};
	$scope.screen = isBigScreen();
	$scope.allPics = {};
	$scope.showNewItem = false;
	$scope.adminPanel = {
		'Header': 'header',
		'About Us': 'about',
		'Our Journal': 'journal',
		'Order Form': 'wanna',
		'How We Work': 'work',
		'Travel With Us': 'travel',
		'Gallery': 'gallery',
		'Feedbacks': 'comment'
	};

	function isBigScreen() {
		return $( window ).width() > 720 ? true : false;
	};

	$(window).resize(function() {
		$scope.screen = isBigScreen();
	});

	$scope.getItemToChange = function() {
		switch($scope.itemToChange) {
			case 'header': return $scope.allData.header;
			break
			case 'about': return $scope.allData.about;
			break
			case 'journal': return $scope.allData.journal;
			break
			case 'work': return $scope.allData.work;
			break
			case 'travel': return $scope.allData.travel;
			break
			case 'gallery': return $scope.allData.gallery;
			break
			case 'comment': return $scope.allData.comment;
			break
			case 'contact': return $scope.adminData.contact;
			break
			case 'wanna': return $scope.allData.wanna;
			break
			case 'order': return $scope.adminData.order;
			break
			case 'user': return $scope.adminData.user;
			break
		}
	};

	$scope.addNextItem = function() {
		var itemToSend = $scope.itemToChange == 'travel' ? $scope.nextItem.travel : $scope.nextItem.comment;
		request.send('admin/add/' + $scope.itemToChange, itemToSend, function(data) {
			if (data) {
				logger.logSuccess('Added');
				$scope.getData();
			}
		});
	};

	$scope.getRatingStars = function(num) {
		return new Array(num);
	};

	$scope.init = function() {
		$scope.getData();
		$scope.getAdminData();

	};

	$scope.getAdminData = function() {
		request.send('admin/getadmindata', '', function(data) {
			if (data) {
				$scope.adminData = data;
			}
		});
	};

	$scope.setItemsToChange = function(title, item) {
		$scope.itemToChange = item;
		$scope.adminTitle = title;
	};

	$scope.getData = function() {
		request.send('/getdata', '', function(data) {
			if (data) {
				$scope.allData = data;
				$scope.cancelItem = angular.copy($scope.allData);
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
					$('#contact-phone, #contact-email, #contact-name').removeClass('warning');
					logger.logSuccess('Your data are sent!');
				}
			});
		}
	};

	$scope.removeItem = function(id) {
		if (confirm('Confirm removal')) {
			request.send('admin/delete', { 'id': id, 'table': $scope.itemToChange }, function(data) {
				if (data) {
					logger.logSuccess('Item Deleted');
					$scope.getData();
				}
			});
		}
		
	};

	$scope.saveData = function() {
		$scope.getItemToChange().password = $scope.password;
		request.send('/admin/save/' + $scope.itemToChange, $scope.getItemToChange(), function(data) {
			if (data) {
				$scope.cancelItem = angular.copy($scope.allData);
				logger.logSuccess('Data Saved');
				$scope.getData();
			}
		});
	};

	$scope.reset = function() {
		$scope.allData = angular.copy($scope.cancelItem);
	};

}]);