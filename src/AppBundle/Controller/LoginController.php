<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $option = $em->getRepository('AppBundle:Category')->findAll();
        $postCategory='';
        if(isset($_GET['id'])/*$request->query->get('id')!=null*/){
            $cat = $em->getRepository('AppBundle:Category')->findOneBy(array('category_id'=>$_GET['id']));
            $postCategory='('.$cat->getCategoryTitle().')';
            $id=$request->query->get('id');
            $post = $em->getRepository('AppBundle:Post')->findBy(array('category_id'=>$_GET['id']));
        }else{
            $post = $em->getRepository('AppBundle:Post')->findAll();
        }
      
        $authenticationUtils= $this->get('security.authentication_utils');
        
        $errors=$authenticationUtils->getLastAuthenticationError();
        
        $lastUsername=$authenticationUtils->getLastUsername();
        
        return $this->render('login/login.html.twig', array('options'=>$option,'posts'=>$post, 'category'=>$postCategory, 'last_username'=>$lastUsername, 'errors'=>$errors));
        
    }
}
