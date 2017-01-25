<?php $__env->startSection('browsertitle'); ?>login <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<h1 id="login-label">Admin Login</h1>
		<hr>
		<form id="login" action ="/login" method ="POST">
			<div>
				<?php if(isset($msg)): ?> <span class = "err"><?php echo $msg; ?></span> <?php endif; ?>
				<?php if(isset($errors['email'])): ?> <span class = "err"><?php echo $errors['email']; ?></span> <?php endif; ?>
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				
				<?php if(isset($errors['password'])): ?> <span class = "err"><?php echo $errors['password']; ?></span> <?php endif; ?>
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>
			<input type="submit" name="submit" value="login">
		</form>

		<h4 class="jumpto">Don't have an account? <a href="/register">register</a></h4>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>