<?php
return [
    'core' => [
        'minPhpVersion' => '7.0.0'
    ],
    'final' => [
        'key' => true,
        'publish' => false
    ],
    'requirements' => [
        'php' => [
            'openssl',
            'pdo',
            'mbstring',
            'tokenizer',
            'JSON',
            'cURL',
        ],
        'apache' => [
            'mod_rewrite',
        ],
    ],

    'permissions' => [
        'storage/framework/'     => '775',
        'storage/logs/'          => '775',
        'bootstrap/cache/'       => '775'
    ],

    'installedAction' => '',

];
