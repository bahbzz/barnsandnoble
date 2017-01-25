 <div class="top-bar">
    <div class="top-nav">
      <a href="/index"><h3 class="brand"><span>B</span>rain<span>F</span>ood</h3></a>
      <ul class="top-nav-list">
        <li class="top-nav-listItem Home"><a href="/index">Home</a></li>
        <li class="top-nav-listItem catalogue"><a href="/catalogue">Catalogue</a></li>

        @if(isset ($_SESSION['user_id']))
        <li class="top-nav-listItem register"><a href="/logout">Logout</a></li>
        @else
        <li class="top-nav-listItem login"><a href="/userlogin">Login</a></li> 
        <li class="top-nav-listItem register"><a href="/userregister">Register</a></li> 
        @endif         
        @if(isset ($_SESSION['user_id']))
        <li class="top-nav-listItem cart">
          <div class="cart-item-indicator">
            <p>12</p>
          </div>
           
          <a href="/loadcart/{!! $_SESSION['user_id'] !!}/">Cart</a>
          @endif
      </ul>
      <form class="search-brainfood">
        <input type="text" class="text-field" placeholder="Search all books">
      </form>
    </div>
  </div>

