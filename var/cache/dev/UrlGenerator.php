<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    '' => [[], ['_controller' => 'App\\Controller\\Controller::index'], [], [['text', '/']], [], []],
    'gestionnaire.showUsers' => [[], ['_controller' => 'App\\Controller\\GestionnaireController::showUsers'], [], [['text', '/gestionnaire/showUsers']], [], []],
    'Gestsionnaire.addUsers' => [[], ['_controller' => 'App\\Controller\\GestionnaireController::addUsers'], [], [['text', '/gestionnaire/addUsers']], [], []],
    'Gestionnaire.deleteUsers' => [['id'], ['_controller' => 'App\\Controller\\GestionnaireController::deleteUsers'], ['id' => '\\d+'], [['text', '/deleteUsers'], ['variable', '/', '\\d+', 'id', true], ['text', '/gestionnaire']], [], []],
    'Gestionnaire.editUsers' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\GestionnaireController::editUsers'], ['id' => '\\d+'], [['text', '/editUsers'], ['variable', '/', '\\d+', 'id', true], ['text', '/gestionnaire']], [], []],
    'Gestionaire.validUsers' => [[], ['_controller' => 'App\\Controller\\GestionnaireController::validAddUsers'], [], [['text', '/gestionnaire/validAddUsers']], [], []],
    'Gestionnaire.validFormEditUsers' => [[], ['_controller' => 'App\\Controller\\GestionnaireController::validFormEditUsers'], [], [['text', '/gestionnaire/validEditUsers']], [], []],
    'Representant.accueil' => [[], ['_controller' => 'App\\Controller\\RepresentantFamilleController::index'], [], [['text', '/representant/']], [], []],
    'Representant.informationsFamille' => [[], ['_controller' => 'App\\Controller\\RepresentantFamilleController::informationsFamille'], [], [['text', '/representant/informationsFamille']], [], []],
    'Representant.ajouter' => [[], ['_controller' => 'App\\Controller\\RepresentantFamilleController::new'], [], [['text', '/representant/inscription']], [], []],
    'Representant.afficher' => [['id'], ['_controller' => 'App\\Controller\\RepresentantFamilleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/representant']], [], []],
    'representant_famille_edit' => [['id'], ['_controller' => 'App\\Controller\\RepresentantFamilleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/representant']], [], []],
    'Representant.supprimer' => [['id'], ['_controller' => 'App\\Controller\\RepresentantFamilleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/representant']], [], []],
    'Representant.activer' => [['mail'], ['_controller' => 'App\\Controller\\RepresentantFamilleController::activationUser'], [], [['variable', '/', '[^/]++', 'mail', true], ['text', '/representant/activer']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'deconnexion' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], []],
];
