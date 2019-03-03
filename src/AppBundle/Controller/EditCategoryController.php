<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
use Symfony\Component\HttpFoundation\Response;
class EditCategoryController extends Controller
{
    /**
     * @Route("/admin/edit_categories/{edit}", name="edit_categories", defaults={"edit"=0})
     */
    public function indexAction(Request $request, $edit)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        
        $form->handleRequest($request);
        $update_msg="";
        $cat2="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $cats = $em->getRepository('AppBundle:Category')->findOneBy(array('category_title'=>$category->getCategoryTitle()));
            if($cats){
                $error[]="Category title already exist.";
            }else{
                $cat2 = $em->getRepository('AppBundle:Category')->findOneBy(array('category_id'=>$request->request->get('id')));
                $cat2->setCategoryTitle($category->getCategoryTitle());
                $em->flush();

                return $this->redirectToRoute("add_categories");
            }
        }
        
        $cat2 = $em->getRepository('AppBundle:Category')->findOneBy(array('category_id'=>$edit));
        if(!$cat2){
            return $this->redirectToRoute("add_categories");
        }
        $cat = $em->getRepository('AppBundle:Category')->findAll();
  
        return $this->render('admin/edit_category.html.twig', array(
        'user'=>$user,'form' => $form->createView(), "update_details"=>$cat2 ,"update_msg"=>$update_msg, "page_header"=>"Categories", "errors"=>$error, "categories"=>$cat));
    }
}
