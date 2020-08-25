<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\FeedbackModel;
use Dva\Hotels\Core\DB;

class FeedbacksController Extends AdminController
{
		public function addFeedback($text, $name)
		{
			$mPost = new FeedbackModel(DB::getConnect());
			$fb = $mPost->addFeedback($text, $name);
			
			return $fb;

		}
		
		public function fUpdate($old, $new)
		{
			$new = $_SERVER['DOCUMENT_ROOT'] . sprintf('/img/img-feedbacks/%s.jpg', $new);
			move_uploaded_file($old, $new);
		}

		public function outputForm()
		{
			// $mPost = new ConfigModel(DB::getConnect());
			// $configsList = $mPost->getConfigs();
			$this->content = $this->build($this->myPath('feedBackViews/feedBackForm'), []);
		}
}