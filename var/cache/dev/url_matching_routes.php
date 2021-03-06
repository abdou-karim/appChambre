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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/batiment' => [[['_route' => 'batiment', '_controller' => 'App\\Controller\\BatimentController::index'], null, null, null, false, false, null]],
        '/chambre' => [[['_route' => 'chambre', '_controller' => 'App\\Controller\\ChambreController::index'], null, null, null, false, false, null]],
        '/listechambre' => [[['_route' => 'deletechambre', '_controller' => 'App\\Controller\\ChambreController::allListChambre'], null, null, null, false, false, null]],
        '/chambre/generernumerochambre' => [[['_route' => 'generernumerochambre', '_controller' => 'App\\Controller\\ChambreController::getNewNumeroChambre'], null, null, null, false, false, null]],
        '/chambre/addchambre' => [[['_route' => 'addchambre', '_controller' => 'App\\Controller\\ChambreController::addChambre'], null, null, null, false, false, null]],
        '/etudiant' => [[['_route' => 'addetudiant', '_controller' => 'App\\Controller\\EtudiantController::addEtudiant'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/type/bourse' => [[['_route' => 'type_bourse', '_controller' => 'App\\Controller\\TypeBourseController::index'], null, null, null, false, false, null]],
        '/type/chambre' => [[['_route' => 'type_chambre', '_controller' => 'App\\Controller\\TypeChambreController::index'], null, null, null, false, false, null]],
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
                .'|/chambre/([^/]++)(?'
                    .'|/edit(*:194)'
                    .'|(*:202)'
                .')'
                .'|/js/routing(?:\\.(js|json))?(*:238)'
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
        194 => [[['_route' => 'chambre_edit', '_controller' => 'App\\Controller\\ChambreController::addChambre'], ['id'], null, null, false, false, null]],
        202 => [[['_route' => 'chambres', '_controller' => 'App\\Controller\\ChambreController::afficheIdChambre'], ['id'], null, null, false, true, null]],
        238 => [
            [['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
