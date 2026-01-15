<?php

defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'vt12',
    'Configuration/TsConfig/Page/backend_layout.tsconfig',
    'VT12 Sitepackage'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'vt12', 
    ## Pfad zur PageTSConfig-Datei innerhalb der Extension
    'Configuration/TsConfig/Page/general.tsconfig',
    ## Titel/Name, wie die Konfiguration im Backend angezeigt wird
    'General PageTsConfig'
);