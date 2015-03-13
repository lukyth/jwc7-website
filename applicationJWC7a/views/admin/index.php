<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>JWC7 Admin</title>
	<link rel="stylesheet" href="<?= base_url()."assets/" ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url()."assets/" ?>css/font-awesome.min.css">
	<style>
[ui-sref],[ng-click]{
	cursor: pointer;
}
.pre{
	white-space: pre-wrap;
}
.valuelist{
	margin-bottom: 10px;
}
.valuelist strong{
	font-size: 12pt;
}
.valuelist .value{
	font-size: 14pt;
}
.valuelist .value.small{
	font-size: 10pt;
}
.scoretable{
	width: auto;
	margin-top: 10px;
}
.ta-toolbar .btn-group {
	margin-bottom: 10px;
}
	</style>
	<link rel="stylesheet" type="text/css" href="<?= base_url()."assets/" ?>css/textAngular.css" >
</head>
<body ng-app="admin">
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="mainnav">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" ui-sref="base.home()">JWC7</a>
		</div>
		<div class="collapse navbar-collapse" id="mainnav">
			<ul class="nav navbar-nav" ng-if="user">
				<li><a href="#" ui-sref="base.home()" ng-hide="true">Dashboard</a></li>
				<li><a href="#" ui-sref="base.check()" ng-if="user.permission >= 1">ตรวจ</a></li>
				<li><a href="#" ui-sref="base.register()" ng-if="user.permission >= 5">รายชื่อ</a></li>
				<li><a href="#" ui-sref="base.maillinglist()" ng-if="user.permission >= 7">ส่งเมล</a></li>
				<li><a href="#" ui-sref="base.user()" ng-if="user.permission >= 10">Users</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?=base_url()?>admin/logout" ng-if="user" ng-bind="user.username"></a></li>
			</ul>
		</div>
	</div>
</nav>
<noscript>
	<div class="container">
		<div class="alert alert-danger">This page requires JavaScript</div>
	</div>
</noscript>
<ui-view></ui-view>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0-beta.4/angular.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.12.0/ui-bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.12.0/ui-bootstrap-tpls.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.13/angular-ui-router.min.js"></script>
<script src='<?= base_url()."assets/" ?>js/textAngular-rangy.min.js'></script>
<script src='<?= base_url()."assets/" ?>js/textAngular-sanitize.min.js'></script>
<script src='<?= base_url()."assets/" ?>js/textAngular.min.js'></script>
<script>
window.asset_base = <?=json_encode(base_url() . 'assets/')?>;
window.api_base = <?=json_encode(base_url() . 'admin/')?>;
</script>
<script src="<?= base_url()."assets/" ?>js/admin.js"></script>
</body>
</html>
