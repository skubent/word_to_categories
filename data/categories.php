<?php declare(strict_types=1);

class Categories {
    /** @var string[] */
    public static array $activeList = [
        'Food',
        'Pets',
        'Medicine',
        'Presents',
        'Forbidden goods',
        'Common',
    ];

    /** @var string[][]  */
    public static array $relatedPhrases = [
        'Food' => [
            'Cheese',
            'Bread',
            'Meat',
            'Rice',
            'Fish',
        ],
        'Pets' => [
            'Pet toy',
            'Leash',
            'Collar',
            'Litter',
            'Aquarium',
        ],
        'Medicine' => [
            'Healthy',
            'Pharmacy',
            'Vitamin',
            'Painkiller',
            'Ointment',
        ],
        'Presents' => [
            'Souvenir',
            'Jewelry',
            'Toy',
            'Puzzle',
            'Box',
        ],
        'Sports' => [
            'Ball',
            'Bicycle',
            'Skate',
            'Racket',
            'Chess',
        ],
        'Forbidden goods' => [
            'Drinking chess',
            'Beer',
            'Alcohol',
            'Prescription',
            'Antibiotic',
        ],
    ];

    public static array $excludedPhrases = [
        'Food' => [
            'Cooking',
            'Flour',
            'Cake',
        ],
        'Pets' => [
            'Cell',
            'Radio',
            'Electric',
        ],
        'Medicine' => [
            'Prescription',
            'Healthy food',
            'Antibiotic',
        ],
        'Presents' => [
            'Pet',
            'Ball',
            'Tool box',
        ],
    ];
}
