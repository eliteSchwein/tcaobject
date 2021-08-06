<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_tcaobject_domain_model_example', 'EXT:tcaobject/Resources/Private/Language/locallang_csh_tx_tcaobject_domain_model_example.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_tcaobject_domain_model_example');
});
