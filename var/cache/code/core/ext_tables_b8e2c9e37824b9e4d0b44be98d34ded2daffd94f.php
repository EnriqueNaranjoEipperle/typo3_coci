<?php
/**
 * Compiled ext_tables.php cache file
 */

/**
 * Extension: setup
 * File: /var/www/html/vendor/typo3/cms-setup/ext_tables.php
 */

namespace {




use TYPO3\CMS\Setup\Controller\SetupModuleController;

defined('TYPO3') or die();

$GLOBALS['TYPO3_USER_SETTINGS'] = [
    'columns' => [
        'realName' => [
            'type' => 'text',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_realName',
            'table' => 'be_users',
            'max' => 80,
        ],
        'email' => [
            'type' => 'email',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_email',
            'table' => 'be_users',
            'max' => 255,
        ],
        'emailMeAtLogin' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:emailMeAtLogin',
        ],
        'password' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPassword',
            'table' => 'be_users',
        ],
        'password2' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPasswordAgain',
            'table' => 'be_users',
        ],
        'avatar' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
            'type' => 'avatar',
            'table' => 'be_users',
        ],
        'lang' => [
            'type' => 'language',
            'table' => 'be_users',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:language',
        ],
        'startModule' => [
            'type' => 'select',
            'itemsProcFunc' => SetupModuleController::class . '->renderStartModuleSelect',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:startModule',
        ],
        'titleLen' => [
            'type' => 'number',
            'class' => 'form-control-adapt',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:maxTitleLen',
        ],
        'edit_docModuleUpload' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:edit_docModuleUpload',
        ],
        'showHiddenFilesAndFolders' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:showHiddenFilesAndFolders',
        ],
        'copyLevels' => [
            'type' => 'number',
            'class' => 'form-control-adapt',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:copyLevels',
        ],
        'resetConfiguration' => [
            'type' => 'button',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfiguration',
            'buttonlabel' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfigurationButton',
            'confirm' => true,
            'confirmData' => [
                'message' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:setToStandardQuestion',
                'eventName' => 'setup:confirmation:response',
            ],
        ],
        'mfaProviders' => [
            'type' => 'mfa',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:mfaProviders',
        ],
        'backendTitleFormat' => [
            'type' => 'select',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:backendTitleFormat',
            'items' => [
                'titleFirst' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:backendTitleFormat.titleFirst',
                'sitenameFirst' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:backendTitleFormat.sitenameFirst',
            ],
        ],
    ],
    'showitem' => '--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:personal_data,realName,email,emailMeAtLogin,avatar,lang,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:accountSecurity,password,password2,mfaProviders,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:opening,startModule,backendTitleFormat,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:editFunctionsTab,titleLen,edit_docModuleUpload,showHiddenFilesAndFolders,copyLevels,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetTab,resetConfiguration',
];
}

/**
 * Extension: news
 * File: /var/www/html/vendor/georgringer/news/ext_tables.php
 */

namespace {


use GeorgRinger\News\Domain\Model\Dto\EmConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;

$boot = static function (): void {
    $configuration = GeneralUtility::makeInstance(EmConfiguration::class);

    // Add tables to livesearch (e.g. "#news:fo" or "#newscat:fo")
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['news'] = 'tx_news_domain_model_news';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['newstag'] = 'tx_news_domain_model_tag';

    /* ===========================================================================
        Default configuration
    =========================================================================== */
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByCategory'] = 'uid,title,tstamp,sorting';
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByNews'] = 'tstamp,datetime,crdate,title' . ($configuration->getManualSorting() ? ',sorting' : '');
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByTag'] = 'tstamp,crdate,title';
};

$boot();
unset($boot);
}

/**
 * Extension: content_defender
 * File: /var/www/html/vendor/ichhabrecht/content-defender/ext_tables.php
 */

namespace {


defined('TYPO3') || die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\IchHabRecht\ContentDefender\Form\FormDataProvider\TcaCTypeItems::class] = [
    'depends' => [
        \TYPO3\CMS\Backend\Form\FormDataProvider\TcaSelectItems::class,
    ],
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\IchHabRecht\ContentDefender\Form\FormDataProvider\TcaColPosItems::class] = [
    'depends' => [
        \IchHabRecht\ContentDefender\Form\FormDataProvider\TcaCTypeItems::class,
    ],
];

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['content_defender'] =
    \IchHabRecht\ContentDefender\Hooks\DatamapDataHandlerHook::class;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['content_defender'] =
    \IchHabRecht\ContentDefender\Hooks\CmdmapDataHandlerHook::class;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms']['db_new_content_el']['wizardItemsHook']['content_defender'] =
    \IchHabRecht\ContentDefender\Hooks\NewContentElementWizardHook::class;
}

#