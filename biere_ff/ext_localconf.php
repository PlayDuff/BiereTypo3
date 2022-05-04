<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'BiereFf',
        'Biere1',
        [
            \Biere\BiereFf\Controller\BiereController::class => 'list, show, search, focus',
            \Biere\BiereFf\Controller\CountryController::class => 'search',
            \Biere\BiereFf\Controller\ReviewController::class => 'new, create'
        ],
        // non-cacheable actions
        [
            \Biere\BiereFf\Controller\BiereController::class => '',
            \Biere\BiereFf\Controller\CountryController::class => '',
            \Biere\BiereFf\Controller\ReviewController::class => 'create'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    biere1 {
                        iconIdentifier = biere_ff-plugin-biere1
                        title = LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biere_ff_biere1.name
                        description = LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biere_ff_biere1.description
                        tt_content_defValues {
                            CType = list
                            list_type = biereff_biere1
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
