<?php

use Skyline\Component\Config\CSSComponent;
use Skyline\Component\Config\IconComponent;
use Skyline\Component\Config\JavaScriptComponent;

return [
    'Application' => [
        'js' => new JavaScriptComponent('/Public/js/main.js'),
        'css' => new CSSComponent("/Public/css/main.min.css"),
        'icon' => new IconComponent("/Public/img/logo.png"),
		'@require' => [
			'jQuery'
		]
    ],
    'jQuery' => [
        'js' => new JavaScriptComponent('https://code.jquery.com/jquery-3.4.1.min.js', "sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=")
    ]
];