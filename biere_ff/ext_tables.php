<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'BiereFf',
        'web',
        'bk1',
        '',
        [
            \Biere\BiereFf\Controller\BeerController::class => 'list, show, search',\Biere\BiereFf\Controller\ReviewController::class => 'new, create',\Biere\BiereFf\Controller\BrandController::class => 'list',
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:biere_ff/Resources/Public/Icons/user_mod_bk1.svg',
            'labels' => 'LLL:EXT:biere_ff/Resources/Private/Language/locallang_bk1.xlf',
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_biereff_domain_model_beer', 'EXT:biere_ff/Resources/Private/Language/locallang_csh_tx_biereff_domain_model_beer.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_biereff_domain_model_beer');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_biereff_domain_model_type', 'EXT:biere_ff/Resources/Private/Language/locallang_csh_tx_biereff_domain_model_type.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_biereff_domain_model_type');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_biereff_domain_model_ingredient', 'EXT:biere_ff/Resources/Private/Language/locallang_csh_tx_biereff_domain_model_ingredient.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_biereff_domain_model_ingredient');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_biereff_domain_model_country', 'EXT:biere_ff/Resources/Private/Language/locallang_csh_tx_biereff_domain_model_country.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_biereff_domain_model_country');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_biereff_domain_model_review', 'EXT:biere_ff/Resources/Private/Language/locallang_csh_tx_biereff_domain_model_review.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_biereff_domain_model_review');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_biereff_domain_model_brand', 'EXT:biere_ff/Resources/Private/Language/locallang_csh_tx_biereff_domain_model_brand.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_biereff_domain_model_brand');
})();
