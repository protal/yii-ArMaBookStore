<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
    	'authManager' => [
    			'class' => 'yii\mongodb\rbac\MongoDbManager',
    	],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
	'modules' => [
			'gii' => [
				'class' => 'yii\gii\Module',
					'generators' => [
						'mongoDbModel' => [
								'class' => 'yii\mongodb\gii\model\Generator'
						]
					],
			],
	]
];
