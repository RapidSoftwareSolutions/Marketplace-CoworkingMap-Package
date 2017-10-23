<?php
$routes = [
    'metadata',
    'getAccessToken',
    'checkTokenDateExpiration',
    'getCoworkingsByCountry',
    'getCoworkingsByCity',
    'getCoworkingsByName'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

