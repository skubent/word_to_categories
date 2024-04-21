<?php declare(strict_types=1);

namespace PhpInterview;

class DataProvider {
    private array $firstExample;
    private array $secondExample;

    public function __construct() {
        $this->firstExample = [
            'Meat pie'                           => 'Food',
            'Bring me potato and cheese, please' => 'Food',
            'Pets vitamin'                       => 'Medicine',
            'A small amount of cooking rice'     => 'Common',
            'Electric chess'                     => 'Common',
            'Healthy food'                       => 'Common',
            'Littering ball toy'                 => 'Forbidden goods',
            'Toy for pet'                        => 'Common',
            'A little present'                   => 'Common',
            'Painkiller without prescription'    => 'Forbidden goods',
            'Some beer'                          => 'Forbidden goods',
            'A really rare fishing pole'         => 'Presents',
        ];

        $this->secondExample = [
            'Mead pie'                        => 'Food',
            'Bring me ptat and chese, please' => 'Food',
            'Pets vitamins'                   => 'Medicine',
            'Painkiller without prescript'    => 'Medicine',
            'Some bee hives'                  => 'Forbidden goods',
            'A really rare fish ing pole'     => 'Food',
            'Aquariuand chess'                => 'Pets',
        ];
    }

    public function getFirstDataset(): array {
        return array_keys($this->firstExample);
    }

    public function getSecondDataset(): array {
        return array_keys($this->secondExample);
    }

    public function getFirstExample(): array {
        return $this->firstExample;
    }

    public function getSecondExample(): array {
        return $this->secondExample;
    }
}
