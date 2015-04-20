<!doctype html>
<html lang="" ng-app="DictionaryApp">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $title ?> - Devanagari Dictionary</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->

		<!-- 3rdParty: Stylesheets here -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>3rdparty/normalize.css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>3rdparty/fontawesome/css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>3rdparty/bootstrap/dist/css/bootstrap.css" />

		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>3rdparty/keyboard/keyboard.css" />

		<!-- Custom: Stylesheets here -->
		<link href="<?php echo base_url(); ?>styles/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>styles/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />

			<!--[if IE]>
				<link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
			<![endif]-->
			
				<!-- Modernizr goes here -->
				<script src="<?php echo base_url(); ?>3rdparty/modernizr/modernizr.js"></script>
			</head>
			<body class="<?php echo $pageclass; ?>" ng-cloak>
				<nav id="navigation" class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php echo base_url() ?>">Glyph Diares</a>
						</div>
					</div>
				</nav>