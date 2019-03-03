<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Attachment;
use AppBundle\Form\AttachmentType;
use Symfony\Component\HttpFoundation\Response;

class AddAttachmentController extends Controller
{
    /**
     * @Route("/admin/add_attachment", name="add_attachment")
     */
    public function indexAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $attachment = new Attachment();
        $form = $this->createForm(AttachmentType::class, $attachment, array('validation_groups' => array("add")));
        
        $form->handleRequest($request);
        
        $create_msg="";
        $error=array();
        
        if ($form->isSubmitted() && $form->isValid()) {
            $prop= $em->getRepository('AppBundle:Post')->findOneBy(array('post_id'=>$attachment->getPostId()));
            $attachment->setPostTitle($prop->getPostTitle());
            
            $file= $attachment->getAttachment();
            $directory="uploads";
            
            $ext=$file->guessExtension();
            if(!$ext){
                $ext='bin';
            }
            $name=$file->getClientOriginalName();
            $file->move($directory, $name);
            $attachment->setAttachment($name);
            
            $em->persist($attachment);
            $em->flush();

            return $this->redirectToRoute("add_attachment");
        }
        $em = $this->getDoctrine()->getManager();
        $att = $em->getRepository('AppBundle:Attachment')->findAll();
  
        return $this->render('admin/add_attachment.html.twig', array(
        'form' => $form->createView(), 'user'=>$user, "create_msg"=>$create_msg , "errors"=>$error, "page_header"=>"Attachments", "attachments"=>$att));
    }
}