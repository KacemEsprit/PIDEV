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
    'app_admin_index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], [], []],
    'admin_publications' => [[], ['_controller' => 'App\\Controller\\AdminController::managePublications'], [], [['text', '/admin/publications']], [], [], []],
    'admin_publication_approve' => [['id'], ['_controller' => 'App\\Controller\\AdminController::approvePublication'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/publications/approve']], [], [], []],
    'admin_publication_reject' => [['id'], ['_controller' => 'App\\Controller\\AdminController::rejectPublication'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/publications/reject']], [], [], []],
    'app_comment_index' => [[], ['_controller' => 'App\\Controller\\CommentController::index'], [], [['text', '/comment/']], [], [], []],
    'app_comment_new' => [[], ['_controller' => 'App\\Controller\\CommentController::new'], [], [['text', '/comment/new']], [], [], []],
    'app_comment_show' => [['id'], ['_controller' => 'App\\Controller\\CommentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], [], []],
    'app_comment_edit' => [['id'], ['_controller' => 'App\\Controller\\CommentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], [], []],
    'app_comment_delete' => [['id'], ['_controller' => 'App\\Controller\\CommentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], [], []],
    'app_donateur_dashboard' => [[], ['_controller' => 'App\\Controller\\DonateurController::dashboard'], [], [['text', '/donateur/dashboard']], [], [], []],
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
    'app_publication_like' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::like'], [], [['text', '/like'], ['variable', '/', '[^/]++', 'id', true], ['text', '/publication']], [], [], []],
    'app_publication_delete' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/publication']], [], [], []],
    'publication_approve' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::approve'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/publication/approve']], [], [], []],
    'publication_reject' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::reject'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/publication/reject']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/register']], [], [], []],
    'chatbot_test' => [[], ['_controller' => 'App\\Controller\\ChatbotController::test'], [], [['text', '/chatbot/test']], [], [], []],
    'chatbot_message' => [[], ['_controller' => 'App\\Controller\\ChatbotController::message'], [], [['text', '/chatbot/message']], [], [], []],
    'App\Controller\AdminController::index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], [], []],
    'App\Controller\AdminController::managePublications' => [[], ['_controller' => 'App\\Controller\\AdminController::managePublications'], [], [['text', '/admin/publications']], [], [], []],
    'App\Controller\AdminController::approvePublication' => [['id'], ['_controller' => 'App\\Controller\\AdminController::approvePublication'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/publications/approve']], [], [], []],
    'App\Controller\AdminController::rejectPublication' => [['id'], ['_controller' => 'App\\Controller\\AdminController::rejectPublication'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/publications/reject']], [], [], []],
    'App\Controller\ChatbotController::test' => [[], ['_controller' => 'App\\Controller\\ChatbotController::test'], [], [['text', '/chatbot/test']], [], [], []],
    'App\Controller\ChatbotController::message' => [[], ['_controller' => 'App\\Controller\\ChatbotController::message'], [], [['text', '/chatbot/message']], [], [], []],
    'App\Controller\CommentController::index' => [[], ['_controller' => 'App\\Controller\\CommentController::index'], [], [['text', '/comment/']], [], [], []],
    'App\Controller\CommentController::new' => [[], ['_controller' => 'App\\Controller\\CommentController::new'], [], [['text', '/comment/new']], [], [], []],
    'App\Controller\CommentController::show' => [['id'], ['_controller' => 'App\\Controller\\CommentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], [], []],
    'App\Controller\CommentController::edit' => [['id'], ['_controller' => 'App\\Controller\\CommentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], [], []],
    'App\Controller\CommentController::delete' => [['id'], ['_controller' => 'App\\Controller\\CommentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], [], []],
    'App\Controller\DonateurController::dashboard' => [[], ['_controller' => 'App\\Controller\\DonateurController::dashboard'], [], [['text', '/donateur/dashboard']], [], [], []],
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
    'App\Controller\PublicationController::like' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::like'], [], [['text', '/like'], ['variable', '/', '[^/]++', 'id', true], ['text', '/publication']], [], [], []],
    'App\Controller\PublicationController::delete' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/publication']], [], [], []],
    'App\Controller\PublicationController::approve' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::approve'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/publication/approve']], [], [], []],
    'App\Controller\PublicationController::reject' => [['id'], ['_controller' => 'App\\Controller\\PublicationController::reject'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/publication/reject']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SecurityController::register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/register']], [], [], []],
];
