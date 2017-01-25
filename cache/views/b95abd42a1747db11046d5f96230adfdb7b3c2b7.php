<?php $__env->startSection('browsertitle'); ?>addproducts <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>		

		<h1 id="register-label">Add Products</h1>
							<hr>

							<form id="register" action="/addproducts" method="POST" enctype="multipart/form-data">
							<div>
								<?php if(isset($errors['name'])): ?> <span class = "err"><?php echo $errors['name']; ?></span> <?php endif; ?>
								<label>Book name:</label>
								<input type="text" name="name" placeholder="Book name">
							</div>

							<div>
								<?php if(isset($errors['auth'])): ?> <span class = "err"><?php echo $errors['auth']; ?></span> <?php endif; ?>
								<label>Author:</label>
								<input type="text" name="auth" placeholder="Author">
							</div>

							
							<div>
								<?php if(isset($errors['price'])): ?> <span class = "err"><?php echo $errors['price']; ?></span> <?php endif; ?>
								<label>Price:</label>
								<input type="text" name="price" placeholder="Price">
							</div>

							<div>
								<?php if(isset($errors['bkcat'])): ?> <span class = "err"><?php echo $errors['bkcat']; ?></span> <?php endif; ?>
								<label>select Category</label>
								<select name = "bkcat">
								<option value="">Select Category</option>
								<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
									<option value="<?php echo $cat->category_id; ?>"><?php echo $cat->category_name; ?></option>


								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
																									
								</select>
								
							</div>

							<div>
								<label>image</label>
								<input type="file" name="pic">
							</div>

							

							<input type="submit" name="submit" value="add">

							</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>