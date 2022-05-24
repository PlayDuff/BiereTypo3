<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'BiereFf',
        'Fb1',
        [
            \Biere\BiereFf\Controller\BeerController::class => 'list, show, search',
            \Biere\BiereFf\Controller\ReviewController::class => 'create',
            \Biere\BiereFf\Controller\BrandController::class => 'list'
        ],
        // non-cacheable actions
        [
            \Biere\BiereFf\Controller\BeerController::class => '',
            \Biere\BiereFf\Controller\ReviewController::class => 'create',
            \Biere\BiereFf\Controller\BrandController::class => ''
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    fb1 {
                        iconIdentifier = biere_ff-plugin-fb1
                        title = LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biere_ff_fb1.name
                        description = LLL:EXT:biere_ff/Resources/Private/Language/locallang_db.xlf:tx_biere_ff_fb1.description
                        tt_content_defValues {
                            CType = list
                            list_type = biereff_fb1
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
