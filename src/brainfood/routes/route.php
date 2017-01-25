<?php
	//$uid = $_SESSION['user_id'];
	#mapping the router

	#route for index page
	$router->map('GET', '/index', 'brainfood\\controllers\\Index@showIndex', 'index');

	#Route to show login page
	$router->map( 'GET', '/login', 'brainfood\\controllers\\AdminLogin@showLogin', 'home' );

	#route to Login admin
	$router->map( 'POST', '/login', 'brainfood\\controllers\\AdminLogin@doLogin', 'dologin' );
	
	#route to show Register page
	$router->map( 'GET', '/register', 'brainfood\\controllers\\AdminRegister@showRegister', 'register' );
	
	#route to register admin
	$router->map( 'POST', '/register', 'brainfood\\controllers\\AdminRegister@doRegister', 'doregister' );
	
	#route to show add product page
	$router->map( 'GET', '/addproducts', 'brainfood\\controllers\\AddProducts@showProductpg', 'showproductpg' );
	
	#route to add products
	$router->map( 'POST', '/addproducts', 'brainfood\\controllers\\AddProducts@doAddProducts', 'addproducts' );
	
	#route to show add category page
	$router->map( 'GET', '/addcategory', 'brainfood\\controllers\\AddCategory@addCategory', 'addcategory' );
	
	#route to add category
	$router->map( 'POST', '/addcategory', 'brainfood\\controllers\\AddCategory@doAdd', 'doaddcategory' );

	#route to show view category page
	$router->map('GET', '/viewcategory', 'brainfood\\controllers\\ViewCategory@showViewCategorypage', 'viewcategory');

	#route to show edit category page
	$router->map('GET', '/editcategory/[i:id]/', 'brainfood\\controllers\\Editcategory@showEditCategorypage', 'editcategory');

	#route to delete category
	$router->map('GET', '/deletecategory/[i:id]/', 'brainfood\\controllers\\Deletecategory@doDeleteCategory', 'deletecategory');

	#post edited category name
	$router->map('POST', '/editcategory/[i:id]/', 'brainfood\\controllers\\Editcategory@doEditCategory', 'doeditcategory');

	#route to show view product page
	$router->map('GET', '/viewproduct', 'brainfood\\controllers\\ViewProduct@showViewProductpage', 'viewproduct');

	#route to show edit product page
	$router->map('GET', '/editproduct/[i:id]/', 'brainfood\\controllers\\Editproduct@showEditProductpage', 'editproduct');

	#route to delete product
	$router->map('GET', '/deleteproduct/[i:id]/', 'brainfood\\controllers\\Deleteproduct@DoDeleteproduct', 'deleteproduct');

	#post edited category name
	$router->map('POST', '/editproduct/[i:id]/', 'brainfood\\controllers\\Editproduct@doEditProduct', 'doeditproduct');

	#route to show user register page
	$router->map( 'GET', '/userregister', 'brainfood\\controllers\\UserRegister@showUserRegister', 'userregister' );

	#route to register new user
	$router->map( 'POST', '/userregister', 'brainfood\\controllers\\UserRegister@doUserRegister', 'douserregister' );

	#route to shoe user login page
	$router->map('GET', '/userlogin', 'brainfood\\controllers\\UserLogin@showUserLogin', 'userlogin');

	#route to log user in
	$router->map('POST', '/userlogin', 'brainfood\\controllers\\UserLogin@doUserLogin', 'douserlogin');

	#route to show catalogue
	$router->map('GET', '/catalogue', 'brainfood\\controllers\\Catalogue@showCatalogue', 'showcatalogue');
	$router->map('GET', '/catalogue/[i:id]/','brainfood\\controllers\\Catalogue@clickCategory', 'showcategory');

	#route to show book preview page
	$router->map('GET', '/bookpreview/[i:id]/', 'brainfood\\controllers\\Bookpreview@showBookPreview', 'bookpreview');

	#route to add comment
	
	$router->map('POST', '/addcomment/[i:id]/', 'brainfood\\controllers\\Addcomment@addComment', 'pushcomments');

	#route when category is clicked
	//$router->map('GET', '/catalogue/[i:id]/', 'brainfood\\controllers\\Catalogue@clickCategory', 'clicktoshowcatprod');

	#route to show cart
	//$router->map('GET', '/loadcart/[i:id]/', 'brainfood\\controllers\\LoadCart@showCart', 'showcart');
	$router->map('GET', '/loadcart/[i:id]/', 'brainfood\\controllers\\LoadCart@showCart', 'showcart');

	#route to add to cart
	$router->map('POST', '/addtocart/[i:id]/', 'brainfood\\controllers\\Addtocart@addToCart', 'addingtocart');

	#route to logout
	$router->map('GET', '/logout', 'brainfood\\controllers\\Logout@logout', 'loguserout');

	#route to delete item from cart
	$router->map('POST', '/deletefromcart/[i:id]/', 'brainfood\\controllers\\DeletefromCart@deleteFromcart', 'deletefromcart');

	#route to update item in cart
	$router->map('POST', '/updatecart/[i:uid]/[i:id]/', 'brainfood\\controllers\\Updatecart@updateCart', 'updatecartitem');

	#route to go to checkout
	$router->map('GET', '/checkout/[i:id]/', 'brainfood\\controllers\\Checkout@showCheckout', 'showcheckout');

	#route to checkout finally
	$router->map('POST', '/checkout/[i:id]/', 'brainfood\\controllers\\Checkout@finalCheckout', 'finalcheckout');
		
