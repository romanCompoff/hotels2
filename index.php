<?php

use Dva\Hotels\controller\BaseController;
use Dva\Hotels\controller\GAdsController;
use Dva\Hotels\controller\PrevController;


include 'vendor/autoload.php';

$controller = new BaseController;

$mainArticles = $controller->allArticles('articles');
$main = $controller->allHotels('allHotels');
$config = $controller->allConfigs();
$fb = $controller->allFeedbacks();


$contr = new PrevController;

$controller->render();
