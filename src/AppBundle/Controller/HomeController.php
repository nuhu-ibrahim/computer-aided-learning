<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $option = $em->getRepository('AppBundle:Category')->findAll();
        $postCategory='';
        $errors='';
        if(isset($_GET['id'])/*$request->query->get('id')!=null*/){
            $cat = $em->getRepository('AppBundle:Category')->findOneBy(array('category_id'=>$_GET['id']));
            $postCategory='('.$cat->getCategoryTitle().')';
            $id=$request->query->get('id');
            $post = $em->getRepository('AppBundle:Post')->findBy(array('category_id'=>$_GET['id']));
        }else{
            $post = $em->getRepository('AppBundle:Post')->findBy(array("post_status"=>'published'));
        }
        return $this->render('home/home.html.twig', array('user'=>$user, 'last_username'=>'','errors'=>$errors, 'options'=>$option,'posts'=>$post, 'category'=>$postCategory));
    }
}
