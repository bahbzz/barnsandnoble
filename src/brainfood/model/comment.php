<?php

	namespace brainfood\model;
	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Comment extends Eloquent {
		protected $table = 'comment';
		protected $primaryKey = 'review_id';

		public static function getAllComment(){
			$comment = Comment::all();
			return $comment;
		}

		public static function getCommentbyId($id) {
			$comments = Comment::where("product_id", '=', $id)->get();
			return $comments;
			
		}
	}
