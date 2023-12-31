<?php

$arUrlRewrite = array(
    0 =>
        array(
            'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
            'RULE' => 'componentName=$1',
            'ID' => null,
            'PATH' => '/bitrix/services/mobileapp/jn.php',
            'SORT' => 100,
        ),
    1 =>
        array(
            'CONDITION' => '#^/rest/#',
            'RULE' => '',
            'ID' => null,
            'PATH' => '/bitrix/services/rest/index.php',
            'SORT' => 100,
        ),
    array(
        'CONDITION' => '#^/blog/#',
        'RULE' => '',
        'ID' => 'bitrix:news',
        'PATH' => '/blog/index.php',
        'SORT' => 100,
    ),
);
