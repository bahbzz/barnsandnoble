<div class="top-bar">
    <div class="top-nav">
      <a href="/index"><h3 class="brand"><span>B</span>rain<span>F</span>ood</h3></a>
      <ul class="top-nav-list">
        <li class="top-nav-listItem Home"><a href="/index">Home</a></li>
        <li class="top-nav-listItem catalogue"><a href="/catalogue">Catalogue</a></li>
        <?php if(isset ($_SESSION['user_id'])): ?>
        <li class="top-nav-listItem register"><a href="/logout">Logout</a></li>
        <?php else: ?>
        <li class="top-nav-listItem login"><a href="/userlogin">Login</a></li> 
        <li class="top-nav-listItem register"><a href="/userregister">Register</a></li> 
         <?php endif; ?>
        
        <?php if(isset ($_SESSION['user_id'])): ?>
        <li class="top-nav-listItem cart">
          <div class="cart-item-indicator">
            <p><?php echo $totalItems; ?></p>
          </div>
          
          <a href="/loadcart/<?php echo $_SESSION['user_id']; ?>/">Cart</a>
          <?php endif; ?>
        </li>
      </ul>
      <form class="search-brainfood">
        <input type="text" class="text-field" placeholder="Search all books">
      </form>
    </div>
</div>
