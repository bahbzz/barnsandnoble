<div class="top-bar">
<div class="top-nav">
      <a href="index.html"><h3 class="brand"><span>B</span>rain<span>F</span>ood</h3></a>
      <ul class="top-nav-list">
        <li class="top-nav-listItem Home"><a href="/userhomepage">Home</a></li>
        <li class="top-nav-listItem catalogue"><a href="/usercatalogue">Catalogue</a></li>
        <li class="top-nav-listItem login"><a href="/userlogout">Logout</a></li>
        <li class="top-nav-listItem login"><a href="/userlogin">Login</a></li>
        <li class="top-nav-listItem register"><a href="/userregistration">Register</a></li>
        <li class="top-nav-listItem cart">
          <div class="cart-item-indicator">
            <p>12</p>
          </div>
          <a href="/usercart/<?php echo $_SESSION['user_id']; ?>/">Cart</a>
        </li>
      </ul>
      <form class="search-brainfood">
        <input type="text" class="text-field" placeholder="Search all books">
      </form>
    </div>
    </div>
