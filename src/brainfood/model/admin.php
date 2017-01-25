<?php
	
	namespace brainfood\model;
	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Admin extends Eloquent {
		protected $table = 'admin';
		protected $primarykey = 'admin_id';
	}	
