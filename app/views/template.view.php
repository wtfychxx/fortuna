<!DOCTYPE html>
<html>
<head>
	<title> Fortuna - POS Application </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
	<meta name="author" content="Codedthemes" />
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/dataTables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/sweetalert/dist/sweetalert2.min.css">
	<link rel="icon" href="<?= BASE_PATH ?>/public/images/fortuna_logo2.png" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<!-- Required Fremwork -->
	<!-- <link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/admin/css/bootstrap/css/bootstrap.min.css"> -->
	<!-- waves.css -->
	<link rel="stylesheet" href="<?= BASE_PATH ?>/public/admin/pages/waves/css/waves.min.css" type="text/css" media="all">
	<!-- themify icon -->
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/admin/icon/themify-icons/themify-icons.css">
	<!-- font-awesome-n -->
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/admin/css/font-awesome-n.min.css">
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/admin/css/font-awesome.min.css">
	<!-- scrollbar.css -->
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/admin/css/jquery.mCustomScrollbar.css">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/admin/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/bootstrap/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/vendor/daterangepicker/daterangepicker.css"> -->
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/css/fortuna.css">
	<script type="text/javascript" src="<?=  BASE_PATH ?>/public/jquery/jquery-3.3.1.min.js"></script>
	<style media="screen">
		.label-required{
			color: red;
		}
	</style>
</head>
<body>
	<div class="theme-loader">
		<?php
			$header = new View('layouts/pre-loader');
			$header->render();
		?>
	</div>
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
			<nav class="navbar header-navbar pcoded-header">
				<?php
					$header = new View('layouts/navigation');
					$header->render();
				?>
			</nav>
			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<?php
						$view = new View('layouts/sidebar');
						$view->bind('data', $data);
						$view->render();
					?>

					<?php
						$view = new View($viewName);
						$view->bind('data', $data);
						$view->render();
					?>
				<div>
			</div>
		</div>
	</div>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script> -->
	<!-- <script src="<?= BASE_PATH ?>/public/bootstrap/js/bootstrap.bundle.min.js" charset="utf-8"></script> -->
	<!-- <script type="text/javascript" src="<?= BASE_PATH ?>/public/bootstrap/js/bootstrap.min.js"></script> -->
	<script type="text/javascript" src="<?= BASE_PATH ?>/public/dataTables/js/dataTables.min.js"></script>
	<script type="text/javascript" src="<?= BASE_PATH ?>/public/sweetalert/dist/sweetalert2.min.js"></script>
	<script type="text/javascript" src="<?= BASE_PATH ?>/public/jquery-validation/jquery.validate.min.js"></script>
	<!-- <script type="text/javascript" src="<?= BASE_PATH ?>/public/dataTables/js/dataTables.bootstrap.min.js"></script> -->
	<!-- <script type="text/javascript" src="admin/js/jquery/jquery.min.js "></script> -->
	<script type="text/javascript" src="<?= BASE_PATH ?>/public/admin/js/jquery-ui/jquery-ui.min.js "></script>
	<script type="text/javascript" src="<?= BASE_PATH ?>/public/admin/js/popper.js/popper.min.js"></script>
	<script type="text/javascript" src="<?= BASE_PATH ?>/public/admin/js/bootstrap/js/bootstrap.min.js"></script>
	<!-- waves js -->
	<script src="<?= BASE_PATH ?>/public/admin/pages/waves/js/waves.min.js"></script>
	<!-- jquery slimscroll js -->
	<script type="text/javascript" src="<?= BASE_PATH ?>/public/admin/js/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- slimscroll js -->
	<script src="<?= BASE_PATH ?>/public/admin/js/jquery.mCustomScrollbar.concat.min.js "></script>

	<!-- menu js -->
	<script src="<?= BASE_PATH ?>/public/admin/js/pcoded.min.js"></script>
	<script src="<?= BASE_PATH ?>/public/admin/js/vertical/vertical-layout.min.js"></script>
	<script src="<?= BASE_PATH ?>/public/vendor/daterangepicker/moment.min.js"></script>
	<!-- <script src="<?= BASE_PATH ?>/public/vendor/daterangepicker/daterangepicker.js"></script> -->
	<script src="<?= BASE_PATH ?>/public/bootstrap/bootstrap-datepicker/js/bootstrap-datepicker.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?= BASE_PATH ?>/public/js/fortuna.js"></script>
	<script type="text/javascript" src="<?= BASE_PATH ?>/public/admin/js/script.js"></script>
</body>
</html>
