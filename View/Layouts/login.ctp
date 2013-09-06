<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
            <title>Login</title>
            <?php echo $this->Html->css('bootstrap.min.css'); ?>
            <?php echo $this->Html->css('bootstrap-responsive.min.css'); ?>
            <?php echo $this->Html->css('plugins/icheck/all.css'); ?>
            <?php echo $this->Html->css('style.css'); ?>
            <?php echo $this->Html->css('themes.css'); ?>
	
<!--<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="css/plugins/icheck/all.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/themes.css"-->
	<!-- jQuery -->
	<?php echo $this->Html->script('jquery.min.js'); ?>
	<?php echo $this->Html->script('plugins/nicescroll/jquery.nicescroll.min.js'); ?>
    <?php echo $this->Html->script('plugins/validation/jquery.validate.min.js'); ?>
    <?php echo $this->Html->script('plugins/validation/additional-methods.min.js'); ?>
    <?php echo $this->Html->script('plugins/icheck/jquery.icheck.min.js'); ?>
    <?php echo $this->Html->script('bootstrap.min.js'); ?>
    <?php echo $this->Html->script('eakroko.js'); ?>
	
	
	
	<!--<script src="js/jquery.min.js"></script>
	
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	
	<script src="js/plugins/validation/jquery.validate.min.js"></script>
	<script src="js/plugins/validation/additional-methods.min.js"></script>
	
	<script src="js/plugins/icheck/jquery.icheck.min.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/eakroko.js"></script>-->

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
	

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body class='login'>

<?php //echo $this->Session->flash(); ?>
<?php echo $content_for_layout; ?>


</body>

</html>
