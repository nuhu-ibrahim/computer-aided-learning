<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Property;
class DeletePostController extends Controller
{
    /**
     * @Route("/admin/delete_posts/{delete}", name="delete_posts", defaults={"delete"=0})
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
        
        $cat2 = $em->getRepository('AppBundle:Post')->findOneBy(array('post_id'=>$delete));
        if($cat2){
            $em->remove($cat2);
            $em->flush();
        }
        $cat2=$em->getRepository('AppBundle:Attachment')->findBy(array('post_id'=>$delete));
        foreach($cat2 as $cat ){
            $em->remove($cat);
            $em->flush();
        }
        return $this->redirectToRoute("add_posts");
    }
}
