<?php $__env->startSection('browsertitle'); ?>bookpreview <?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>

<div class="main">	
    <!--<p class="global-error">You have not chosen any amount!</p>-->
    <div class="book-display">
      <div class="display-book" style="background: url(<?php echo $prody->image; ?>)
            no-repeat center; background-size: cover; width: 190px; height: 270px;"></div>
      <div class="info">
        <h2 class="book-title"><?php echo $prody->product_name; ?></h2>
        <h3 class="book-author">by <?php echo $prody->author_name; ?></h3>
        <h3 class="book-price">$<?php echo $prody->price; ?></h3>
        <label for="book-amout">Amount</label>
        <form action="/addtocart/<?php echo $prody->product_id; ?>/" method="POST">

         <?php if(isset($errors['quantity'])): ?> <span class = "err"><?php echo $errors['quantity']; ?></span> <?php endif; ?>
        <input type="number" name="quantity" class="book-amount text-field">
        <input type="submit" name="add" class="def-button" value="Add to Cart">
        </form>
      </div>
    </div>
    
    <div class="book-reviews">
      <h3 class="header">Reviews</h3>
      <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comments): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>  
      <ul class="review-list">
     
        <li class="review">
        
          <div class="avatar-def user-image">
            <h4 class="user-init"><?php echo substr($comments->firstname, 0 ,1).substr($comments->lastname, 0, 1); ?>. </h4>
          </div>
          <div class="info">
            <h4 class="username"><?php echo $comments->firstname; ?> - <?php echo $comments->lastname; ?></h4>
            <p class="comment"><?php echo $comments->comments; ?>

            </p>
          </div>
                  
        </li>
        </ul> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>        
        <div class="add-comment">
        <h3 class="header">Add your comment</h3>
        <form class="comment" action="/addcomment/<?php echo $prody->product_id; ?>/" method="POST">

          <?php if(isset($errors['review'])): ?> <span class = "err"><?php echo $errors['review']; ?></span> <?php endif; ?>
          <textarea class="text-field" placeholder="write something" name="review"></textarea>
          <button class="def-button post-comment">Upload comment</button>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainbase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>