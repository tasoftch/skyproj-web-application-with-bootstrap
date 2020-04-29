<?php

use Skyline\Component\Config\CSSComponent;
use Skyline\Component\Config\IconComponent;
use Skyline\Component\Config\JavaScriptComponent;
use Skyline\Component\Config\JavaScriptPostLoadComponent;

return [
    'Application' => [
        'js' => new JavaScriptComponent('/Public/js/main.js'),
        'css' => new CSSComponent("/Public/css/main.min.css"),
        'icon' => new IconComponent("/Public/img/logo.png"),
		'@require' => [
			'jQuery'
		],
		"bootstrap-js" => new JavaScriptPostLoadComponent(
			'https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.bundle.min.js',
			"sha384-VoPFvGr9GxhDT3n8vqqZ46twP5lgex+raTCfICQy73NLhN7ZqSfCtfSn4mLA2EFA"
		)
    ]
];