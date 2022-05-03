<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_biereff_domain_model_biere', 'EXT:biere_ff/Resources/Private/Language/locallang_csh_tx_biereff_domain_model_biere.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_biereff_domain_model_biere');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_biereff_domain_model_type', 'EXT:biere_ff/Resources/Private/Language/locallang_csh_tx_biereff_domain_model_type.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_biereff_domain_model_type');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_biereff_domain_model_ingredient', 'EXT:biere_ff/Resources/Private/Language/locallang_csh_tx_biereff_domain_model_ingredient.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_biereff_domain_model_ingredient');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_biereff_domain_model_review', 'EXT:biere_ff/Resources/Private/Language/locallang_csh_tx_biereff_domain_model_review.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_biereff_domain_model_review');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_biereff_domain_model_brand', 'EXT:biere_ff/Resources/Private/Language/locallang_csh_tx_biereff_domain_model_brand.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_biereff_domain_model_brand');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_biereff_domain_model_country', 'EXT:biere_ff/Resources/Private/Language/locallang_csh_tx_biereff_domain_model_country.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_biereff_domain_model_country');
})();
