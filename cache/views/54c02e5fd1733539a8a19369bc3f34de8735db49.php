<?php $__env->startSection('browsertitle'); ?>userregister <?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>

	<div class="main">
    	<div class="registration-form">
	      	<form class="def-modal-form" action="/userregister" method="POST">
		        <div class="cancel-icon close-form"></div>
		        <label for="registration-from" class="header"><h3>User Registration</h3></label>
		       
		        <?php if(isset($errors['fname'])): ?> <span class = "err"><?php echo $errors['fname']; ?></span> <?php endif; ?>
		        <input type="text" name="fname" class="text-field first-name" placeholder="Firstname">
		       
		        <?php if(isset($errors['lname'])): ?> <span class = "err"><?php echo $errors['lname']; ?></span> <?php endif; ?>
		        <input type="text" name="lname" class="text-field last-name" placeholder="Lastname">
		        
		        <?php if(isset($errors['uname'])): ?> <span class = "err"><?php echo $errors['uname']; ?></span> <?php endif; ?>
		        <input type="text" name="uname" class="text-field username" placeholder="Username">

		        <?php if(isset($errors['email'])): ?> <span class = "err"><?php echo $errors['email']; ?></span> <?php endif; ?>
		        <input type="email" name="email" class="text-field email" placeholder="Email">
		               
		        <?php if(isset($errors['password'])): ?> <span class = "err"><?php echo $errors['password']; ?></span> <?php endif; ?> 
		        <input type="password" name="password" class="text-field password" placeholder="Password">
		        
		        
		        <input type="password" name="pword" class="text-field confirm-password" placeholder="Confirm Password">
		        
		        <input type="submit" name="reg" class="def-button" value="Register">
		        
		        <p class="login-option">Have an account already?<a href="/userlogin"> Login</a></p>
	      </form>
    	</div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainbase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>