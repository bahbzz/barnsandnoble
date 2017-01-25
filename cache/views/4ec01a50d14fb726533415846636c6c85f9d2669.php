<?php $__env->startSection('browsertitle'); ?>catalogue <?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>

  <div class="side-bar">
    <div class="categories">
      <h3 class="header">Categories</h3>
      <ul class="category-list">
		      <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		      <a href="/catalogue/<?php echo $cat->category_id; ?>/">
		      <li class="category"><?php echo $cat->category_name; ?></li>
		      </a>
		      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	    </ul>
    </div>
   </div>

  <!-- main content starts here -->
  <div class="main">
    <div class="main-book-list horizontal-book-list">
      <ul class="book-list">
      <?php $__currentLoopData = $prdt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prdt): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <li class="book">
        <a href="/bookpreview/<?php echo $prdt->product_id; ?>/">
          <div class="book-cover" style="background: url(<?php echo $prdt->image; ?>)
          no-repeat center; background-size: cover; width: 140px; height: 200px;"></div></a>
          <div class="book-price"><p>$<?php echo $prdt->price; ?></p></div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
      </ul>
    </div>
   </div>
	
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('mainbase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>