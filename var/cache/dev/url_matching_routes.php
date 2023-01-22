<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::accueil'], null, null, null, false, false, null]],
        '/corporations' => [[['_route' => 'app_corporations_index', '_controller' => 'App\\Controller\\CorporationsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/corporations/new' => [[['_route' => 'app_corporations_new', '_controller' => 'App\\Controller\\CorporationsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/ville' => [[['_route' => 'app_ville_index', '_controller' => 'App\\Controller\\VilleController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/corporations/([^/]++)(?'
                    .'|(*:32)'
                    .'|/edit(*:44)'
                    .'|(*:51)'
                .')'
                .'|/ville/([^/]++)(?'
                    .'|(*:77)'
                    .'|/edit(*:89)'
                    .'|(*:96)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:135)'
                    .'|wdt/([^/]++)(*:155)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:201)'
                            .'|router(*:215)'
                            .'|exception(?'
                                .'|(*:235)'
                                .'|\\.css(*:248)'
                            .')'
                        .')'
                        .'|(*:258)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_corporations_show', '_controller' => 'App\\Controller\\CorporationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_corporations_edit', '_controller' => 'App\\Controller\\CorporationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_corporations_delete', '_controller' => 'App\\Controller\\CorporationsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        77 => [[['_route' => 'app_ville_show', '_controller' => 'App\\Controller\\VilleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        89 => [[['_route' => 'app_ville_edit', '_controller' => 'App\\Controller\\VilleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        96 => [[['_route' => 'app_ville_delete', '_controller' => 'App\\Controller\\VilleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        135 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        155 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        215 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        235 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        248 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        258 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
