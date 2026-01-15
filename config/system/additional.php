<?php

$GLOBALS['TYPO3_CONF_VARS']['MAIL']['layoutRootPaths'][700] = 'EXT:vt12/Resources/Private/Extensions/core/Layouts/'; 

$GLOBALS['TYPO3_CONF_VARS']['SYS']['passwordPolicies']['simple'] = [
    'validators' => [
        \TYPO3\CMS\Core\PasswordPolicy\Validator\CorePasswordValidator::class => [
            'options' => [
                'minimumLength' => 6,
            ],
        ],
    ],
];

$GLOBALS['TYPO3_CONF_VARS']['BE']['passwordPolicy'] = 'vt12';
$GLOBALS['TYPO3_CONF_VARS']['FE']['passwordPolicy'] = 'vt12';

if (getenv('IS_DDEV_PROJECT') == 'true') {
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        [
            'DB' => [
                'Connections' => [
                    'Default' => [
                        'dbname' => 'db',
                        'driver' => 'mysqli',
                        'host' => 'db',
                        'password' => 'db',
                        'port' => '3306',
                        'user' => 'db',
                    ],
                ],
            ],
            // This GFX configuration allows processing by installed ImageMagick 6
            'GFX' => [
                'processor' => 'ImageMagick',
                'processor_path' => '/usr/bin/',
                'processor_path_lzw' => '/usr/bin/',
            ],
            // This mail configuration sends all emails to mailpit
            'MAIL' => [
                'transport' => 'smtp',
                'transport_smtp_encrypt' => false,
                'transport_smtp_server' => 'localhost:1025',
                'transport_sendmail_command' => '/usr/local/bin/mailpit sendmail -t --smtp-addr 127.0.0.1:1025',
            ],
            'SYS' => [
                'trustedHostsPattern' => '.*.*',
                'devIPmask' => '*',
                'displayErrors' => 1,
            ],
        ]
    );
}
