<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
use Symfony\Component\HttpFoundation\Response;
class DeleteCommentController extends Controller
{
    /**
     * @Route("/admin/delete_comments/{delete}", name="delete_comments", defaults={"delete"=0})
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
        
        $cat2 = $em->getRepository('AppBundle:Comment')->findOneBy(array('comment_id'=>$delete));
        if($cat2){
            $em->remove($cat2);
            $em->flush();
        }
        return $this->redirectToRoute("list_comments");
    }
}
