<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListCommentsController extends Controller
{
    /**
     * @Route("/admin/list_comments", name="list_comments")
     */
    public function indexAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $pro = $em->getRepository('AppBundle:Comment')->findAll();
        
        return $this->render('admin/list_comment.html.twig', array(
        'user'=>$user,"page_header"=>"Comments", 'comments'=>$pro));
    }
}
