<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'add_attachment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddAttachmentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add_attachment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_categories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddCategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_posts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddPostController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/posts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddUsersController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/users/add_users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_attachment' => array (  0 =>   array (    0 => 'delete',  ),  1 =>   array (    'delete' => 0,    '_controller' => 'AppBundle\\Controller\\DeleteAttachmentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'delete',    ),    1 =>     array (      0 => 'text',      1 => '/admin/delete_attachment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_categories' => array (  0 =>   array (    0 => 'delete',  ),  1 =>   array (    'delete' => 0,    '_controller' => 'AppBundle\\Controller\\DeleteCategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'delete',    ),    1 =>     array (      0 => 'text',      1 => '/admin/delete_categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_comments' => array (  0 =>   array (    0 => 'delete',  ),  1 =>   array (    'delete' => 0,    '_controller' => 'AppBundle\\Controller\\DeleteCommentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'delete',    ),    1 =>     array (      0 => 'text',      1 => '/admin/delete_comments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_posts' => array (  0 =>   array (    0 => 'delete',  ),  1 =>   array (    'delete' => 0,    '_controller' => 'AppBundle\\Controller\\DeletePostController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'delete',    ),    1 =>     array (      0 => 'text',      1 => '/admin/delete_posts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_users' => array (  0 =>   array (    0 => 'delete',  ),  1 =>   array (    'delete' => 0,    '_controller' => 'AppBundle\\Controller\\DeleteUserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'delete',    ),    1 =>     array (      0 => 'text',      1 => '/admin/users/delete_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_attachment' => array (  0 =>   array (    0 => 'edit',  ),  1 =>   array (    'edit' => 0,    '_controller' => 'AppBundle\\Controller\\EditAttachmentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'edit',    ),    1 =>     array (      0 => 'text',      1 => '/admin/edit_attachment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_categories' => array (  0 =>   array (    0 => 'edit',  ),  1 =>   array (    'edit' => 0,    '_controller' => 'AppBundle\\Controller\\EditCategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'edit',    ),    1 =>     array (      0 => 'text',      1 => '/admin/edit_categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_posts' => array (  0 =>   array (    0 => 'edit',  ),  1 =>   array (    'edit' => 0,    '_controller' => 'AppBundle\\Controller\\EditPostController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'edit',    ),    1 =>     array (      0 => 'text',      1 => '/edit_posts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_users' => array (  0 =>   array (    0 => 'edit',  ),  1 =>   array (    'edit' => 0,    '_controller' => 'AppBundle\\Controller\\EditUserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'edit',    ),    1 =>     array (      0 => 'text',      1 => '/admin/users/edit_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_details' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => 0,    '_controller' => 'AppBundle\\Controller\\FullDetailsPostController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/post_details',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_comments' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListCommentsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/list_comments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LoginController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => 0,    '_controller' => 'AppBundle\\Controller\\PostsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/posts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'view_more' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => 0,    '_controller' => 'AppBundle\\Controller\\ViewMoreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/view_more',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
