<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'admin_reservations', '_controller' => 'App\\Controller\\AdminController::reservations'], null, null, null, false, false, null]],
        '/admin/biens' => [[['_route' => 'admin_biens', '_controller' => 'App\\Controller\\AdminController::biens'], null, null, null, false, false, null]],
        '/admin/bien/add' => [[['_route' => 'admin_bien_add', '_controller' => 'App\\Controller\\AdminController::addBien'], null, null, null, false, false, null]],
        '/admin/facturations' => [[['_route' => 'admin_facturations', '_controller' => 'App\\Controller\\AdminController::facturations'], null, null, null, false, false, null]],
        '/biens' => [[['_route' => 'biens_list', '_controller' => 'App\\Controller\\BienController::list'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/owner' => [[['_route' => 'app_owner', '_controller' => 'App\\Controller\\OwnerController::index'], null, null, null, false, false, null]],
        '/owner/reservations' => [[['_route' => 'owner_reservations', '_controller' => 'App\\Controller\\OwnerController::ownerReservations'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/register' => [[['_route' => 'app_user_register', '_controller' => 'App\\Controller\\UserController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|bien/edit/([^/]++)(*:197)'
                    .'|facturation/annuler/([^/]++)(*:233)'
                .')'
                .'|/reservation/([^/]++)(*:263)'
                .'|/user/(?'
                    .'|(\\d+)(*:285)'
                    .'|([^/]++)(?'
                        .'|/edit(*:309)'
                        .'|(*:317)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'admin_bien_edit', '_controller' => 'App\\Controller\\AdminController::editBien'], ['id'], null, null, false, true, null]],
        233 => [[['_route' => 'app_annuler_facturation', '_controller' => 'App\\Controller\\AdminController::annulerFacturation'], ['id'], null, null, false, true, null]],
        263 => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], ['bien_id'], null, null, false, true, null]],
        285 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        309 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        317 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
