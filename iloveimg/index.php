<?php

require __DIR__ . '/vendor/autoload.php';
use Iloveimg\Iloveimg;
include('config.php');
$iloveimg = new Iloveimg(public_id,secret_key);
$myTask = $iloveimg->newTask('compress');
$file1 = $myTask->addFile('image.jpeg');
$myTask->execute();
$myTask->download();