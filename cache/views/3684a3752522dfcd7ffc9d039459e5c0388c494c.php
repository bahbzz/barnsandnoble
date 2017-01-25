<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="styles/styles-hm.css">
    <title><?php echo $__env->yieldContent('pagetitle'); ?></title>
</head>
<body id="home">
	<?php echo $__env->make('maintopnav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	

  
      <?php echo $__env->yieldContent('contents'); ?>
      
     

<!-- footer starts here-->
  <div class="footer">
    <p class="copyright">&copy; copyright 2016</p>
  </div>
</body>
</html>
