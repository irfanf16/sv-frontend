<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie', '/itcn-contact-post', '*'],  // Allow all defined paths
    'allowed_methods' => ['POST', 'GET', 'OPTIONS', 'PUT', 'DELETE'],        // Allow these methods
    'allowed_origins' => ['*'],                                              // Allow all origins
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],                                              // Allow all headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,

];
