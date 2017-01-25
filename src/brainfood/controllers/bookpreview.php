<?php

	namespace brainfood\controllers;
	use brainfood\model\product as Product;
	use brainfood\model\trending as Trending;
	use brainfood\model\user as User;
	use brainfood\model\comment as Comment;

	class Bookpreview extends BaseController {
		protected $blade;


		public function showBookPreview($id) {
			//dump(Comment::getCommentbyId($id)); exit();
			echo $this->blade->render('bookpreview', ['prody'=>Product::getProduct($id), 'usr'=>User::getUser($id), 'comments'=>Comment::getCommentbyId($id), 'id'=>$id, 'totalItems'=>$this->_countCartItems]);
			
		}

		//public function showComment($id) {
		//	echo $this->blade->render('bookpreview',['comments'=>Comment::getCommentbyId($id), 'id'=>$id]);

		//}

	}
