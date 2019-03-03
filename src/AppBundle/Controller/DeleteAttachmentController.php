<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Attachment;
class DeleteAttachmentController extends Controller
{
    /**
     * @Route("/admin/delete_attachment/{delete}", name="delete_attachment", defaults={"delete"=0})
     */
    public function indexAction(Request $request, $delete)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $update_msg="";
        $cat2="";
        $error=array();
        
        $cat2 = $em->getRepository('AppBundle:Attachment')->findOneBy(array('attachment_id'=>$delete));
        if($cat2){
            $em->remove($cat2);
            $em->flush();
        }
        return $this->redirectToRoute("add_attachment");
    }
}
