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
        '/admin/compagnie' => [[['_route' => 'admin_compagnie_index', '_controller' => 'App\\Controller\\Admin\\CompagnieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/comment' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/compagnie' => [[['_route' => 'app_compagnie_index', '_controller' => 'App\\Controller\\CompagnieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/compagnie/select-or-create' => [[['_route' => 'app_compagnie_select_or_create', '_controller' => 'App\\Controller\\CompagnieController::selectOrCreate'], null, ['GET' => 0], null, false, false, null]],
        '/compagnie/new' => [[['_route' => 'app_compagnie_new', '_controller' => 'App\\Controller\\CompagnieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/don/create' => [[['_route' => 'app_don_create', '_controller' => 'App\\Controller\\DonController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/don' => [[['_route' => 'app_don_index', '_controller' => 'App\\Controller\\DonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/don/new' => [[['_route' => 'app_don_new', '_controller' => 'App\\Controller\\DonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/donateur/dashboard' => [[['_route' => 'app_donateur_dashboard', '_controller' => 'App\\Controller\\DonateurDashboardController::index'], null, null, null, true, false, null]],
        '/faire-don' => [[['_route' => 'app_faire_don', '_controller' => 'App\\Controller\\DonationController::faireDon'], null, null, null, false, false, null]],
        '/historique-don' => [[['_route' => 'app_historique_don', '_controller' => 'App\\Controller\\DonationController::historiqueDon'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/feature' => [[['_route' => 'app_feature', '_controller' => 'App\\Controller\\HomeController::index_feature'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'app_team', '_controller' => 'App\\Controller\\HomeController::index_team'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\HomeController::index_about'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service', '_controller' => 'App\\Controller\\HomeController::index_service'], null, null, null, false, false, null]],
        '/appointment' => [[['_route' => 'app_appointment', '_controller' => 'App\\Controller\\HomeController::index_appointment'], null, null, null, false, false, null]],
        '/testimonial' => [[['_route' => 'app_testimonial', '_controller' => 'App\\Controller\\HomeController::index_testimonial'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::index_contact'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'app_404', '_controller' => 'App\\Controller\\HomeController::index_404'], null, null, null, false, false, null]],
        '/medecin/dashboard' => [[['_route' => 'app_medecin_dashboard', '_controller' => 'App\\Controller\\MedecinController::dashboard'], null, null, null, false, false, null]],
        '/patient/dashboard' => [[['_route' => 'app_patient_dashboard', '_controller' => 'App\\Controller\\PatientController::dashboard'], null, null, null, false, false, null]],
        '/publication' => [[['_route' => 'app_publication_index', '_controller' => 'App\\Controller\\PublicationController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/publication/new' => [[['_route' => 'app_publication_new', '_controller' => 'App\\Controller\\PublicationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/chatbot/test' => [[['_route' => 'chatbot_test', '_controller' => 'App\\Controller\\ChatbotController::test'], null, ['GET' => 0], null, false, false, null]],
        '/chatbot/message' => [[['_route' => 'chatbot_message', '_controller' => 'App\\Controller\\ChatbotController::message'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/like/(?'
                    .'|publication/([^/]++)(?'
                        .'|(*:234)'
                    .')'
                    .'|comment/([^/]++)(?'
                        .'|(*:262)'
                    .')'
                .')'
                .'|/admin/compagnie/([^/]++)/(?'
                    .'|modifier(*:309)'
                    .'|valider(*:324)'
                    .'|rejeter(*:339)'
                    .'|supprimer(*:356)'
                .')'
                .'|/com(?'
                    .'|ment/([^/]++)(?'
                        .'|(*:388)'
                        .'|/edit(*:401)'
                        .'|(*:409)'
                    .')'
                    .'|pagnie/([^/]++)(?'
                        .'|(*:436)'
                        .'|/edit(*:449)'
                        .'|(*:457)'
                    .')'
                .')'
                .'|/don/([^/]++)(?'
                    .'|(*:483)'
                    .'|/edit(*:496)'
                    .'|(*:504)'
                .')'
                .'|/publication/([^/]++)(?'
                    .'|(*:537)'
                    .'|/(?'
                        .'|edit(*:553)'
                        .'|delete(*:567)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        234 => [
            [['_route' => 'like_publication', '_controller' => 'App\\Controller\\LikeController::likePublication'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_like_publication', '_controller' => 'App\\Controller\\LikeController::likePublication'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        262 => [
            [['_route' => 'like_comment', '_controller' => 'App\\Controller\\LikeController::likeComment'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_like_comment', '_controller' => 'App\\Controller\\LikeController::likeComment'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        309 => [[['_route' => 'admin_compagnie_edit', '_controller' => 'App\\Controller\\Admin\\CompagnieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        324 => [[['_route' => 'admin_compagnie_validate', '_controller' => 'App\\Controller\\Admin\\CompagnieController::validate'], ['id'], ['POST' => 0], null, false, false, null]],
        339 => [[['_route' => 'admin_compagnie_reject', '_controller' => 'App\\Controller\\Admin\\CompagnieController::reject'], ['id'], ['POST' => 0], null, false, false, null]],
        356 => [[['_route' => 'admin_compagnie_delete', '_controller' => 'App\\Controller\\Admin\\CompagnieController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        388 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        401 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        409 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        436 => [[['_route' => 'app_compagnie_show', '_controller' => 'App\\Controller\\CompagnieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        449 => [[['_route' => 'app_compagnie_edit', '_controller' => 'App\\Controller\\CompagnieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        457 => [[['_route' => 'app_compagnie_delete', '_controller' => 'App\\Controller\\CompagnieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        483 => [[['_route' => 'app_don_show', '_controller' => 'App\\Controller\\DonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        496 => [[['_route' => 'app_don_edit', '_controller' => 'App\\Controller\\DonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        504 => [[['_route' => 'app_don_delete', '_controller' => 'App\\Controller\\DonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        537 => [[['_route' => 'app_publication_show', '_controller' => 'App\\Controller\\PublicationController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        553 => [[['_route' => 'app_publication_edit', '_controller' => 'App\\Controller\\PublicationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        567 => [
            [['_route' => 'app_publication_delete', '_controller' => 'App\\Controller\\PublicationController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
