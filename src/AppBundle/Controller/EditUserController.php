<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Response;

class EditUserController extends Controller
{
    /**
     * @Route("/admin/users/edit_user/{edit}", name="edit_users", defaults={"edit"=0})
     */
    public function indexAction(Request $request, $edit)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $att= $em->getRepository('AppBundle:User')->findOneBy(array('id'=>$edit));
        if(!$att){
            return $this->redirectToRoute("add_users");
        }
        $userType=new User();
        
        $userType->setSurname($att->getSurname());
        $userType->setOthername($att->getOthername());
        $userType->setFirstname($att->getFirstname());
        $userType->setEmail($att->getEmail());
        $userType->setRole($att->getRole());

        $form = $this->createForm(UserType::class, $userType, array('validation_groups' => array("edit")));
        
        $form->handleRequest($request);
        $update_msg="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $u= $em->getRepository('AppBundle:User')->findOneBy(array('id'=>$userType->getId()));
            
            $att->setSurname($userType->getSurname());
            $att->setOthername($userType->getOthername());
            $att->setFirstname($userType->getFirstname());
            $att->setEmail($userType->getEmail());
            $att->setRole($userType->getRole());

            $em->flush();
            return $this->redirectToRoute("add_users");
        }
        
        $att = $em->getRepository('AppBundle:User')->findAll();

        return $this->render('admin/edit_user.html.twig', array(
        'user'=>$user,'form' => $form->createView(), "errors"=>$error, "update_msg"=>$update_msg,'users'=>$att, "page_header"=>'Users'));
    }
}
