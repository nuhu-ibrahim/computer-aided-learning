<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
use Symfony\Component\HttpFoundation\Response;
class DeleteCategoryController extends Controller
{
    /**
     * @Route("/admin/delete_categories/{delete}", name="delete_categories", defaults={"delete"=0})
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
        
        $cat2 = $em->getRepository('AppBundle:Category')->findOneBy(array('category_id'=>$delete));
        if($cat2){
            $em->remove($cat2);
            $em->flush();
        }
        $cat2 = $em->getRepository('AppBundle:Post')->findBy(array('category_id'=>$delete));
        if($cat2){
            foreach($cat2 as $cat){
                $cas=$em->getRepository('AppBundle:Attachment')->findBy(array('post_id'=>$cat->getPostId()));
                foreach($cas as $ca){
                    $em->remove($ca);
                    $em->flush();
                }
                $em->remove($cat);
                $em->flush();
            }
            
        }
        return $this->redirectToRoute("add_categories");
    }
}
