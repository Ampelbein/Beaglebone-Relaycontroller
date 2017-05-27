<?php
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Remote control</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="cache-control" content="max-age=0" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
		<meta http-equiv="pragma" content="no-cache" />
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="styles.css" rel="stylesheet" media="screen">
		<script src="script/jquery.js"></script>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Remote Control</a>
				</div>
			</div>
		</div>

		<div id="allebuttons" class="container">
		<?php include 'RelayStatus.php';?>
		</div>

	</body>
</html>

<?php
require_once('RelayController.php');
$relayController = new RelayController();
$relayController->triggerRelay();
?>
