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
        '/admin' => [
            [['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null],
            [['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminHomeController::index'], null, null, null, false, false, null],
        ],
        '/admin/publications' => [[['_route' => 'admin_publications', '_controller' => 'App\\Controller\\AdminController::managePublications'], null, null, null, false, false, null]],
        '/admin/commandes' => [[['_route' => 'admin_commandes', '_controller' => 'App\\Controller\\AdminController::manageCommandes'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\AdminHomeController::dashboard'], null, null, null, false, false, null]],
        '/elements/buttons' => [[['_route' => 'app_buttons', '_controller' => 'App\\Controller\\AdminHomeController::buttons'], null, null, null, false, false, null]],
        '/elements/typography' => [[['_route' => 'app_typography', '_controller' => 'App\\Controller\\AdminHomeController::typography'], null, null, null, false, false, null]],
        '/elements/other' => [[['_route' => 'app_other_elements', '_controller' => 'App\\Controller\\AdminHomeController::otherElements'], null, null, null, false, false, null]],
        '/widgets' => [[['_route' => 'app_widgets', '_controller' => 'App\\Controller\\AdminHomeController::widgets'], null, null, null, false, false, null]],
        '/forms' => [[['_route' => 'app_forms', '_controller' => 'App\\Controller\\AdminHomeController::forms'], null, null, null, false, false, null]],
        '/tables' => [[['_route' => 'app_tables', '_controller' => 'App\\Controller\\AdminHomeController::tables'], null, null, null, false, false, null]],
        '/charts' => [[['_route' => 'app_charts', '_controller' => 'App\\Controller\\AdminHomeController::charts'], null, null, null, false, false, null]],
        '/signin' => [[['_route' => 'app_signin', '_controller' => 'App\\Controller\\AdminHomeController::signin'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\AdminHomeController::signup'], null, null, null, false, false, null]],
        '/404admin' => [[['_route' => 'app_404_admin', '_controller' => 'App\\Controller\\AdminHomeController::error404'], null, null, null, false, false, null]],
        '/groups' => [[['_route' => 'app_chat_group_index', '_controller' => 'App\\Controller\\ChatGroupController::index'], null, ['GET' => 0], null, true, false, null]],
        '/groups/new' => [[['_route' => 'app_chat_group_new', '_controller' => 'App\\Controller\\ChatGroupController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande/admin/commande' => [[['_route' => 'app_admin_commande_index', '_controller' => 'App\\Controller\\CommandeController::adminIndex'], null, ['GET' => 0], null, false, false, null]],
        '/comment' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/compagnie' => [[['_route' => 'app_compagnie_index', '_controller' => 'App\\Controller\\CompagnieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/compagnie/select-or-create' => [[['_route' => 'app_compagnie_select_or_create', '_controller' => 'App\\Controller\\CompagnieController::selectOrCreate'], null, ['GET' => 0], null, false, false, null]],
        '/compagnie/new' => [[['_route' => 'app_compagnie_new', '_controller' => 'App\\Controller\\CompagnieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/donateur/dashboard/don/create' => [[['_route' => 'app_don_create', '_controller' => 'App\\Controller\\DonController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/donateur/dashboard/don' => [[['_route' => 'app_don_index', '_controller' => 'App\\Controller\\DonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/donateur/dashboard/don/new' => [[['_route' => 'app_don_new', '_controller' => 'App\\Controller\\DonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/medecin/create' => [[['_route' => 'app_create_rapport', '_controller' => 'App\\Controller\\MedecinController::createRapport'], null, null, null, false, false, null]],
        '/medecin/patients/rapports' => [[['_route' => 'app_medecin_rapports', '_controller' => 'App\\Controller\\MedecinController::showAllRapports'], null, ['GET' => 0], null, false, false, null]],
        '/admin/medicament' => [[['_route' => 'app_medicament_index', '_controller' => 'App\\Controller\\MedicamentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/medicament/new' => [[['_route' => 'app_medicament_new', '_controller' => 'App\\Controller\\MedicamentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/patient/dashboard' => [[['_route' => 'app_patient_dashboard', '_controller' => 'App\\Controller\\PatientController::dashboard'], null, null, null, false, false, null]],
        '/patient/rapports' => [[['_route' => 'app_patient_rapports', '_controller' => 'App\\Controller\\PatientController::viewRapports'], null, null, null, false, false, null]],
        '/publication' => [[['_route' => 'app_publication_index', '_controller' => 'App\\Controller\\PublicationController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/publication/new' => [[['_route' => 'app_publication_new', '_controller' => 'App\\Controller\\PublicationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/chatbot/test' => [[['_route' => 'chatbot_test', '_controller' => 'App\\Controller\\ChatbotController::test'], null, ['GET' => 0], null, false, false, null]],
        '/chatbot/message' => [[['_route' => 'chatbot_message', '_controller' => 'App\\Controller\\ChatbotController::message'], null, ['POST' => 0], null, false, false, null]],
        '/admin/pharmacie' => [[['_route' => 'admin_pharmacie_index', '_controller' => 'App\\Controller\\AdminController::pharmacie'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|publications/(?'
                        .'|approve/([^/]++)(*:314)'
                        .'|reject/([^/]++)(*:337)'
                    .')'
                    .'|commandes/(?'
                        .'|valider/([^/]++)(*:375)'
                        .'|annuler/([^/]++)(*:399)'
                    .')'
                    .'|medicament/([^/]++)(?'
                        .'|/edit(*:435)'
                        .'|(*:443)'
                    .')'
                .')'
                .'|/groups/([^/]++)(?'
                    .'|(*:472)'
                    .'|/(?'
                        .'|edit(*:488)'
                        .'|join(*:500)'
                        .'|members/(?'
                            .'|add(*:522)'
                            .'|remove/([^/]++)(*:545)'
                        .')'
                    .')'
                .')'
                .'|/com(?'
                    .'|m(?'
                        .'|ande/(?'
                            .'|([^/]++)(?'
                                .'|(*:586)'
                                .'|/edit(*:599)'
                                .'|(*:607)'
                            .')'
                            .'|admin/commande/([^/]++)/confirm(*:647)'
                        .')'
                        .'|ent/([^/]++)(?'
                            .'|(*:671)'
                            .'|/edit(*:684)'
                            .'|(*:692)'
                        .')'
                    .')'
                    .'|pagnie/([^/]++)(?'
                        .'|(*:720)'
                        .'|/edit(*:733)'
                        .'|(*:741)'
                    .')'
                .')'
                .'|/donateur/dashboard/don/([^/]++)(?'
                    .'|(*:786)'
                    .'|/edit(*:799)'
                    .'|(*:807)'
                .')'
                .'|/medecin/(?'
                    .'|patient/([^/]++)/rapports(*:853)'
                    .'|rapport/(?'
                        .'|edit/([^/]++)(*:885)'
                        .'|delete/([^/]++)(*:908)'
                    .')'
                .')'
                .'|/publication/(?'
                    .'|([^/]++)(?'
                        .'|(*:945)'
                        .'|/(?'
                            .'|edit(*:961)'
                            .'|like(*:973)'
                            .'|delete(*:987)'
                        .')'
                    .')'
                    .'|approve/([^/]++)(*:1013)'
                    .'|reject/([^/]++)(*:1037)'
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
        314 => [[['_route' => 'admin_publication_approve', '_controller' => 'App\\Controller\\AdminController::approvePublication'], ['id'], ['POST' => 0], null, false, true, null]],
        337 => [[['_route' => 'admin_publication_reject', '_controller' => 'App\\Controller\\AdminController::rejectPublication'], ['id'], ['POST' => 0], null, false, true, null]],
        375 => [[['_route' => 'admin_commande_valider', '_controller' => 'App\\Controller\\AdminController::validerCommande'], ['id'], ['POST' => 0], null, false, true, null]],
        399 => [[['_route' => 'admin_commande_annuler', '_controller' => 'App\\Controller\\AdminController::annulerCommande'], ['id'], ['POST' => 0], null, false, true, null]],
        435 => [[['_route' => 'app_medicament_edit', '_controller' => 'App\\Controller\\MedicamentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        443 => [[['_route' => 'app_medicament_delete', '_controller' => 'App\\Controller\\MedicamentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        472 => [[['_route' => 'app_chat_group_show', '_controller' => 'App\\Controller\\ChatGroupController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        488 => [[['_route' => 'app_chat_group_edit', '_controller' => 'App\\Controller\\ChatGroupController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        500 => [[['_route' => 'app_chat_group_join', '_controller' => 'App\\Controller\\ChatGroupController::join'], ['id'], ['POST' => 0], null, false, false, null]],
        522 => [[['_route' => 'app_chat_group_add_member', '_controller' => 'App\\Controller\\ChatGroupController::addMember'], ['id'], ['POST' => 0], null, false, false, null]],
        545 => [[['_route' => 'app_chat_group_remove_member', '_controller' => 'App\\Controller\\ChatGroupController::removeMember'], ['id', 'userId'], ['POST' => 0], null, false, true, null]],
        586 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        599 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        607 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        647 => [[['_route' => 'app_admin_commande_confirm', '_controller' => 'App\\Controller\\CommandeController::confirm'], ['id'], ['POST' => 0], null, false, false, null]],
        671 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        684 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        692 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        720 => [[['_route' => 'app_compagnie_show', '_controller' => 'App\\Controller\\CompagnieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        733 => [[['_route' => 'app_compagnie_edit', '_controller' => 'App\\Controller\\CompagnieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        741 => [[['_route' => 'app_compagnie_delete', '_controller' => 'App\\Controller\\CompagnieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        786 => [[['_route' => 'app_don_show', '_controller' => 'App\\Controller\\DonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        799 => [[['_route' => 'app_don_edit', '_controller' => 'App\\Controller\\DonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        807 => [[['_route' => 'app_don_delete', '_controller' => 'App\\Controller\\DonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        853 => [[['_route' => 'app_medecin_patient_rapports', '_controller' => 'App\\Controller\\MedecinController::showPatientRapports'], ['id'], ['GET' => 0], null, false, false, null]],
        885 => [[['_route' => 'app_medecin_edit_rapport', '_controller' => 'App\\Controller\\MedecinController::editRapport'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        908 => [[['_route' => 'app_medecin_delete_rapport', '_controller' => 'App\\Controller\\MedecinController::deleteRapport'], ['id'], ['DELETE' => 0], null, false, true, null]],
        945 => [[['_route' => 'app_publication_show', '_controller' => 'App\\Controller\\PublicationController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        961 => [[['_route' => 'app_publication_edit', '_controller' => 'App\\Controller\\PublicationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        973 => [[['_route' => 'app_publication_like', '_controller' => 'App\\Controller\\PublicationController::like'], ['id'], ['GET' => 0], null, false, false, null]],
        987 => [[['_route' => 'app_publication_delete', '_controller' => 'App\\Controller\\PublicationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1013 => [[['_route' => 'publication_approve', '_controller' => 'App\\Controller\\PublicationController::approve'], ['id'], ['POST' => 0], null, false, true, null]],
        1037 => [
            [['_route' => 'publication_reject', '_controller' => 'App\\Controller\\PublicationController::reject'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
