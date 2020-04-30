<?php
//require_once './controllers/StartController.php';
require_once './vendor/autoload.php';

use StartController\StartController;

$controller=new StartController();

$controller->toMail();
//require_once './views/selectedaction.php';
?>
