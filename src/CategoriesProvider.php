<?php declare(strict_types=1);

namespace PhpInterview;

class CategoriesProvider {
    /** @var string[] */
    private array $activeCategories;

    /** @var string[] */
    private array $relatedPhrases;

    /** @var string[] */
    private array $excludedPhrases;

    public function __construct() {
        $this->activeCategories = [
            'Food',
            'Pets',
            'Medicine',
            'Presents',
            'Forbidden goods',
            'Common',
        ];

        $this->excludedPhrases = [
            'Food' => [
                'cooking',
                'flour',
                'cake',
            ],
            'Pets' => [
                'cell',
                'radio',
                'electric',
            ],
            'Medicine' => [
                'prescription',
                'healthy food',
                'antibiotic',
            ],
            'Presents' => [
                'pet',
                'ball',
                'tool box',
            ],
        ];

        $this->relatedPhrases = [
            'Food' => [
                'cheese',
                'potato',
                'bread',
                'meat',
                'rice',
                'fish',
            ],
            'Pets' => [
                'pet toy',
                'collar',
                'litter',
                'aquarium',
            ],
            'Medicine' => [
                'healthy',
                'pharmacy',
                'vitamin',
                'painkiller',
                'ointment',
            ],
            'Presents' => [
                'toy',
                'puzzle',
                'box',
                'fishing pole',
            ],
            'Sports' => [
                'ball',
                'bicycle',
                'skate',
                'racket',
                'chess',
            ],
            'Forbidden goods' => [
                'drinking chess',
                'beer',
                'alcohol',
                'prescription',
                'antibiotic',
                'littering',
            ],
        ];
    }

    public function getActiveCategories(): array {
        return $this->activeCategories;
    }

    public function getRelatedPhrases(): array {
        return $this->relatedPhrases;
    }

    public function getExcludedPhrases(): array {
        return $this->excludedPhrases;
    }
}
