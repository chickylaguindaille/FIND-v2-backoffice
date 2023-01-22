<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/chicken' => [[['_route' => 'app_chicken_index', '_controller' => 'App\\Controller\\ChickenController::index'], null, ['GET' => 0], null, true, false, null]],
        '/chicken/new' => [[['_route' => 'app_chicken_new', '_controller' => 'App\\Controller\\ChickenController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/corporations' => [[['_route' => 'app_corporations_index', '_controller' => 'App\\Controller\\CorporationsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/corporations/new' => [[['_route' => 'app_corporations_new', '_controller' => 'App\\Controller\\CorporationsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\FindController::accueil'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/ville' => [[['_route' => 'app_ville_index', '_controller' => 'App\\Controller\\VilleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ville/liste' => [[['_route' => 'ville', '_controller' => 'App\\Controller\\VilleController::villes'], null, ['GET' => 0], null, false, false, null]],
        '/ville/new' => [[['_route' => 'app_ville_new', '_controller' => 'App\\Controller\\VilleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/lucky/number' => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|hicken/([^/]++)(?'
                        .'|(*:30)'
                        .'|/edit(*:42)'
                        .'|(*:49)'
                    .')'
                    .'|orporations/([^/]++)(?'
                        .'|(*:80)'
                        .'|/edit(*:92)'
                        .'|(*:99)'
                    .')'
                .')'
                .'|/ville/([^/]++)(?'
                    .'|(*:126)'
                    .'|/edit(*:139)'
                    .'|(*:147)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:187)'
                    .'|wdt/([^/]++)(*:207)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:253)'
                            .'|router(*:267)'
                            .'|exception(?'
                                .'|(*:287)'
                                .'|\\.css(*:300)'
                            .')'
                        .')'
                        .'|(*:310)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'app_chicken_show', '_controller' => 'App\\Controller\\ChickenController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        42 => [[['_route' => 'app_chicken_edit', '_controller' => 'App\\Controller\\ChickenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        49 => [[['_route' => 'app_chicken_delete', '_controller' => 'App\\Controller\\ChickenController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        80 => [[['_route' => 'app_corporations_show', '_controller' => 'App\\Controller\\CorporationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        92 => [[['_route' => 'app_corporations_edit', '_controller' => 'App\\Controller\\CorporationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        99 => [[['_route' => 'app_corporations_delete', '_controller' => 'App\\Controller\\CorporationsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        126 => [[['_route' => 'app_ville_show', '_controller' => 'App\\Controller\\VilleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        139 => [[['_route' => 'app_ville_edit', '_controller' => 'App\\Controller\\VilleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        147 => [[['_route' => 'app_ville_delete', '_controller' => 'App\\Controller\\VilleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        187 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        207 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        253 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        267 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        287 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        300 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        310 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
