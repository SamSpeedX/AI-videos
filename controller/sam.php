<?php
//header("Content-Type: application/json");

use Simon\Controller\VideoController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$videoController = new VideoController();
echo $videoController->createVideo();
}
