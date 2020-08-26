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

$prev = $controller->allPrev();
$config = $controller->allConfigs();
$fb = $controller->allFeedbacks();

if($uriParts[0]){
	$oneHotel = $controller->getOne($name);
	
	// $mainArticles = $controller->allArticles('articles');
	// $main = $controller->allHotels('allHotels');
	
	var_dump($oneHotel);
}

// $contr = new PrevController;

$controller->render();
