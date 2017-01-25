<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('pagetitle'); ?></title>
	<link rel="stylesheet" type="text/css" href="/styles/styles.css">
</head>

<body>
	<?php echo $__env->make('topnav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="wrapper">
		<?php echo $__env->yieldContent('content'); ?>
	</div>

	<section class="foot">
		<div>
			<p>&copy; 2016
		</div>
	</section>
</body>
</html>
