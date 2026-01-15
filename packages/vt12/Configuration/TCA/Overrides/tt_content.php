<?php

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\GeneralUtility;
use B13\Container\Tca\Registry;
use B13\Container\Tca\ContainerConfiguration;

$registry = GeneralUtility::makeInstance(Registry::class);

// 2 Spalten Container
$registry->configureContainer(
    (new ContainerConfiguration(
        '2cols', // CType
        '2 Spalten', // Label
        '50% / 50%', // description
        [
            [
                ['name' => 'Linke Spalte', 'colPos' => 201, 'disallowed' => ['CType' => '2cols,3cols']],
                ['name' => 'Rechte Spalte', 'colPos' => 202, 'disallowed' => ['CType' => '2cols,3cols']],
            ],
        ]
    ))
    ->setIcon('EXT:container/Resources/Public/Icons/container-2col.svg')
    ->setSaveAndCloseInNewContentElementWizard(true)
);

// 3 Spalten Container
$registry->configureContainer(
    (new ContainerConfiguration(
        '3cols', // CType
        '3 Spalten', // Label
        '33% / 33% / 33%', // description
        [
            [
                ['name' => 'Linke Spalte', 'colPos' => 301, 'disallowed' => ['CType' => '2cols,3cols']],
                ['name' => 'Mittlere Spalte', 'colPos' => 302, 'disallowed' => ['CType' => '2cols,3cols']],
                ['name' => 'Rechte Spalte', 'colPos' => 303, 'disallowed' => ['CType' => '2cols,3cols']],
            ],
        ]
    ))
    ->setIcon('EXT:container/Resources/Public/Icons/container-3col.svg')
    ->setSaveAndCloseInNewContentElementWizard(true)
);
