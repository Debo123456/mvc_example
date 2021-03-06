<?php

$path = $_SERVER['DOCUMENT_ROOT'];

require_once($path.'/CurrencyConverter.php');
require_once($path.'/CurrencyConverterController.php');
require_once($path.'/CurrencyConverterView.php');

$model = new CurrencyConverter();

$controller = new CurrencyConverterController($model);



//Check for presence of $_GET['action'] to see if a controller action is required

if (isset($_GET['action'])) $controller->{$_GET['action']}($_POST);



$gbpView = new CurrencyConverterView($model, 'GBP');

echo $gbpView->output();



$usdView = new CurrencyConverterView($model, 'USD');

echo $usdView->output();



$eurView = new CurrencyConverterView($model, 'EUR');

echo $eurView->output();



$yenView = new CurrencyConverterView($model, 'YEN');

echo $yenView->output();


?>