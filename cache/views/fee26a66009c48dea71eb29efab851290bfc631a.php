<?php $__env->startSection('browsertitle'); ?>Index <?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>


<div class="main">
    <div class="checkout-form">
      <form class="def-modal-form" action="/checkout/<?php echo $_SESSION['user_id']; ?>/" method="POST">
        <div class="total-cost">
          <h3>Total Purchase : $<?php echo $totalPrice; ?></h3>
        </div>
        <div class="cancel-icon close-form"></div>
        <label for="login-form" class="header"><h3>Checkout</h3></label>
         <?php if(isset($errors['phone'])): ?> <span class = "err"><?php echo $errors['phone']; ?></span> <?php endif; ?>
        <input type="text" name="phone" class="text-field phone" placeholder="Phone Number">

         <?php if(isset($errors['addy'])): ?> <span class = "err"><?php echo $errors['addy']; ?></span> <?php endif; ?>
        <input type="text" name="addy" class="text-field address" placeholder="Address">

         <?php if(isset($errors['code'])): ?> <span class = "err"><?php echo $errors['code']; ?></span> <?php endif; ?>
        <input type="text" name="code" class="text-field post-code" placeholder="Post Code">
        <input type="submit" name="chkt" class="def-button checkout" value="Checkout">
      </form>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainbase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>