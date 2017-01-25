<?php $__env->startSection('browsertitle'); ?>Login <?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>

 <div class="main">
    <div class="login-form">
      <form class="def-modal-form" action="/userlogin" method="POST">
      
        <div class="cancel-icon close-form"></div>
        <label for="login-form" class="header"><h3>Login</h3></label>
       
         <?php if(isset($errors['email'])): ?> <span class = "err"><?php echo $errors['email']; ?></span> <?php endif; ?>
        <input type="text" name="email" class="text-field email" placeholder="Email">
        
        <?php if(isset($errors['password'])): ?> <span class = "err"><?php echo $errors['password']; ?></span> <?php endif; ?> 
        <input type="password" name="password" class="text-field password" placeholder="Password">
        
        <input type="submit" name="login" class="def-button login" value="Login">
        <p class="login-option">Don't have an account?<a href="/userregister"> Register</a></p>
      </form>
    </div>
  </div>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('mainbase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>