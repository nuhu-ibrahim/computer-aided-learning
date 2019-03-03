<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FullDetailsPostController extends Controller
{
    /**
     * @Route("/admin/post_details/{id}", name="post_details", defaults={"id"=0})
     */
    
    public function indexAction(Request $request, $id)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $prop= $em->getRepository('AppBundle:Post')->findOneBy(array('post_id'=>$id));
        if(!$prop){
            return $this->redirectToRoute("add_posts");
        }
        return $this->render('admin/post_detail.html.twig', array(
        'user'=>$user, 'post'=>$prop, 'page_header'=>'Posts'));
    }
}
