<?php $__env->startSection('browsertitle'); ?>addcategory <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<h1 id="register-label">Add Category</h1>
					<hr>

					<form id="register" action="/addcategory" method="POST">
					<div>
						<?php if(isset($errors['cname'])): ?> <span class = "err"><?php echo $errors['cname']; ?></span> <?php endif; ?>
						<label>category name:</label>
						<input type="text" name="cname" placeholder="Post Category Title">
						
					</div>
					

					<input type="submit" name="submit" value="add">

					</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>