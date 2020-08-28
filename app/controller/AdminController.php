<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\BaseModel;
use Dva\Hotels\Core\DB;

class AdminController Extends BaseController
{
	var $err;
	
			public function outputForm()
		{
			$mPost = new BaseModel(DB::getConnect());
			$prevList = $mPost->getPrev();
			$this->content = $this->build($this->myPath('admin'), ['content' => $prevList]);
		}
		
		public function outputFormToArticles()
		{
			$mPost = new BaseModel(DB::getConnect());
			$prevList = $mPost->getPrev();
			$this->content = $this->build($this->myPath('adminArticles'), ['content' => $prevList]);
		}
		
			public function render()
		{
			echo $this->build(
			$this->myPath('mainAdmin'),
			[
			'err' => $this->err,
			'content' => $this->content,
			'articles' => $this->articles,
			'fb' => $this->fb
			]);
		}

		public function addHotels($post)
	{
	
		$mPost = new BaseModel(DB::getConnect());
		$lastId = $mPost->addPost(	$this->chk($post['heading']),
									$this->chk($post['price']),  
									$this->chk($post['preview']),
									$this->chk($post['hotel']));
		return $lastId;
	}
	
		public function addArticles($post)
	{
		
		$mPost = new BaseModel(DB::getConnect());
		$lastId = $mPost->addArticle($this->chk($post['preview']), $this->chk($post['hotel']));
					// var_dump($post);
		return $lastId;
	}
	
			public function delHotel($id)
	{
			
			$mPost = new baseModel(DB::getConnect());
			$mPost->deletePost($id);
	}			
	
			public function delArticle($id)
	{
			
			$mPost = new baseModel(DB::getConnect());
			$mPost->deleteArticle($id);
	}

			public function delFB($id)
	{
			
			$mPost = new baseModel(DB::getConnect());
			$mPost->deleteFB($id);
			$this->removeImg($id, 'img-feedbacks');
	}	

			protected function removeImg($name, $dir)
			{
				if(file_exists( $_SERVER['DOCUMENT_ROOT'] . sprintf('/img/%s/%s.jpg', $dir, $name))){
					unlink($_SERVER['DOCUMENT_ROOT'] . sprintf('/img/%s/%s.jpg', $dir, $name));
				}
				// else{
					// echo  $_SERVER['DOCUMENT_ROOT'] . sprintf('/img/%s/%s.jpg', $dir, $name);
				// }
			}
			public function chk($word)
	{
			$word = htmlspecialchars($word);
			return $word;
	}

			public function fUpdate($old, $new, $dir)
		{
			$new = $_SERVER['DOCUMENT_ROOT'] . sprintf('/img/%s/%s.jpg', $dir, $new);
			move_uploaded_file($old, $new);
		}


}