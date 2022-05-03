<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Biere',
    'description' => 'Liste de bières',
    'category' => 'plugin',
    'author' => 'Florian Finot',
    'author_email' => 'flofinot2001@gmail.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
