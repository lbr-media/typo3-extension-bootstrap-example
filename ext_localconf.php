<?php

declare(strict_types=1);

defined('TYPO3') or die();

// Register icon set hook for frontend
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\LBRmedia\Bootstrap\Utility\BootstrapUtility::class]['renderIconSet'][] = \LBRmedia\BootstrapExample\Hooks\IconSet::class . '->getFontawesomeIconMarkup';

// Register icon set hook for backend javascript
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\LBRmedia\Bootstrap\Form\Element\BootstrapIconsElement::class]['formElement'][] = 'TYPO3/CMS/BootstrapExample/FormEngine/Element/BootstrapIconsElementFontAwesomeHook';
