<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => '21b2329c1781e4e752a413cd0be0efd8'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'ada.cvtfb4uhbukm.us-east-1.rds.amazonaws.com',
                'dbname' => 'adamgtcommerce',
                'username' => 'adamgtcommerc',
                'password' => '6WqxZhqEpiJjsdur',
                'active' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => 'ada-cache.4cruoe.0001.use1.cache.amazonaws.com',
            'port' => '6379',
            'password' => '',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '0',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '1',
            'max_concurrency' => '6',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '0',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000'
        ]
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => 'ada-cache.4cruoe.0001.use1.cache.amazonaws.com',
                    'port' => '6379',
                    'persistent' => '',
                    'database' => 1,
                    'password' => '',
                    'force_standalone' => 0,
                    'connect_retries' => 2,
                    'read_timeout' => 10,
                    'automatic_cleaning_factor' => 0,
                    'compress_tags' => 1,
                    'compress_data' => 1,
                    'compress_threshold' => 20480,
                    'compression_lib' => 'gzip'
                ]
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'google_product' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'ada.mgtcommerce.com'
    ],
    'install' => [
        'date' => 'Mon, 20 Jan 2020 17:23:59 +0000'
    ]
];
