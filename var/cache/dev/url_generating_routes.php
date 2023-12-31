<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'admin_reservations' => [[], ['_controller' => 'App\\Controller\\AdminController::reservations'], [], [['text', '/admin/reservations']], [], [], []],
    'admin_biens' => [[], ['_controller' => 'App\\Controller\\AdminController::biens'], [], [['text', '/admin/biens']], [], [], []],
    'admin_bien_add' => [[], ['_controller' => 'App\\Controller\\AdminController::addBien'], [], [['text', '/admin/bien/add']], [], [], []],
    'admin_bien_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editBien'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/bien/edit']], [], [], []],
    'admin_facturations' => [[], ['_controller' => 'App\\Controller\\AdminController::facturations'], [], [['text', '/admin/facturations']], [], [], []],
    'app_annuler_facturation' => [['id'], ['_controller' => 'App\\Controller\\AdminController::annulerFacturation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/facturation/annuler']], [], [], []],
    'biens_list' => [[], ['_controller' => 'App\\Controller\\BienController::list'], [], [['text', '/biens']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_owner' => [[], ['_controller' => 'App\\Controller\\OwnerController::index'], [], [['text', '/owner']], [], [], []],
    'owner_reservations' => [[], ['_controller' => 'App\\Controller\\OwnerController::ownerReservations'], [], [['text', '/owner/reservations']], [], [], []],
    'app_reservation' => [['bien_id'], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['variable', '/', '[^/]++', 'bien_id', true], ['text', '/reservation']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user_register' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/user/register']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
];
