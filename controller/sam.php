<?php
//header("Content-Type: application/json");
require_once __DIR__.'../vendor/autoload.php';
use Simon\controller\VideoController;

//if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$videoController = new VideoController();
echo $videoController->createVideo();
//}
