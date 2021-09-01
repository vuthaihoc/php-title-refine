<?php

require __DIR__ . "/vendor/autoload.php";


$dataset = [];

//$dir = "datav2";
$dir = "hiep-data";

$files = glob(__DIR__ . "/$dir/*.txt");
ob_start();
foreach ($files as $file){
    if(!preg_match("/\d+\.txt$/",$file, $matches)){
        continue;
    }
    echo "\n" . $file;
    $content_file = preg_replace("/(\d+)\.txt$/", "$1_text.txt", $file);
    $titles = explode("\n", file_get_contents($file));
    foreach ($titles as $title){
        echo("\nOrigin: " . $title);
        if($title){
            \HocVT\TitleRefine\Refiner::run($title, file_get_contents($content_file));
        }
    }
}
$result = ob_get_clean();
file_put_contents("result." . $dir . "." . date('Ymd.hi.s') . '.txt', $result);