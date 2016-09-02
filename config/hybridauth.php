<?php
use Cake\Core\Configure;

return [
    'HybridAuth' => [
        'providers' => [
            'Steam' => [
                'enabled' => true,
                'login_start' => 'http://localhost/Orokin/users'
            ]
        ],
        'debug_mode' => Configure::read('debug'),
        'debug_file' => LOGS . 'hybridauth.log',
    ]
];