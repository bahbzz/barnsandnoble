<?php $__env->startSection('browsertitle'); ?>register <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	
	<h1 id="register-label">Admin Register</h1>
		<hr>
		<form id="register"  action ="/register" method ="POST">
			<div>
				<?php if(isset($errors['fname'])): ?> <span class = "err"><?php echo $errors['fname']; ?></span> <?php endif; ?>
				<label>first name:</label>
				<input type="text" name="fname" placeholder="first name">
			</div>
			<div>
				<?php if(isset($errors['lname'])): ?> <span class = "err"><?php echo $errors['lname']; ?></span> <?php endif; ?>
				<label>last name:</label>	
				<input type="text" name="lname" placeholder="last name">
			</div>

			<div>
				<?php if(isset($errors['email'])): ?> <span class = "err"><?php echo $errors['email']; ?></span> <?php endif; ?>
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				<?php if(isset($errors['password'])): ?> <span class = "err"><?php echo $errors['password']; ?></span> <?php endif; ?>
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>
 
			<div>
				<?php if(isset($errors['fpword'])): ?> <span class = "err"><?php echo $errors['pword']; ?></span> <?php endif; ?>
				<label>confirm password:</label>	
				<input type="password" name="pword" placeholder="password">
			</div>

			<input type="submit" name="register" value="register">
		</form>

		<h4 class="jumpto">Have an account? <a href="/login">login</a></h4>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>