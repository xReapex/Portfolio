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
        '/about' => [[['_route' => 'app.about', '_controller' => 'App\\Controller\\about\\AboutController::showAbout'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'app.api', '_controller' => 'App\\Controller\\api\\ApiController::showApi'], null, null, null, false, false, null]],
        '/feedback' => [[['_route' => 'app.feedbacks.home', '_controller' => 'App\\Controller\\feedbacks\\FeedbacksController::showFeedbacks'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app.redirect', '_controller' => 'App\\Controller\\home\\HomeController::redirectRoute'], null, null, null, false, false, null]],
        '/home' => [
            [['_route' => 'app.home', '_controller' => 'App\\Controller\\home\\HomeController::showHome'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\home\\HomeController::showHome'], null, null, null, false, false, null],
        ],
        '/newsletter/add' => [[['_route' => 'app.newsletter.add', '_controller' => 'App\\Controller\\home\\HomeController::addEmail'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app.test', '_controller' => 'App\\Controller\\home\\HomeController::test'], null, null, null, false, false, null]],
        '/newsletter/send/all' => [[['_route' => 'app.newsletter.send.all', '_controller' => 'App\\Controller\\home\\HomeController::sendNewsletter'], null, null, null, false, false, null]],
        '/project' => [[['_route' => 'app.project', '_controller' => 'App\\Controller\\project\\ProjectController::showProjects'], null, null, null, false, false, null]],
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
                .'|/api/v1(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:207)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:238)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:274)'
                        .'|feedbacks(?'
                            .'|(?:\\.([^/]++))?(*:309)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:343)'
                        .')'
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
        207 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        238 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        274 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        309 => [[['_route' => 'api_feedbacks_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Feedbacks', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        343 => [
            [['_route' => 'api_feedbacks_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Feedbacks', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
