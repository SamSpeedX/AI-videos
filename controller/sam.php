<?php
//header("Content-Type: application/json");

use Simon\controller\VideoController;

//if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$videoController = new VideoController();
echo $videoController->createVideo();
//}
