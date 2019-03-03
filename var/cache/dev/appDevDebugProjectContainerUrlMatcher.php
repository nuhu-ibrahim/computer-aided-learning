<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // add_attachment
            if ('/admin/add_attachment' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AddAttachmentController::indexAction',  '_route' => 'add_attachment',);
            }

            // add_categories
            if ('/admin/categories' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AddCategoryController::indexAction',  '_route' => 'add_categories',);
            }

            // add_posts
            if ('/admin/posts' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AddPostController::indexAction',  '_route' => 'add_posts',);
            }

            // add_users
            if ('/admin/users/add_users' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AddUsersController::indexAction',  '_route' => 'add_users',);
            }

            // admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/admin/delete_')) {
                // delete_attachment
                if (0 === strpos($pathinfo, '/admin/delete_attachment') && preg_match('#^/admin/delete_attachment(?:/(?P<delete>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_attachment')), array (  'delete' => 0,  '_controller' => 'AppBundle\\Controller\\DeleteAttachmentController::indexAction',));
                }

                // delete_categories
                if (0 === strpos($pathinfo, '/admin/delete_categories') && preg_match('#^/admin/delete_categories(?:/(?P<delete>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_categories')), array (  'delete' => 0,  '_controller' => 'AppBundle\\Controller\\DeleteCategoryController::indexAction',));
                }

                // delete_comments
                if (0 === strpos($pathinfo, '/admin/delete_comments') && preg_match('#^/admin/delete_comments(?:/(?P<delete>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_comments')), array (  'delete' => 0,  '_controller' => 'AppBundle\\Controller\\DeleteCommentController::indexAction',));
                }

                // delete_posts
                if (0 === strpos($pathinfo, '/admin/delete_posts') && preg_match('#^/admin/delete_posts(?:/(?P<delete>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_posts')), array (  'delete' => 0,  '_controller' => 'AppBundle\\Controller\\DeletePostController::indexAction',));
                }

            }

            // delete_users
            if (0 === strpos($pathinfo, '/admin/users/delete_user') && preg_match('#^/admin/users/delete_user(?:/(?P<delete>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_users')), array (  'delete' => 0,  '_controller' => 'AppBundle\\Controller\\DeleteUserController::indexAction',));
            }

            // edit_users
            if (0 === strpos($pathinfo, '/admin/users/edit_user') && preg_match('#^/admin/users/edit_user(?:/(?P<edit>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_users')), array (  'edit' => 0,  '_controller' => 'AppBundle\\Controller\\EditUserController::indexAction',));
            }

            // edit_attachment
            if (0 === strpos($pathinfo, '/admin/edit_attachment') && preg_match('#^/admin/edit_attachment(?:/(?P<edit>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_attachment')), array (  'edit' => 0,  '_controller' => 'AppBundle\\Controller\\EditAttachmentController::indexAction',));
            }

            // edit_categories
            if (0 === strpos($pathinfo, '/admin/edit_categories') && preg_match('#^/admin/edit_categories(?:/(?P<edit>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_categories')), array (  'edit' => 0,  '_controller' => 'AppBundle\\Controller\\EditCategoryController::indexAction',));
            }

            // post_details
            if (0 === strpos($pathinfo, '/admin/post_details') && preg_match('#^/admin/post_details(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_details')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\FullDetailsPostController::indexAction',));
            }

            // list_comments
            if ('/admin/list_comments' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ListCommentsController::indexAction',  '_route' => 'list_comments',);
            }

        }

        // edit_posts
        if (0 === strpos($pathinfo, '/edit_posts') && preg_match('#^/edit_posts(?:/(?P<edit>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_posts')), array (  'edit' => 0,  '_controller' => 'AppBundle\\Controller\\EditPostController::indexAction',));
        }

        // home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'home',);
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\LoginController::indexAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        // post
        if (0 === strpos($pathinfo, '/posts') && preg_match('#^/posts(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\PostsController::indexAction',));
        }

        // view_more
        if (0 === strpos($pathinfo, '/view_more') && preg_match('#^/view_more(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_more')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\ViewMoreController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
