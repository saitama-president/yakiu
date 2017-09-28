<?php

require_once(__DIR__."/vendor/autoload.php");

$scene= new \yakiu\Scene\NBall();

$scene->AddWatcher(new \yakiu\Watcher\RawWatcher());
$scene->AddWatcher(new \yakiu\Watcher\PersonWatcher());
$scene->Start();
