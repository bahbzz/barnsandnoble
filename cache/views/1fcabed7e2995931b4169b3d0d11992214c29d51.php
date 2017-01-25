<?php $__env->startSection('browsertitle'); ?>cart <?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>

<div class="main">
    <table class="cart-table">
      <thead>
        <tr>
          <th><h3>Item</h3></th>
          <th><h3>Price</h3></th>
          <th><h3>Quantity</h3></th>
          <th><h3>Total</h3></th>
          <th><h3>Update</h3></th>
          <th><h3>Remove</h3></th>
        </tr>
      </thead>
      <tbody>
      <?php $__currentLoopData = $cartlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartlist): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
          <td><div class="book-cover b1" style="background: url(<?php echo $cartlist->image; ?>)
            no-repeat center; background-size: cover; width: 81px; height: 100px;"></div></td>
          <td><p class="book-price">$<?php echo $cartlist->price; ?></p></td>
          <td><p class="quantity"><?php echo $cartlist->quantity; ?></p></td>
          <td><p class="total">$<?php echo ($cartlist->price * $cartlist->quantity); ?></p></td>
          <td><input type="hidden" value="$<?php echo ($cartlist->price * $cartlist->quantity); ?>"></td>
          <td>
            <form class="update" action="/updatecart/<?php echo $cartlist->user_id; ?>/<?php echo $cartlist->product_id; ?>/" method="POST">

              <?php if(isset($errors['quantity'])): ?> <span class = "err"><?php echo $errors['quantity']; ?></span> <?php endif; ?>
              <input type="number" name="quantity" class="text-field qty">
              <input type="hidden" value="<?php echo $cartlist->cart_id; ?>" name="c_id">
              <input type="submit" class="def-button change-qty" value="Change Qty">
            </form>
          </td>
          <td>
            <form action="/deletefromcart/<?php echo $cartlist->cart_id; ?>/" method="POST">
            <input type="hidden" value="<?php echo $cartlist->cart_id; ?>" name="c_id">
            <a href="/deletefromcart/<?php echo $cartlist->cart_id; ?>/"><button class="def-button remove-item">Remove Item</button></a>
            </form>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
  </tbody>
    </table>
    </div>
    <div class="cart-table-actions">
      <button class="def-button previous">previous</button>
      <button class="def-button next">next</button>
      <div class="index">
        <!--<a href="#"><p>1</p></a>
        <a href="#"><p>2</p></a>
        <a href="#"><p>3</p></a>-->
      </div>
      <a href="/checkout/<?php echo $_SESSION['user_id']; ?>/"><button class="def-button checkout">Checkout</button></a>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainbase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>