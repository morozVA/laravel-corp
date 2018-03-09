<?php

Route::resource('/', 'IndexController', [
    'only' => ['index'],
    'names' => [
        'index' => 'home'
    ]
    ]);

Route::resource('portfolios', 'PortfolioController', [
    'parameters' => [
        'portfolios' => 'alias'
    ],
]);

Route::resource('articles', 'ArticlesController', [
    'parametres' => [
        'articles' => 'alias'
    ],
]);