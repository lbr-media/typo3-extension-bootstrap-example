<?php

declare(strict_types=1);

call_user_func(
    function ($extKey) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
            $extKey,
            'Configuration/TsConfig/Page/General.typoscript',
            'General'
        );

        // \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        //     $extKey,
        //     'Configuration/TsConfig/BackendLayouts/General.typoscript',
        //     'Backend Layouts'
        // );
    },
    'bootstrap_example'
);
