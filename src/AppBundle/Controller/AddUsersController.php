<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\UserType;
use AppBundle\Entity\User;

class AddUsersController extends Controller
{
    /**
     * @Route("/admin/users/add_users", name="add_users")
     */
    public function indexAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $userType = new User();
        $form = $this->createForm(UserType::class, $userType, array('validation_groups' => array("add")));
        
        $form->handleRequest($request);
        
        $create_msg="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $cats = $em->getRepository('AppBundle:User')->findOneBy(array('username'=>$userType->getUsername()));
            $cats2 = $em->getRepository('AppBundle:User')->findOneBy(array('email'=>$userType->getEmail()));
            if($cats){
                $error[]="Username already exist";
            }
            if($cats2){
                $error[]="Email already exist";
            }

            if(strcasecmp($userType->getPassword(), $form->get('cpassword')->getData())){
                $error[]="Password and confirm password fields do not match";
            }
            if(count($error)==0){
                $em->persist($userType);
                $em->flush();
                return $this->redirectToRoute("add_users");
            }
        }
        $em = $this->getDoctrine()->getManager();
        $cat = $em->getRepository('AppBundle:User')->findAll();
  
        return $this->render('admin/add_users.html.twig', array(
        'user'=>$user,'form' => $form->createView(), "create_msg"=>$create_msg , "errors"=>$error, "page_header"=>"Users", "users"=>$cat));
        
    }
}
