<?php declare(strict_types=1);

namespace PhpInterview\Tests;

use PhpInterview\Categorizer;
use PhpInterview\DataProvider;
use PHPUnit\Framework\TestCase;

class CategoriesTest extends TestCase {
    public function testFirstExample(): void {
        $data        = (new DataProvider())->getFirstExample();
        $categorizer = new Categorizer();

        foreach ($data as $sentence => $expectedCategory) {
            $actualCategory = $categorizer->getCategoryTask1($sentence);
            self::assertSame($expectedCategory, $actualCategory, "For sentence \"{$sentence}\" found category {$actualCategory}, but correct answer is {$expectedCategory}");
        }
    }

    public function testSecondExample(): void {
        $data        = (new DataProvider())->getSecondExample();
        $categorizer = new Categorizer();

        foreach ($data as $sentence => $expectedCategory) {
            $actualCategory = $categorizer->getCategoryTask2($sentence);
            self::assertSame($expectedCategory, $actualCategory, "For sentence \"{$sentence}\" found category {$actualCategory}, but correct answer is {$expectedCategory}");
        }
    }
}
