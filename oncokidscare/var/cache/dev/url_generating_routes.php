<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'like_publication' => [['id'], ['_controller' => 'App\\Controller\\LikeController::likePublication'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/like/publication']], [], [], []],
    'like_comment' => [['id'], ['_controller' => 'App\\Controller\\LikeController::likeComment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/like/comment']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'admin_compagnie_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CompagnieController::index'], [], [['text', '/admin/compagnie/']], [], [], []],
    'admin_compagnie_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CompagnieController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/compagnie']], [], [], []],
    'admin_compagnie_validate' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CompagnieController::validate'], [], [['text', '/valider'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/compagnie']], [], [], []],
    'admin_compagnie_reject' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CompagnieController::reject'], [], [['text', '/rejeter'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/compagnie']], [], [], []],
    'admin_compagnie_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CompagnieController::delete'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/compagnie']], [], [], []],
    'app_admin_index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], [], []],
    'app_comment_index' => [[], ['_controller' => 'App\\Controller\\CommentController::index'], [], [['text', '/comment/']], [], [], []],
    'app_comment_new' => [[], ['_controller' => 'App\\Controller\\CommentController::new'], [], [['text', '/comment/new']], [], [], []],
    'app_comment_show' => [['id'], ['_controller' => 'App\\Controller\\CommentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], [], []],
    'app_comment_edit' => [['id'], ['_controller' => 'App\\Controller\\CommentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], [], []],
    'app_comment_delete' => [['id'], ['_controller' => 'App\\Controller\\CommentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], [], []],
    'app_compagnie_index' => [[], ['_controller' => 'App\\Controller\\CompagnieController::index'], [], [['text', '/compagnie/']], [], [], []],
    'app_compagnie_select_or_create' => [[], ['_controller' => 'App\\Controller\\CompagnieController::selectOrCreate'], [], [['text', '/compagnie/select-or-create']], [], [], []],
    'app_compagnie_new' => [[], ['_controller' => 'App\\Controller\\CompagnieController::new'], [], [['text', '/compagnie/new']], [], [], []],
    'app_compagnie_show' => [['id'], ['_controller' => 'App\\Controller\\CompagnieController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compagnie']], [], [], []],
    'app_compagnie_edit' => [['id'], ['_controller' => 'App\\Controller\\CompagnieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/compagnie']], [], [], []],
    'app_compagnie_delete' => [['id'], ['_controller' => 'App\\Controller\\CompagnieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compagnie']], [], [], []],
    'app_don_create' => [[], ['_controller' => 'App\\Controller\\DonController::create'], [], [['text', '/don/create']], [], [], []],
    'app_don_index' => [[], ['_controller' => 'App\\Controller\\DonController::index'], [], [['text', '/don/']], [], [], []],
    'app_don_new' => [[], ['_controller' => 'App\\Controller\\DonController::new'], [], [['text', '/don/new']], [], [], []],
    'app_don_show' => [['id'], ['_controller' => 'App\\Controller\\DonController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/don']], [], [], []],
    'app_don_edit' => [['id'], ['_controller' => 'App\\Controller\\DonController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/don']], [], [], []],
    'app_don_delete' => [['id'], ['_controller' => 'App\\Controller\\DonController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/don']], [], [], []],
    'app_donateur_dashboard' => [[], ['_controller' => 'App\\Controller\\DonateurDashboardController::index'], [], [['text', '/donateur/dashboard/']], [], [], []],
    'app_faire_don' => [[], ['_controller' => 'App\\Controller\\DonationController::faireDon'], [], [['text', '/faire-don']], [], [], []],
    'app_historique_don' => [[], ['_controller' => 'App\\Controller\\DonationController::historiqueDon'], [], [['text', '/historique-don']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_feature' => [[], ['_controller' => 'App\\Controller\\HomeController::index_feature'], [], [['text', '/feature']], [], [], []],
    'app_team' => [[], ['_controller' => 'App\\Controller\\HomeController::index_team'], [], [['text', '/team']], [], [], []],
    'app_about' => [[], ['_controller' => 'App\\Controller\\HomeController::index_about'], [], [['text', '/about']], [], [], []],
    'app_service' => [[], ['_controller' => 'App\\Controller\\HomeController::index_service'], [], [['text', '/service']], [], [], []],
    'app_appointment' => [[], ['_controller' => 'App\\Controller\\HomeController::index_appointment'], [], [['text', '/appointment']], [], [], []],
    'app_testimonial' => [[], ['_controller' => 'App\\Controller\\HomeController::index_testimonial'], [], [['text', '/testimonial']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\HomeController::index_contact'], [], [['text', '/contact']], [], [], []],
    'app_404' => [[], ['_controller' => 'App\\Controller\\HomeController::index_404'], [], [['text', '/404']], [], [], []],
    'app_like_publication' => [['id'], ['_controller' => 'App\\Controller\\LikeController::likePublication'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/like/publication']], [], [], []],
    'app_like_comment' => [['id'], ['_controller' => 'App\\Controller\\LikeController::likeComment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/like/comment']], [], [], []],
    'app_medecin_dashboard' => [[], ['_controller' => 'App\\Controller\\MedecinController::dashboard'], [], [['text', '/medecin/dashboard']], [], [], []],
    'app_patient_dashboard' => [[], ['_controller' => 'App\\Controller\\PatientController::dashboard'], [], [['text', '/patient/dashboard']], [], [], []],
    'app_publication_index' => [[], ['_controller' => 'App\\Controller\\PublicationController::index'], [], [['text', '/publication/']], [], [], []],
    'app_publication_new' => [[], ['_controller' => 'App\\Controller\\PublicationController::new'], [], [['text', '/publication/new']], [], [], []],
    'app_publication_show' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/publication']], [], [], []],
    'app_publication_edit' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/publication']], [], [], []],
    'app_publication_delete' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/publication']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/register']], [], [], []],
    'chatbot_test' => [[], ['_controller' => 'App\\Controller\\ChatbotController::test'], [], [['text', '/chatbot/test']], [], [], []],
    'chatbot_message' => [[], ['_controller' => 'App\\Controller\\ChatbotController::message'], [], [['text', '/chatbot/message']], [], [], []],
    'App\Controller\Admin\CompagnieController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\CompagnieController::index'], [], [['text', '/admin/compagnie/']], [], [], []],
    'App\Controller\Admin\CompagnieController::edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CompagnieController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/compagnie']], [], [], []],
    'App\Controller\Admin\CompagnieController::validate' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CompagnieController::validate'], [], [['text', '/valider'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/compagnie']], [], [], []],
    'App\Controller\Admin\CompagnieController::reject' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CompagnieController::reject'], [], [['text', '/rejeter'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/compagnie']], [], [], []],
    'App\Controller\Admin\CompagnieController::delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CompagnieController::delete'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/compagnie']], [], [], []],
    'App\Controller\AdminController::index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], [], []],
    'App\Controller\ChatbotController::test' => [[], ['_controller' => 'App\\Controller\\ChatbotController::test'], [], [['text', '/chatbot/test']], [], [], []],
    'App\Controller\ChatbotController::message' => [[], ['_controller' => 'App\\Controller\\ChatbotController::message'], [], [['text', '/chatbot/message']], [], [], []],
    'App\Controller\CommentController::index' => [[], ['_controller' => 'App\\Controller\\CommentController::index'], [], [['text', '/comment/']], [], [], []],
    'App\Controller\CommentController::new' => [[], ['_controller' => 'App\\Controller\\CommentController::new'], [], [['text', '/comment/new']], [], [], []],
    'App\Controller\CommentController::show' => [['id'], ['_controller' => 'App\\Controller\\CommentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], [], []],
    'App\Controller\CommentController::edit' => [['id'], ['_controller' => 'App\\Controller\\CommentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], [], []],
    'App\Controller\CommentController::delete' => [['id'], ['_controller' => 'App\\Controller\\CommentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], [], []],
    'App\Controller\CompagnieController::index' => [[], ['_controller' => 'App\\Controller\\CompagnieController::index'], [], [['text', '/compagnie/']], [], [], []],
    'App\Controller\CompagnieController::selectOrCreate' => [[], ['_controller' => 'App\\Controller\\CompagnieController::selectOrCreate'], [], [['text', '/compagnie/select-or-create']], [], [], []],
    'App\Controller\CompagnieController::new' => [[], ['_controller' => 'App\\Controller\\CompagnieController::new'], [], [['text', '/compagnie/new']], [], [], []],
    'App\Controller\CompagnieController::show' => [['id'], ['_controller' => 'App\\Controller\\CompagnieController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compagnie']], [], [], []],
    'App\Controller\CompagnieController::edit' => [['id'], ['_controller' => 'App\\Controller\\CompagnieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/compagnie']], [], [], []],
    'App\Controller\CompagnieController::delete' => [['id'], ['_controller' => 'App\\Controller\\CompagnieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compagnie']], [], [], []],
    'App\Controller\DonController::create' => [[], ['_controller' => 'App\\Controller\\DonController::create'], [], [['text', '/don/create']], [], [], []],
    'App\Controller\DonController::index' => [[], ['_controller' => 'App\\Controller\\DonController::index'], [], [['text', '/don/']], [], [], []],
    'App\Controller\DonController::new' => [[], ['_controller' => 'App\\Controller\\DonController::new'], [], [['text', '/don/new']], [], [], []],
    'App\Controller\DonController::show' => [['id'], ['_controller' => 'App\\Controller\\DonController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/don']], [], [], []],
    'App\Controller\DonController::edit' => [['id'], ['_controller' => 'App\\Controller\\DonController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/don']], [], [], []],
    'App\Controller\DonController::delete' => [['id'], ['_controller' => 'App\\Controller\\DonController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/don']], [], [], []],
    'App\Controller\DonateurController::dashboard' => [[], ['_controller' => 'App\\Controller\\DonateurDashboardController::index'], [], [['text', '/donateur/dashboard/']], [], [], []],
    'App\Controller\DonateurDashboardController::index' => [[], ['_controller' => 'App\\Controller\\DonateurDashboardController::index'], [], [['text', '/donateur/dashboard/']], [], [], []],
    'App\Controller\DonationController::faireDon' => [[], ['_controller' => 'App\\Controller\\DonationController::faireDon'], [], [['text', '/faire-don']], [], [], []],
    'App\Controller\DonationController::historiqueDon' => [[], ['_controller' => 'App\\Controller\\DonationController::historiqueDon'], [], [['text', '/historique-don']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\HomeController::index_feature' => [[], ['_controller' => 'App\\Controller\\HomeController::index_feature'], [], [['text', '/feature']], [], [], []],
    'App\Controller\HomeController::index_team' => [[], ['_controller' => 'App\\Controller\\HomeController::index_team'], [], [['text', '/team']], [], [], []],
    'App\Controller\HomeController::index_about' => [[], ['_controller' => 'App\\Controller\\HomeController::index_about'], [], [['text', '/about']], [], [], []],
    'App\Controller\HomeController::index_service' => [[], ['_controller' => 'App\\Controller\\HomeController::index_service'], [], [['text', '/service']], [], [], []],
    'App\Controller\HomeController::index_appointment' => [[], ['_controller' => 'App\\Controller\\HomeController::index_appointment'], [], [['text', '/appointment']], [], [], []],
    'App\Controller\HomeController::index_testimonial' => [[], ['_controller' => 'App\\Controller\\HomeController::index_testimonial'], [], [['text', '/testimonial']], [], [], []],
    'App\Controller\HomeController::index_contact' => [[], ['_controller' => 'App\\Controller\\HomeController::index_contact'], [], [['text', '/contact']], [], [], []],
    'App\Controller\HomeController::index_404' => [[], ['_controller' => 'App\\Controller\\HomeController::index_404'], [], [['text', '/404']], [], [], []],
    'App\Controller\LikeController::likePublication' => [['id'], ['_controller' => 'App\\Controller\\LikeController::likePublication'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/like/publication']], [], [], []],
    'App\Controller\LikeController::likeComment' => [['id'], ['_controller' => 'App\\Controller\\LikeController::likeComment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/like/comment']], [], [], []],
    'App\Controller\MedecinController::dashboard' => [[], ['_controller' => 'App\\Controller\\MedecinController::dashboard'], [], [['text', '/medecin/dashboard']], [], [], []],
    'App\Controller\PatientController::dashboard' => [[], ['_controller' => 'App\\Controller\\PatientController::dashboard'], [], [['text', '/patient/dashboard']], [], [], []],
    'App\Controller\PublicationController::index' => [[], ['_controller' => 'App\\Controller\\PublicationController::index'], [], [['text', '/publication/']], [], [], []],
    'App\Controller\PublicationController::new' => [[], ['_controller' => 'App\\Controller\\PublicationController::new'], [], [['text', '/publication/new']], [], [], []],
    'App\Controller\PublicationController::show' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/publication']], [], [], []],
    'App\Controller\PublicationController::edit' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/publication']], [], [], []],
    'App\Controller\PublicationController::delete' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/publication']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SecurityController::register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/register']], [], [], []],
];
