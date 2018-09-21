<?php 

require_once("vendor/autoload.php");

use Slim\Slim;
use \hcode\Page;
use \hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

//rota
$app->get('/', function() {
    
	$page = new Page();
	$page->setTpl("index");


});

$app->get('/admin', function() {
    
	$page = new PageAdmin();
	$page->setTpl("index");


});


$app->run();

 ?>