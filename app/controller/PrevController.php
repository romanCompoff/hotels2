<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\PrevModel;
use Dva\Hotels\core\DB;

class PrevController Extends AdminController
{
	public function addPrev($enName, $post)
	{
		$mPost = new PrevModel(DB::getConnect());
		$resUniq = $mPost->addPrev($enName, $post);
		$this->err = $resUniq;

	}
	
			public function outputForm()
		{

			$this->content = $this->build($this->myPath('prevView/addPrevView'), [$err => $this->err]);
		}
		
		
}