<?php

defined('TYPO3') or die();

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = [
    'default' => [
        'title' => 'Default',
        'allowedAspectRatios' => [
            '16:9' => [
                'title' => '16:9',
                'value' => 16 / 9,
            ],
            '4:3' => [
                'title' => '4:3',
                'value' => 4 / 3,
            ],
            '4:5' => [
                'title' => '4:5',
                'value' => 4 / 5,
            ],
            '1:1' => [
                'title' => '1:1',
                'value' => 1.0,
            ],
            'free' => [
                'title' => 'Free',
                'value' => 0.0,
            ],
        ],
    ],
];


defined('TYPO3') or die();

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = [

    'desktop' => [
        'title' => 'Desktop',
        'allowedAspectRatios' => [
            '16:9' => [
                'title' => '16:9',
                'value' => 16 / 9,
            ],
            '4:3' => [
                'title' => '4:3',
                'value' => 4 / 3,
            ],
            'free' => [
                'title' => 'Free',
                'value' => 0.0,
            ],
        ],
    ],

    'tablet' => [
        'title' => 'Tablet',
        'allowedAspectRatios' => [
            '4:3' => [
                'title' => '4:3',
                'value' => 4 / 3,
            ],
            '1:1' => [
                'title' => '1:1',
                'value' => 1.0,
            ],
            'free' => [
                'title' => 'Free',
                'value' => 0.0,
            ],
        ],
    ],

    'mobile' => [
        'title' => 'Mobile',
        'allowedAspectRatios' => [
            '4:5' => [
                'title' => '4:5',
                'value' => 4 / 5,
            ],
            '1:1' => [
                'title' => '1:1',
                'value' => 1.0,
            ],
            'free' => [
                'title' => 'Free',
                'value' => 0.0,
            ],
        ],
    ],

];
