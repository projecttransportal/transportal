<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>PTP - Project Transparency Portal</title>
	
<script> var base_url ='<?php echo base_url(); ?>'; </script>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="header">
		<?php echo $header; ?>
	</div>

	<div class="navigation">
		<?php echo $navigation; ?>
	</div>

	<div class="content">
		<?php echo $content; ?>
	</div>

	<div class="footer">
		<?php echo $footer; ?>
	</div>


</body>

    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/OpenLayers.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
	
</html>