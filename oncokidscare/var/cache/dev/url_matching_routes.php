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
        '/admin/compagnie' => [[['_route' => 'admin_compagnie_index', '_controller' => 'App\\Controller\\AdminController::compagnieIndex'], null, ['GET' => 0], null, false, false, null]],
        '/admin/compagnie/en-attente' => [[['_route' => 'admin_compagnie_pending', '_controller' => 'App\\Controller\\AdminController::compagniePending'], null, ['GET' => 0], null, false, false, null]],
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
        '/medecin2/availability' => [[['_route' => 'app_doctor_availability', '_controller' => 'App\\Controller\\DoctorAvailabilityController::index'], null, ['GET' => 0], null, false, false, null]],
        '/medecin2/availability/update' => [[['_route' => 'app_doctor_availability_update', '_controller' => 'App\\Controller\\DoctorAvailabilityController::update'], null, ['POST' => 0], null, false, false, null]],
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
        '/rapports' => [[['_route' => 'app_rapports', '_controller' => 'App\\Controller\\HomeController::index_rapports'], null, null, null, false, false, null]],
        '/testimonial' => [[['_route' => 'app_testimonial', '_controller' => 'App\\Controller\\HomeController::index_testimonial'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::index_contact'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'app_404', '_controller' => 'App\\Controller\\HomeController::index_404'], null, null, null, false, false, null]],
        '/rendez-vous' => [[['_route' => 'app_rendezvous', '_controller' => 'App\\Controller\\HomeController::index_rendezvous'], null, null, null, false, false, null]],
        '/medecin/dashboardd' => [[['_route' => 'app_medecin_dashboard', '_controller' => 'App\\Controller\\MedecinController::dashboard'], null, null, null, false, false, null]],
        '/medecin/create' => [[['_route' => 'app_create_rapport', '_controller' => 'App\\Controller\\MedecinController::createRapport'], null, null, null, false, false, null]],
        '/medecin/patients/rapports' => [[['_route' => 'app_medecin_rapports', '_controller' => 'App\\Controller\\MedecinController::showAllRapports'], null, ['GET' => 0], null, false, false, null]],
        '/medecin/DoctorAvailability' => [[['_route' => 'app_doctor_availability_legacy', '_controller' => 'App\\Controller\\MedecinController::doctorAvailabilityLegacy'], null, null, null, false, false, null]],
        '/admin/medicament' => [[['_route' => 'app_medicament_index', '_controller' => 'App\\Controller\\MedicamentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/medicament/new' => [[['_route' => 'app_medicament_new', '_controller' => 'App\\Controller\\MedicamentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/patient/dashboard' => [[['_route' => 'app_patient_dashboard', '_controller' => 'App\\Controller\\PatientController::dashboard'], null, null, null, false, false, null]],
        '/patient/rapports' => [[['_route' => 'app_patient_rapports', '_controller' => 'App\\Controller\\PatientController::viewRapports'], null, null, null, false, false, null]],
        '/publication' => [[['_route' => 'app_publication_index', '_controller' => 'App\\Controller\\PublicationController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/publication/new' => [[['_route' => 'app_publication_new', '_controller' => 'App\\Controller\\PublicationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/patient2/rendezvous' => [[['_route' => 'app_patient_rendezvous', '_controller' => 'App\\Controller\\RendezvousController::index'], null, ['GET' => 0], null, false, false, null]],
        '/patient2/rendezvous/book' => [[['_route' => 'app_patient_rendezvous_book', '_controller' => 'App\\Controller\\RendezvousController::bookAppointment'], null, ['POST' => 0], null, false, false, null]],
        '/medecin2/reports' => [[['_route' => 'app_doctor_reports', '_controller' => 'App\\Controller\\ReportController::index'], null, null, null, false, false, null]],
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
                    .'|com(?'
                        .'|mandes/(?'
                            .'|valider/([^/]++)(*:378)'
                            .'|annuler/([^/]++)(*:402)'
                        .')'
                        .'|pagnie/([^/]++)/(?'
                            .'|modifier(*:438)'
                            .'|valider(*:453)'
                            .'|rejeter(*:468)'
                            .'|supprimer(*:485)'
                        .')'
                    .')'
                    .'|medicament/([^/]++)(?'
                        .'|/edit(*:522)'
                        .'|(*:530)'
                    .')'
                .')'
                .'|/groups/([^/]++)(?'
                    .'|(*:559)'
                    .'|/(?'
                        .'|edit(*:575)'
                        .'|join(*:587)'
                        .'|members/(?'
                            .'|add(*:609)'
                            .'|remove/([^/]++)(*:632)'
                        .')'
                    .')'
                .')'
                .'|/com(?'
                    .'|m(?'
                        .'|ande/(?'
                            .'|([^/]++)(?'
                                .'|(*:673)'
                                .'|/edit(*:686)'
                                .'|(*:694)'
                            .')'
                            .'|admin/commande/([^/]++)/confirm(*:734)'
                        .')'
                        .'|ent/([^/]++)(?'
                            .'|(*:758)'
                            .'|/edit(*:771)'
                            .'|(*:779)'
                        .')'
                    .')'
                    .'|pagnie/(?'
                        .'|([^/]++)(?'
                            .'|(*:810)'
                            .'|/edit(*:823)'
                            .'|(*:831)'
                        .')'
                        .'|validate/([^/]++)/([^/]++)(*:866)'
                        .'|pending(*:881)'
                    .')'
                .')'
                .'|/medecin(?'
                    .'|2/(?'
                        .'|availability/([^/]++)(*:928)'
                        .'|report/(?'
                            .'|new/([^/]++)(*:958)'
                            .'|edit/([^/]++)(*:979)'
                        .')'
                    .')'
                    .'|/rapport/(?'
                        .'|edit/([^/]++)(*:1014)'
                        .'|delete/([^/]++)(*:1038)'
                    .')'
                .')'
                .'|/don/([^/]++)(?'
                    .'|(*:1065)'
                    .'|/edit(*:1079)'
                    .'|(*:1088)'
                .')'
                .'|/p(?'
                    .'|ublication/(?'
                        .'|([^/]++)(?'
                            .'|(*:1128)'
                            .'|/(?'
                                .'|edit(*:1145)'
                                .'|like(*:1158)'
                                .'|delete(*:1173)'
                            .')'
                        .')'
                        .'|approve/([^/]++)(*:1200)'
                        .'|reject/([^/]++)(*:1224)'
                    .')'
                    .'|atient2/rendezvous/doctor/([^/]++)(*:1268)'
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
        378 => [[['_route' => 'admin_commande_valider', '_controller' => 'App\\Controller\\AdminController::validerCommande'], ['id'], ['POST' => 0], null, false, true, null]],
        402 => [[['_route' => 'admin_commande_annuler', '_controller' => 'App\\Controller\\AdminController::annulerCommande'], ['id'], ['POST' => 0], null, false, true, null]],
        438 => [[['_route' => 'admin_compagnie_edit', '_controller' => 'App\\Controller\\AdminController::compagnieEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        453 => [[['_route' => 'admin_compagnie_validate', '_controller' => 'App\\Controller\\AdminController::compagnieValidate'], ['id'], ['POST' => 0], null, false, false, null]],
        468 => [[['_route' => 'admin_compagnie_reject', '_controller' => 'App\\Controller\\AdminController::compagnieReject'], ['id'], ['POST' => 0], null, false, false, null]],
        485 => [[['_route' => 'admin_compagnie_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        522 => [[['_route' => 'app_medicament_edit', '_controller' => 'App\\Controller\\MedicamentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        530 => [[['_route' => 'app_medicament_delete', '_controller' => 'App\\Controller\\MedicamentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        559 => [[['_route' => 'app_chat_group_show', '_controller' => 'App\\Controller\\ChatGroupController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        575 => [[['_route' => 'app_chat_group_edit', '_controller' => 'App\\Controller\\ChatGroupController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        587 => [[['_route' => 'app_chat_group_join', '_controller' => 'App\\Controller\\ChatGroupController::join'], ['id'], ['POST' => 0], null, false, false, null]],
        609 => [[['_route' => 'app_chat_group_add_member', '_controller' => 'App\\Controller\\ChatGroupController::addMember'], ['id'], ['POST' => 0], null, false, false, null]],
        632 => [[['_route' => 'app_chat_group_remove_member', '_controller' => 'App\\Controller\\ChatGroupController::removeMember'], ['id', 'userId'], ['POST' => 0], null, false, true, null]],
        673 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        686 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        694 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        734 => [[['_route' => 'app_admin_commande_confirm', '_controller' => 'App\\Controller\\CommandeController::confirm'], ['id'], ['POST' => 0], null, false, false, null]],
        758 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        771 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        779 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        810 => [[['_route' => 'app_compagnie_show', '_controller' => 'App\\Controller\\CompagnieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        823 => [[['_route' => 'app_compagnie_edit', '_controller' => 'App\\Controller\\CompagnieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        831 => [[['_route' => 'app_compagnie_delete', '_controller' => 'App\\Controller\\CompagnieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        866 => [[['_route' => 'app_compagnie_validate', '_controller' => 'App\\Controller\\CompagnieController::validateCompagnie'], ['id', 'action'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        881 => [[['_route' => 'app_compagnie_pending', '_controller' => 'App\\Controller\\CompagnieController::pendingCompagnies'], [], ['GET' => 0], null, false, false, null]],
        928 => [[['_route' => 'app_patient_doctor_availability', '_controller' => 'App\\Controller\\DoctorAvailabilityController::doctorAvailability'], ['doctorId'], ['GET' => 0], null, false, true, null]],
        958 => [[['_route' => 'app_doctor_report_new', '_controller' => 'App\\Controller\\ReportController::new'], ['id'], null, null, false, true, null]],
        979 => [[['_route' => 'app_doctor_report_edit', '_controller' => 'App\\Controller\\ReportController::edit'], ['id'], null, null, false, true, null]],
        1014 => [[['_route' => 'app_medecin_edit_rapport', '_controller' => 'App\\Controller\\MedecinController::editRapport'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1038 => [[['_route' => 'app_medecin_delete_rapport', '_controller' => 'App\\Controller\\MedecinController::deleteRapport'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1065 => [[['_route' => 'app_don_show', '_controller' => 'App\\Controller\\DonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1079 => [[['_route' => 'app_don_edit', '_controller' => 'App\\Controller\\DonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1088 => [[['_route' => 'app_don_delete', '_controller' => 'App\\Controller\\DonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1128 => [[['_route' => 'app_publication_show', '_controller' => 'App\\Controller\\PublicationController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1145 => [[['_route' => 'app_publication_edit', '_controller' => 'App\\Controller\\PublicationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1158 => [[['_route' => 'app_publication_like', '_controller' => 'App\\Controller\\PublicationController::like'], ['id'], ['GET' => 0], null, false, false, null]],
        1173 => [[['_route' => 'app_publication_delete', '_controller' => 'App\\Controller\\PublicationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1200 => [[['_route' => 'publication_approve', '_controller' => 'App\\Controller\\PublicationController::approve'], ['id'], ['POST' => 0], null, false, true, null]],
        1224 => [[['_route' => 'publication_reject', '_controller' => 'App\\Controller\\PublicationController::reject'], ['id'], ['POST' => 0], null, false, true, null]],
        1268 => [
            [['_route' => 'app_patient_rendezvous_doctor', '_controller' => 'App\\Controller\\RendezvousController::doctorAvailability'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
