<?php

return function ($page) {
    $services = $page
        ->children()
        ->listed()
        ->filterBy('availability', '!=', 'Hidden');

    return [
        'services' => $services
    ];
};

