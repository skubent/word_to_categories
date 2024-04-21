<?php declare(strict_types=1);

use PhpInterview\Categorizer;
use PhpInterview\DataProvider;

require_once __DIR__ . '/vendor/autoload.php';

$data = (new DataProvider())->getFirstDataset();

$categorizer = new Categorizer();

foreach ($data as $sentence) {
    echo $sentence . " : " .$categorizer->getCategoryTask1($sentence) . PHP_EOL;
}
