<?php $__env->startSection('browsertitle'); ?>editcategory <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

		 <h1 id="register-label">Edit Category</h1>
					<hr>
						<form id="register" action="/editcategory/<?php echo $id; ?>/"  method="POST">
						<div>
							<label>category name:</label>
							<input type="text" name="cname" placeholder="Post Title" value="<?php echo $cat->category_name; ?>">
							
						</div>
							

						<input type="submit" name="submit" value="Update">

						</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>