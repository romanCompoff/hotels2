<?php

use Dva\Hotels\controller\BaseController;
use Dva\Hotels\controller\GAdsController;
use Dva\Hotels\controller\PrevController;


include 'vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$uriParts = explode( "/", $uri);

unset($uriParts[0]);
$uriParts = array_values($uriParts);



$controller = new BaseController;



// if($uriParts[0]){
	$oneHotel = $controller->getOne(uriParts[0]);
	
	// $mainArticles = $controller->allArticles('articles');
	// $main = $controller->allHotels('allHotels');
	
	var_dump($oneHotel);
// }

// $prev = $controller->allPrev();
// $config = $controller->allConfigs();
// $fb = $controller->allFeedbacks();


// $contr = new PrevController;

$controller->render();
