<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'BiereFf',
        'F1',
        [
            \Biere\BiereFf\Controller\BiereController::class => 'list, show'
        ],
        // non-cacheable actions
        [
            \Biere\BiereFf\Controller\ReviewController::class => 'create, update, delete'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    f1 {
                        iconIdentifier = biere_ff-plugin-f1
                        title = LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biere_ff_f1.name
                        description = LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biere_ff_f1.description
                        tt_content_defValues {
                            CType = list
                            list_type = biereff_f1
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
