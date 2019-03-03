<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Entity\Attachment;
use AppBundle\Form\AttachmentType;
use Symfony\Component\HttpFoundation\Response;

class EditAttachmentController extends Controller
{
    /**
     * @Route("/admin/edit_attachment/{edit}", name="edit_attachment", defaults={"edit"=0})
     */
    public function indexAction(Request $request, $edit)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $att= $em->getRepository('AppBundle:Attachment')->findOneBy(array('attachment_id'=>$edit));
        if(!$att){
            return $this->redirectToRoute("add_attachment");
        }
        $attachment=new Attachment();
        
        $attachment->setPostId($att->getPostId());
        $attachment->setAttachmentDesc($att->getAttachmentDesc());

        $form = $this->createForm(AttachmentType::class, $attachment, array('validation_groups' => array("edit")));
        
        $form->handleRequest($request);
        $update_msg="";
        $cat2="";
        $image="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $prop= $em->getRepository('AppBundle:Post')->findOneBy(array('post_id'=>$attachment->getPostId()));
            $attachment->setPostTitle($prop->getPostTitle());
            
            $att = $em->getRepository('AppBundle:Attachment')->findOneBy(array('attachment_id'=>$edit));
            $att->setPostId($attachment->getPostId());
            $att->setAttachmentDesc($attachment->getAttachmentDesc());
            
            if($attachment->getAttachment()){
                $file= $attachment->getAttachment();
                $directory="uploads";
                //$file=$pass->move($directory, $pass->getClientOriginalName());
                $ext=$file->guessExtension();
                if(!$ext){
                    $ext='bin';
                }
                $name=$file->getClientOriginalName();
                $file->move($directory, $name);
                $att->setAttachment($name);
            }
            $em->flush();

            return $this->redirectToRoute("add_attachment");
        }
        $cat2 = $em->getRepository('AppBundle:Attachment')->findOneBy(array('attachment_id'=>$edit));
        if(!$cat2){
            return $this->redirectToRoute("add_attachment");
        }
        
        $att = $em->getRepository('AppBundle:Attachment')->findAll();

        return $this->render('admin/edit_attachment.html.twig', array(
        'user'=>$user,'form' => $form->createView(), "update_details"=>$cat2, "errors"=>$error, "update_msg"=>$update_msg, "page_header"=>"Attachments", "properties"=>$att, "attachments"=>$att));
    }
}
