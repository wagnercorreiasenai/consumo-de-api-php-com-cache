<?php
//Teste com VS CODE
//Teste com GITHUB
require './vendor/autoload.php';
require 'Classes/OpenWeather.php';

$o = new OpenWeather();

$clima = $o->getTempoAtual();

echo $clima->temperatura;