<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biereff_domain_model_biere',
        'label' => 'name',
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
        'searchFields' => '',
        'iconfile' => 'EXT:biere_ff/Resources/Public/Icons/tx_biereff_domain_model_biere.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'name, image, brand, type, taste, description, degree, ingredients, country, reviews, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
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
                'foreign_table' => 'tx_biereff_domain_model_biere',
                'foreign_table_where' => 'AND {#tx_biereff_domain_model_biere}.{#pid}=###CURRENT_PID### AND {#tx_biereff_domain_model_biere}.{#sys_language_uid} IN (-1,0)',
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

        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biereff_domain_model_biere.name',
            'config' => [
                'type' => 'inline',
                'foreign_table' => '',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biereff_domain_model_biere.image',
            'config' => [
                'type' => 'inline',
                'foreign_table' => '',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'brand' => [
            'exclude' => true,
            'label' => 'LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biereff_domain_model_biere.brand',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_biereff_domain_model_brand',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biereff_domain_model_biere.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_biereff_domain_model_type',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'taste' => [
            'exclude' => true,
            'label' => 'LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biereff_domain_model_biere.taste',
            'config' => [
                'type' => 'inline',
                'foreign_table' => '',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biereff_domain_model_biere.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => '',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'degree' => [
            'exclude' => true,
            'label' => 'LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biereff_domain_model_biere.degree',
            'config' => [
                'type' => 'inline',
                'foreign_table' => '',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'ingredients' => [
            'exclude' => true,
            'label' => 'LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biereff_domain_model_biere.ingredients',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_biereff_domain_model_ingredient',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'country' => [
            'exclude' => true,
            'label' => 'LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biereff_domain_model_biere.country',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_biereff_domain_model_country',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'reviews' => [
            'exclude' => true,
            'label' => 'LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biereff_domain_model_biere.reviews',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_biereff_domain_model_review',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
    
    ],
];
