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
        '/admin/admin_dashboard' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_admin_users', '_controller' => 'App\\Controller\\AdminController::indexx'], null, null, null, false, false, null]],
        '/admin/profile' => [[['_route' => 'app_admin_profile', '_controller' => 'App\\Controller\\AdminController::myprofile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/publications' => [[['_route' => 'admin_publications', '_controller' => 'App\\Controller\\AdminController::managePublications'], null, null, null, false, false, null]],
        '/admin/commandes' => [[['_route' => 'admin_commandes', '_controller' => 'App\\Controller\\AdminController::manageCommandes'], null, null, null, false, false, null]],
        '/admin/compagnie' => [[['_route' => 'admin_compagnie_index', '_controller' => 'App\\Controller\\AdminController::compagnieIndex'], null, ['GET' => 0], null, false, false, null]],
        '/admin/compagnie/en-attente' => [[['_route' => 'admin_compagnie_pending', '_controller' => 'App\\Controller\\AdminController::compagniePending'], null, ['GET' => 0], null, false, false, null]],
        '/admin/espace-com' => [[['_route' => 'admin_espace_com', '_controller' => 'App\\Controller\\AdminController::espaceCom'], null, null, null, false, false, null]],
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
        '/admin/users/search' => [[['_route' => 'user_search', '_controller' => 'App\\Controller\\ManageUsersController::search'], null, ['GET' => 0], null, false, false, null]],
        '/medecin/dashboardd' => [[['_route' => 'app_medecin_dashboard', '_controller' => 'App\\Controller\\MedecinController::dashboard'], null, null, null, false, false, null]],
        '/medecin/profile' => [[['_route' => 'app_medecin_profile', '_controller' => 'App\\Controller\\MedecinController::profile'], null, null, null, false, false, null]],
        '/medecin/create' => [[['_route' => 'app_create_rapport', '_controller' => 'App\\Controller\\MedecinController::createRapport'], null, null, null, false, false, null]],
        '/medecin/patients/rapports' => [[['_route' => 'app_medecin_rapports', '_controller' => 'App\\Controller\\MedecinController::showAllRapports'], null, ['GET' => 0], null, false, false, null]],
        '/medecin/DoctorAvailability' => [[['_route' => 'app_doctor_availability_legacy', '_controller' => 'App\\Controller\\MedecinController::doctorAvailabilityLegacy'], null, null, null, false, false, null]],
        '/admin/medicament' => [[['_route' => 'app_medicament_index', '_controller' => 'App\\Controller\\MedicamentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/medicament/new' => [[['_route' => 'app_medicament_new', '_controller' => 'App\\Controller\\MedicamentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/patient/dashboard' => [[['_route' => 'app_patient_dashboard', '_controller' => 'App\\Controller\\PatientController::dashboard'], null, null, null, false, false, null]],
        '/patient/rapports' => [[['_route' => 'app_patient_rapports', '_controller' => 'App\\Controller\\PatientController::viewRapports'], null, null, null, false, false, null]],
        '/patient/profile' => [[['_route' => 'app_patient_profile', '_controller' => 'App\\Controller\\ProfileController::patientProfile'], null, null, null, false, false, null]],
        '/donateur/profile' => [[['_route' => 'app_donateur_profile', '_controller' => 'App\\Controller\\ProfileController::donateurProfile'], null, null, null, false, false, null]],
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
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:73)'
                    .'|wdt/([^/]++)(*:92)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:133)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:170)'
                                .'|router(*:184)'
                                .'|exception(?'
                                    .'|(*:204)'
                                    .'|\\.css(*:217)'
                                .')'
                            .')'
                            .'|(*:227)'
                        .')'
                    .')'
                .')'
                .'|/like/(?'
                    .'|publication/([^/]++)(?'
                        .'|(*:270)'
                    .')'
                    .'|comment/([^/]++)(?'
                        .'|(*:298)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|publications/(?'
                        .'|approve/([^/]++)(*:350)'
                        .'|reject/([^/]++)(*:373)'
                    .')'
                    .'|com(?'
                        .'|mandes/(?'
                            .'|valider/([^/]++)(*:414)'
                            .'|annuler/([^/]++)(*:438)'
                        .')'
                        .'|pagnie/([^/]++)/(?'
                            .'|modifier(*:474)'
                            .'|valider(*:489)'
                            .'|rejeter(*:504)'
                            .'|supprimer(*:521)'
                        .')'
                    .')'
                    .'|users/(?'
                        .'|edit/([^/]++)(*:553)'
                        .'|delete/([^/]++)(*:576)'
                    .')'
                    .'|medicament/([^/]++)(?'
                        .'|/edit(*:612)'
                        .'|(*:620)'
                    .')'
                .')'
                .'|/groups/(?'
                    .'|([^/]++)(?'
                        .'|(*:652)'
                        .'|/(?'
                            .'|edit(*:668)'
                            .'|join(*:680)'
                            .'|members/(?'
                                .'|add(*:702)'
                                .'|remove/([^/]++)(*:725)'
                            .')'
                            .'|voice\\-message(*:748)'
                        .')'
                    .')'
                    .'|message/([^/]++)/(?'
                        .'|delete(*:784)'
                        .'|edit(*:796)'
                    .')'
                .')'
                .'|/com(?'
                    .'|m(?'
                        .'|ande/(?'
                            .'|([^/]++)(?'
                                .'|(*:836)'
                                .'|/edit(*:849)'
                                .'|(*:857)'
                            .')'
                            .'|admin/commande/([^/]++)/confirm(*:897)'
                        .')'
                        .'|ent/([^/]++)(?'
                            .'|(*:921)'
                            .'|/(?'
                                .'|edit(*:937)'
                                .'|voice\\-comment(*:959)'
                            .')'
                            .'|(*:968)'
                        .')'
                    .')'
                    .'|pagnie/(?'
                        .'|([^/]++)(?'
                            .'|(*:999)'
                            .'|/edit(*:1012)'
                            .'|(*:1021)'
                        .')'
                        .'|validate/([^/]++)/([^/]++)(*:1057)'
                        .'|pending(*:1073)'
                    .')'
                .')'
                .'|/medecin(?'
                    .'|2/(?'
                        .'|availability/([^/]++)(*:1121)'
                        .'|report/(?'
                            .'|new/([^/]++)(*:1152)'
                            .'|edit/([^/]++)(*:1174)'
                        .')'
                    .')'
                    .'|/rapport/(?'
                        .'|edit/([^/]++)(*:1210)'
                        .'|delete/([^/]++)(*:1234)'
                    .')'
                .')'
                .'|/don/([^/]++)(?'
                    .'|(*:1261)'
                    .'|/edit(*:1275)'
                    .'|(*:1284)'
                .')'
                .'|/p(?'
                    .'|ublication/(?'
                        .'|([^/]++)(?'
                            .'|(*:1324)'
                            .'|/(?'
                                .'|edit(*:1341)'
                                .'|delete(?'
                                    .'|\\-image(*:1366)'
                                    .'|(*:1375)'
                                .')'
                                .'|like(*:1389)'
                            .')'
                        .')'
                        .'|approve/([^/]++)(*:1416)'
                        .'|reject/([^/]++)(*:1440)'
                    .')'
                    .'|atient2/rendezvous/doctor/([^/]++)(*:1484)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        73 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        92 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        133 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        170 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        204 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        217 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        227 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        270 => [
            [['_route' => 'like_publication', '_controller' => 'App\\Controller\\LikeController::likePublication'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_like_publication', '_controller' => 'App\\Controller\\LikeController::likePublication'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        298 => [
            [['_route' => 'like_comment', '_controller' => 'App\\Controller\\LikeController::likeComment'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_like_comment', '_controller' => 'App\\Controller\\LikeController::likeComment'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        350 => [[['_route' => 'admin_publication_approve', '_controller' => 'App\\Controller\\AdminController::approvePublication'], ['id'], ['POST' => 0], null, false, true, null]],
        373 => [[['_route' => 'admin_publication_reject', '_controller' => 'App\\Controller\\AdminController::rejectPublication'], ['id'], ['POST' => 0], null, false, true, null]],
        414 => [[['_route' => 'admin_commande_valider', '_controller' => 'App\\Controller\\AdminController::validerCommande'], ['id'], ['POST' => 0], null, false, true, null]],
        438 => [[['_route' => 'admin_commande_annuler', '_controller' => 'App\\Controller\\AdminController::annulerCommande'], ['id'], ['POST' => 0], null, false, true, null]],
        474 => [[['_route' => 'admin_compagnie_edit', '_controller' => 'App\\Controller\\AdminController::compagnieEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        489 => [[['_route' => 'admin_compagnie_validate', '_controller' => 'App\\Controller\\AdminController::compagnieValidate'], ['id'], ['POST' => 0], null, false, false, null]],
        504 => [[['_route' => 'admin_compagnie_reject', '_controller' => 'App\\Controller\\AdminController::compagnieReject'], ['id'], ['POST' => 0], null, false, false, null]],
        521 => [[['_route' => 'admin_compagnie_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        553 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\ManageUsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        576 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\ManageUsersController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        612 => [[['_route' => 'app_medicament_edit', '_controller' => 'App\\Controller\\MedicamentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        620 => [[['_route' => 'app_medicament_delete', '_controller' => 'App\\Controller\\MedicamentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        652 => [[['_route' => 'app_chat_group_show', '_controller' => 'App\\Controller\\ChatGroupController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        668 => [[['_route' => 'app_chat_group_edit', '_controller' => 'App\\Controller\\ChatGroupController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        680 => [[['_route' => 'app_chat_group_join', '_controller' => 'App\\Controller\\ChatGroupController::join'], ['id'], ['POST' => 0], null, false, false, null]],
        702 => [[['_route' => 'app_chat_group_add_member', '_controller' => 'App\\Controller\\ChatGroupController::addMember'], ['id'], ['POST' => 0], null, false, false, null]],
        725 => [[['_route' => 'app_chat_group_remove_member', '_controller' => 'App\\Controller\\ChatGroupController::removeMember'], ['id', 'userId'], ['POST' => 0], null, false, true, null]],
        748 => [[['_route' => 'app_chat_group_voice_message', '_controller' => 'App\\Controller\\ChatGroupController::uploadVoiceMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        784 => [[['_route' => 'app_chat_message_delete', '_controller' => 'App\\Controller\\ChatGroupController::deleteMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        796 => [[['_route' => 'app_chat_message_edit', '_controller' => 'App\\Controller\\ChatGroupController::editMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        836 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        849 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        857 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        897 => [[['_route' => 'app_admin_commande_confirm', '_controller' => 'App\\Controller\\CommandeController::confirm'], ['id'], ['POST' => 0], null, false, false, null]],
        921 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        937 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        959 => [[['_route' => 'app_comment_voice', '_controller' => 'App\\Controller\\CommentController::uploadVoiceComment'], ['id'], ['POST' => 0], null, false, false, null]],
        968 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        999 => [[['_route' => 'app_compagnie_show', '_controller' => 'App\\Controller\\CompagnieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1012 => [[['_route' => 'app_compagnie_edit', '_controller' => 'App\\Controller\\CompagnieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1021 => [[['_route' => 'app_compagnie_delete', '_controller' => 'App\\Controller\\CompagnieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1057 => [[['_route' => 'app_compagnie_validate', '_controller' => 'App\\Controller\\CompagnieController::validateCompagnie'], ['id', 'action'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1073 => [[['_route' => 'app_compagnie_pending', '_controller' => 'App\\Controller\\CompagnieController::pendingCompagnies'], [], ['GET' => 0], null, false, false, null]],
        1121 => [[['_route' => 'app_patient_doctor_availability', '_controller' => 'App\\Controller\\DoctorAvailabilityController::doctorAvailability'], ['doctorId'], ['GET' => 0], null, false, true, null]],
        1152 => [[['_route' => 'app_doctor_report_new', '_controller' => 'App\\Controller\\ReportController::new'], ['id'], null, null, false, true, null]],
        1174 => [[['_route' => 'app_doctor_report_edit', '_controller' => 'App\\Controller\\ReportController::edit'], ['id'], null, null, false, true, null]],
        1210 => [[['_route' => 'app_medecin_edit_rapport', '_controller' => 'App\\Controller\\MedecinController::editRapport'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1234 => [[['_route' => 'app_medecin_delete_rapport', '_controller' => 'App\\Controller\\MedecinController::deleteRapport'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1261 => [[['_route' => 'app_don_show', '_controller' => 'App\\Controller\\DonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1275 => [[['_route' => 'app_don_edit', '_controller' => 'App\\Controller\\DonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1284 => [[['_route' => 'app_don_delete', '_controller' => 'App\\Controller\\DonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1324 => [[['_route' => 'app_publication_show', '_controller' => 'App\\Controller\\PublicationController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1341 => [[['_route' => 'app_publication_edit', '_controller' => 'App\\Controller\\PublicationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1366 => [[['_route' => 'app_publication_delete_image', '_controller' => 'App\\Controller\\PublicationController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1375 => [[['_route' => 'app_publication_delete', '_controller' => 'App\\Controller\\PublicationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1389 => [[['_route' => 'app_publication_like', '_controller' => 'App\\Controller\\PublicationController::like'], ['id'], ['GET' => 0], null, false, false, null]],
        1416 => [[['_route' => 'publication_approve', '_controller' => 'App\\Controller\\PublicationController::approve'], ['id'], ['POST' => 0], null, false, true, null]],
        1440 => [[['_route' => 'publication_reject', '_controller' => 'App\\Controller\\PublicationController::reject'], ['id'], ['POST' => 0], null, false, true, null]],
        1484 => [
            [['_route' => 'app_patient_rendezvous_doctor', '_controller' => 'App\\Controller\\RendezvousController::doctorAvailability'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
