<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example',
        'label' => 'string_example',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'string_example,text_example,rich_text_example,email_example',
        'iconfile' => 'EXT:tcaobject/Resources/Public/Icons/tx_tcaobject_domain_model_example.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, string_example, text_example, rich_text_example, password_example, email_example, integer_example, float_example, boolean_example, date_example, date_time_example, time_example, time_sec_example, select_example, file_example, image_example, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_tcaobject_domain_model_example',
                'foreign_table_where' => 'AND {#tx_tcaobject_domain_model_example}.{#pid}=###CURRENT_PID### AND {#tx_tcaobject_domain_model_example}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'string_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.string_example',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'text_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.text_example',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'rich_text_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.rich_text_example',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'password_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.password_example',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,password',
                'default' => ''
            ]
        ],
        'email_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.email_example',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email',
                'default' => ''
            ]
        ],
        'integer_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.integer_example',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'float_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.float_example',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'boolean_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.boolean_example',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'date_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.date_example',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date',
                'default' => null,
            ],
        ],
        'date_time_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.date_time_example',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
            ],
        ],
        'time_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.time_example',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'dbType' => 'time',
                'size' => 4,
                'eval' => 'time',
                'default' => null
            ]
            
        ],
        'time_sec_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.time_sec_example',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 6,
                'eval' => 'timesec',
                'default' => time()
            ]
        ],
        'select_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.select_example',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'file_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.file_example',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'file_example',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'file_example',
                        'tablenames' => 'tx_tcaobject_domain_model_example',
                        'table_local' => 'sys_file',
                    ],
                    'maxitems' => 1
                ]
            ),
            
        ],
        'image_example' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.image_example',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image_example',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'image_example',
                        'tablenames' => 'tx_tcaobject_domain_model_example',
                        'table_local' => 'sys_file',
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            
        ],
    
    ],
];
