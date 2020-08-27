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



$fb = $controller->allFeedbacks();
if(strpos($uriParts[0], 'admin.php')){
		include_once 'admin.php';
		die;
	}
if($uriParts[0]){
	$oneHotel = $controller->getOne($uriParts[0]);
	
	$mainArticles = $controller->allArticles('articles', $oneHotel['hotelName']);
	$main = $controller->allHotels('allHotels', $oneHotel['hotelName']);

	
	// var_dump($oneHotel);
}
else{
$config = $controller->allConfigs();
$prev = $controller->allPrev();
}




// $contr = new PrevController;

$controller->render();
