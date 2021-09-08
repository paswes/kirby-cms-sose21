<?php

return function ($page) {
    $products = $page
        ->children()
        ->listed()
        ->filterBy('availability', '!=', 'Hidden');

    return [
        'products' => $products
    ];
};




