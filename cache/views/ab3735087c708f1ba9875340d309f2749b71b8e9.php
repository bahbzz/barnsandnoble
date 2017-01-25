<?php $__env->startSection('browsertitle'); ?>Index <?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>


<!-- main content starts here -->
  <div class="wrapper">
      <div class="main">
    <div class="book-display">
    <?php $__currentLoopData = $splash; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $splash): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <div class="display-book" style="background: url(<?php echo $splash->image; ?>)
            no-repeat center; background-size: cover; width: 190px; height: 270px;"></div>
      <div class="info">
        
        <h2 class="book-title"><?php echo $splash->product_name; ?></h2>
        <h3 class="book-author"> by <?php echo $splash->author_name; ?></h3>
        <h3 class="book-price">$<?php echo $splash->price; ?></h3>
        <form action="/addtocart/<?php echo $splash->product_id; ?>/" method="POST">
        
         <?php if(isset($errors['quantity'])): ?> <span class = "err"><?php echo $errors['quantity']; ?></span> <?php endif; ?>
        <input type="number" name="quantity" class="book-amount text-field">
        <input type="submit" name="add" class="def-button" value="Add to Cart">
        </form>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>
    <div class="trending-books horizontal-book-list">
      <h3 class="header">Trending</h3>
      <ul class="book-list">
      <?php $__currentLoopData = $trend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trend): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <li class="book">
        <a href="/bookpreview/<?php echo $trend->product_id; ?>/">
          <div class="book-cover" style="background: url(<?php echo $trend->image; ?>)
          no-repeat center; background-size: cover; width: 140px; height: 200px;"></div></a>
          <div class="book-price"><p>$<?php echo $trend->price; ?></p></div>
        
          
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
      </ul>
    </div>
    <div class="recently-viewed-books horizontal-book-list">
      <h3 class="header">Recently Viewed</h3>
      <ul class="book-list">
        <div class="scroll-back"></div>
        <div class="scroll-front"></div>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$250</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$50</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$125</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$90</p></div>
        </li>
      </ul>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainbase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>