<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ViewMoreController extends Controller
{
    /**
     * @Route("/view_more/{id}", defaults={"id"=0}, name="view_more")
     */
    public function indexAction(Request $request, $id)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        
        $user = $this->getUser();
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $errors='';
        // replace this example code with whatever you need
        $property= $em->getRepository('AppBundle:Property')->findOneBy(array('property_id'=>$id));
        if(!$property){
            return $this->redirectToRoute("home");
        }
        $option = $em->getRepository('AppBundle:Category')->findAll();
        $attachs = $em->getRepository('AppBundle:Attachment')->findBy(array('property_id'=>$id));
        return $this->render('home/view_more.html.twig', array('user'=>$user, 'last_username'=>'', 'errors'=>$errors, 'options'=>$option, 'attachs'=>$attachs,'property'=>$property));
    }
}
