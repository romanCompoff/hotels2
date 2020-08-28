<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\BaseModel;
use Dva\Hotels\Core\DB;

class BaseController
{
	protected $title;
	protected $articles;
	protected $configs;
	protected $fb;
	protected $content = "Контент в контроллере";

		protected function myPath($name)
		{
		$fullPath = sprintf('/../view/%s.html.php', $name);
		$fullPath = __DIR__ . $fullPath;
		return $fullPath;
	}
	
		public function render()
	{
	echo $this->build(
		$this->myPath('main'),
		[
		'content' => $this->content,
		'articles' => $this->articles,
		'configs' => $this->configs,
		'fb' => $this->fb
		]
		);
	}
	
	protected function build($template, array $params = [])
	{

			ob_start();
			extract($params);

			include_once($template);
			return ob_get_clean();

	}
			public function myNotice($myNotice)
	{
		$this->myNotice = $this->build(__DIR__ . '/../views/myNotice.html.php', ['myNotice' => $myNotice]);	
	}
			public function allHotels($page, $hotelWhere)
	{
		$mPost = new BaseModel(DB::getConnect());
		$hotelList = $mPost->getHotels($hotelWhere);
		
		$this->content = $this->build($this->myPath($page), ['content' => $hotelList]);	
	}
			
			public function allArticles($page, $hotelWhere)
	{
		$mPost = new BaseModel(DB::getConnect());
		$articlesList = $mPost->getArticles($hotelWhere);
		$this->articles = $this->build($this->myPath($page), ['content' => $articlesList]);	
	}
			
			public function allConfigs()
	{
		$mPost = new BaseModel(DB::getConnect());
		$this->configs = $mPost->getConfigs();
	}
		
		public function allFeedbacks($p = 'feedBackViews/feedBack')
	{
		$mPost = new BaseModel(DB::getConnect());
		$FBList = $mPost->getFB();
		$this->fb = $this->build($this->myPath($p), ['feed' => $FBList]);	
	}

		public function allPrev()
	{
		$mPost = new BaseModel(DB::getConnect());
		$prevList = $mPost->getPrev();
		$this->content = $this->build($this->myPath('prevView/allPrev'), ['content' => $prevList]);

	}
	
	 		public function getOne($name)
	{
		$mPost = new BaseModel(DB::getConnect());
		$OneArticle = $mPost->getByName($name);
		$mPost = new BaseModel(DB::getConnect());
		$this->configs = $mPost->getConfigs();
		$this->configs['heading1'] = $OneArticle['rusName'];
		$this->configs['heading2'] = '';
		$this->configs['words2'] = '';
		$this->configs['words1'] = $OneArticle['content'];

		
		
		
		// $hotelList = $mPost->getHotels();
		// $this->content = $this->build($this->myPath('allHotels'), ['content' => $hotelList]);	
		// $articlesList = $mPost->getArticles();
		// $this->articles = $this->build($this->myPath('articles'), ['content' => $articlesList]);	
		return $OneArticle;
	}

}