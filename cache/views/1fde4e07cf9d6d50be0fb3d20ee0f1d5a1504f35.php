<?php $__env->startSection('browsertitle'); ?>editproduct <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


	<h1 id="register-label">Edit Products</h1>
					<hr>

					<form id="register" action="/editproduct/<?php echo $id; ?>/" method="POST" enctype="multipart/form-data">
					<div>
						<label>Book name:</label>
						<input type="text" name="name" placeholder="Book name" value="<?php echo $prdt->product_name; ?>">
						
					</div>

					<div>
						<label>Author:</label>
						<input type="text" name="auth" placeholder="Author" value="<?php echo $prdt->author_name; ?>">
						
					</div>

					
					<div>
						<label>Price:</label>
						<input type="text" name="price" placeholder="Price" value="<?php echo $prdt->price; ?>">
						
					</div>

					<div>
						<label>select Category</label>
						<select name = "bkcat">
						<option value="<?php echo $prdt->category_name; ?>">Select Category</option>
								<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
									<option value="<?php echo $cat->category_id; ?>"><?php echo $cat->category_name; ?></option>


								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							
						</select>
						
					</div>

					<div>
						<label>image</label><a href = "changeimage.php">Change Image</a>
						
					</div>

					<input type="submit" name="submit" value="Update">

					</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>