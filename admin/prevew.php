<?php 
use Dva\Hotels\controller\PrevController;
use Dva\Hotels\core\Core;
use Dva\Hotels\model\BaseModel;

include '../vendor/autoload.php';

$controller = new PrevController;

if(!empty($_POST)){
	
$enName = Core::translitSef($_POST['rusName']);

$c = $controller->addPrev($enName, $_POST);

// $f  = $_FILES['pic']['tmp_name'];

// $controller->fUpdate($f, $c);

}



$main = $controller->outputForm();
$controller->render();