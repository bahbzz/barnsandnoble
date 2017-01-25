<?php
	
	namespace brainfood\libs;
	use Illuminate\Database\Capsule\Manager as Capsule;   #importing a database library

	class DataBase {

		#using a constructor, instantiate the class outside after aliasing it as this(
		#use brainfood\libs\database as DB;
		//$db = new DB();)
		
		/*public function __construct() {

			$capsule = new Capsule();

			$capsule->addConnection([
			'driver'    => $_ENV['DB_DRIVER'],
		    'host'      => $_ENV['DB_HOST'],
		    'database'  => $_ENV['DB_NAME'],
		    'username'  => $_ENV['DB_USER'],
		    'password'  => $_ENV['DB_PASS'],
		    'charset'   => 'utf8',
		    'collation' => 'utf8_unicode_ci',
		    'prefix'    => '',
		    ]);


		// Make this Capsule instance available globally via static methods... (optional)
		$capsule->setAsGlobal();

		// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
		$capsule->bootEloquent();
		}*/

		//Using a public static function, call the function outside as DB::connect()
		public static function connect() {

			$capsule = new Capsule();

			$capsule->addConnection([
			'driver'    => $_ENV['DB_DRIVER'],
		    'host'      => $_ENV['DB_HOST'],
		    'database'  => $_ENV['DB_NAME'],
		    'username'  => $_ENV['DB_USER'],
		    'password'  => $_ENV['DB_PASS'],
		    'charset'   => 'utf8',
		    'collation' => 'utf8_unicode_ci',
		    'prefix'    => '',
		    ]);


		// Make this Capsule instance available globally via static methods... (optional)
		$capsule->setAsGlobal();

		// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
		$capsule->bootEloquent();
		}
		
	

	}	
