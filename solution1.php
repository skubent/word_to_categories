<?php declare(strict_types=1);

include('data/categories.php');

$data = file('data/example1.txt');

foreach ($data as $line) {
    $matter = trim($line);
    echo $matter . ' : ' . getCategory($matter) . PHP_EOL;
}

// Uncomment this to see contents
// print_r(Categories::$activeList);
// print_r(Categories::$relatedPhrases);
// print_r(Categories::$excludedPhrases);

function getCategory(string $description): string {
    return 'Common';
}
