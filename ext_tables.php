<?php
defined('TYPO3_MODE') || die();

use ThomasLudwig\Tcaobject\Controller\ExampleController;

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TCAObject',
        'web',
        'Tcaobject',
        '',
        [
            ExampleController::class => 'list, show',
        ],
        [
            'access' => 'user,group',
            'icon'   => '',
            'labels' => 'TCA Object Debug',
        ]
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_tcaobject_domain_model_example', 'EXT:tcaobject/Resources/Private/Language/locallang_csh_tx_tcaobject_domain_model_example.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_tcaobject_domain_model_example');
});
