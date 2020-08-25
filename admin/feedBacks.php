<?
use Dva\Hotels\controller\FeedbacksController;
use Dva\Hotels\model\BaseModel;

include '../vendor/autoload.php';
	

$controller = new FeedbacksController;

if(!empty($_POST)){

$c = $controller->addFeedback($_POST['fbc'], $_POST['userNname']);

$f  = $_FILES['pic']['tmp_name'];

$controller->fUpdate($f, $c);

}

$main = $controller->outputForm();
$controller->render();

// var_dump($c);