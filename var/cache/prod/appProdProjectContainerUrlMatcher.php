<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/admin')) {
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

            // request_details
            if (0 === strpos($pathinfo, '/admin/request_details') && preg_match('#^/admin/request_details(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'request_details')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\FullDetailsRequestController::indexAction',));
            }

            // list_requests
            if ('/admin/list_request' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ListRequestsController::indexAction',  '_route' => 'list_requests',);
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

        // request
        if (0 === strpos($pathinfo, '/request') && preg_match('#^/request(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'request')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\RequestController::indexAction',));
        }

        // view_more
        if (0 === strpos($pathinfo, '/view_more') && preg_match('#^/view_more(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_more')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\ViewMoreController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
