<?php
require __DIR__.'/../vendor/autoload.php';

$user = (isset($_GET["user"])?$_GET["user"]:"");

$square = new IntuitiveCMS("test.json");

if ($user == "jonas")
	$square->authorize();

$square->load();

class Test {
	private $derp = 1337;
}

$mods[0] = "IntPage";

$derp = new $mods[0]("Derp");

print_r($derp);
