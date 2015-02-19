(function(){

'use strict';

var module = angular.module('admin', ['ui.router', 'ui.bootstrap']);

module.constant('ASSET_BASE', window.asset_base);
module.constant('API_BASE', window.api_base);

module.config(function($stateProvider, $urlRouterProvider, ASSET_BASE){
	$stateProvider
		.state('login', {
			url: '/login',
			templateUrl: ASSET_BASE + 'templates/admin/login.html',
			controller: 'LoginController'
		})
		.state('base', {
			abstract: true,
			template: '<ui-view />',
			controller: 'BaseController',
			resolve: {
				'user': function(User){
					return User.getUser();
				}
			}
		})
		.state('base.home', {
			url: '/',
			templateUrl: ASSET_BASE + 'templates/admin/home.html',
			controller: 'HomeController'
		})
		.state('base.maillinglist', {
			url: '/mail',
			templateUrl: ASSET_BASE + 'templates/admin/maillinglist.html',
			controller: 'MailController'
		})
		.state('base.register', {
			url: '/register',
			templateUrl: ASSET_BASE + 'templates/admin/register.html',
			controller: 'RegisterController'
		})
		.state('base.registerinfo', {
			url: '/register/{id}',
			templateUrl: ASSET_BASE + 'templates/admin/registerinfo.html',
			controller: 'RegisterInfoController',
		})
		.state('base.report', {
			url: '/report/{report}?type&status',
			templateUrl: function($stateParams){
				// XXX: This function does not use injection
				return window.asset_base + 'templates/report/'+$stateParams.report+'.html';
			},
			controller: 'ReportController',
		});
	$urlRouterProvider.otherwise('/');
});

module.factory('User', function(API_BASE, $http, $rootScope, $q){
	var User = function(){
		this.user = null;
		this.loaded = false;
	};
	User.prototype.login = function(details){
		var self = this;
		return $http.post(API_BASE + 'login', details).success(function(resp){
			self.user = resp;
			self.loaded = true;
			return true;
		});
	};
	User.prototype.refresh = function(){
		var self = this;
		return $http.get(API_BASE + 'refresh').success(function(resp){
			if(resp){
				self.user = resp;
				self.loaded = true;
			}
		});
	};
	User.prototype.getUser = function(){
		var defer = $q.defer();
		var self = this;
		if(this.user){
			defer.resolve(this.user);
		}else{
			this.refresh().then(function(){
				defer.resolve(self.user);
			});
		}
		return defer.promise;
	};
	return new User();
});

module.filter('nbr', function(){
	return function(text){
		return text.replace('\\n', '\n');
	};
});

module.filter('age', function(){
	return function(text){
		return Math.floor((new Date() - new Date(text))/(3600 * 24 * 365 * 1000));
	};
});

module.controller('LoginController', function($scope, $state, User){
	$scope.input = {
		username: '',
		password: ''
	};
	$scope.login = function(){
		User.login($scope.input).error(function(data){
			$scope.error = data.error;
		}).then(function(data){
			$state.go('base.home');
		});
	};
});

module.controller('BaseController', function($rootScope, $state, user){
	if(!user){
		$state.go('login');
	}
	$rootScope.user = user;
});

module.controller('HomeController', function($scope){
	
});
module.controller('MailController', function(API_BASE, $scope, $http){
	$scope.input = {
		subject: '',
		to: '',
		all: false,
		body: ''
	};

	$http.get(API_BASE + 'crud/Subscribe').success(function(data){
		$scope.subscribers = data;
	});

	$scope.submit = function(){
		if($scope.sending){
			return;
		}
		$scope.sending = true;
		$scope.error = null;
		$scope.success = null;
		$http.post(API_BASE + 'sendmail', $scope.input).success(function(data){
			$scope.success = 'Sent to ' + data.count+' addresses';
			$scope.input = {
				subject: '',
				to: '',
				all: false,
				body: ''
			};
		}).error(function(data){
			$scope.error = data.error;
		}).finally(function(){
			$scope.sending = false;
		});
	};
});

module.controller('RegisterController', function($scope, $state, $http, API_BASE){
	$http.get(API_BASE + 'crud/Register').success(function(data){
		$scope.register = data;
	});
	$scope.filter = (localStorage.filter && JSON.parse(localStorage.filter)) || {};
	$scope.$watch('filter', function(val){
		if(val){
			localStorage.filter = JSON.stringify(val);
		}
	}, true);
	$scope.showNeedCheck = localStorage.showNeedCheck == 'true';
	$scope.$watch('showNeedCheck', function(val){
		localStorage.showNeedCheck = val;
	});

	$scope.report = '';

	$scope.viewReport = function(){
		$state.go('base.report', {
			report: $scope.report,
			type: $scope.filter.registerType,
			status: $scope.filter.status
		});
	};
});

module.controller('RegisterInfoController', function($scope, $stateParams, $http, API_BASE){
	$scope.id = $stateParams.id;
	$scope.scoreRange = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	$scope.vote = {
		q1: 0, q2: 0, q3: 0, q4: 0, q5: 0
	}

	$http.get(API_BASE + 'crud/Register/' + $stateParams.id).success(function(data){
		$scope.register = data;
	});

	$http.get(API_BASE + 'crud/Homework_Score/' + $stateParams.id).success(function(data){
		$scope.vote = data;
	});

	$scope.saveScore = function(){
		$scope.success = null;
		$scope.saving = true;
		$http.post(API_BASE + 'save_hw_score/' + $stateParams.id, $scope.vote).success(function(){
			$scope.success = 'Saved';
			$scope.saving = false;
		}).finally(function(){
			$scope.saving = false;
		});
	};

	$scope.saveStatus = function(){
		$scope.success_status = null;
		$scope.saving_status = true;
		if($scope.register.status == 'InProgress' && !confirm('ถ้าเลือกให้กรอกใบสมัครใหม่จะไม่ขึ้นในหน้า admin ต้องตามน้องมากรอกใหม่เท่านั้น')){
			return;
		}
		$http.post(API_BASE + 'save_status/' + $stateParams.id, {
			status: $scope.register.status
		}).success(function(){
			$scope.success_status = 'Saved';
			$scope.saving_status = false;
		}).finally(function(){
			$scope.saving_status = false;
		});
	};
});

module.controller('ReportController', function($scope, $stateParams, $http, API_BASE){
	$http.get(
		API_BASE + 'report/' + $stateParams.report +
		'?type=' + ($stateParams.type||'') +
		'&status=' + ($stateParams.status||'')
	).success(function(data){
		$scope.data = data;
	});
});

})();