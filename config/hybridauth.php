<?php
use Cake\Core\Configure;

return [
    'HybridAuth' => [
        'providers' => [
            'Steam' => [
                'enabled' => true,
            ]
        ],
        'debug_mode' => Configure::read('debug'),
        'debug_file' => LOGS . 'hybridauth.log',
    ]
];