<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Distribution package for bootstrap extension',
    'description' => 'This package delivers a new website.',
    'category' => 'distribution',
    'version' => '1.0.3',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Marcel',
    'author_email' => 'mb@lbrmedia.de',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'bootstrap' => '1.0.16-1.0.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
           'LBRmedia\BootstrapExample\\' => 'Classes',
        ],
    ],
];
