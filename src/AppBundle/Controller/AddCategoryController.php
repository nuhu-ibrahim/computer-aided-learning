<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
use Symfony\Component\HttpFoundation\Response;
class AddCategoryController extends Controller
{
    /**
     * @Route("/admin/categories", name="add_categories")
     */
    public function indexAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();
        // replace this example code with whatever you need
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        
        $form->handleRequest($request);
        
        $create_msg="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $cats = $em->getRepository('AppBundle:Category')->findOneBy(array('category_title'=>$category->getCategoryTitle()));
            if($cats){
                //return new Response("Here");
                $error[]="Category title already exist.";
            }else{
                $em->persist($category);
                $em->flush();
                
                return $this->redirectToRoute("add_categories");
            }
            
        }
        $em = $this->getDoctrine()->getManager();
        $cat = $em->getRepository('AppBundle:Category')->findAll();
  
        return $this->render('admin/add_category.html.twig', array(
        'user'=>$user,'form' => $form->createView(), "create_msg"=>$create_msg , "errors"=>$error, "page_header"=>"Categories", "categories"=>$cat));
        
        //return $this->render('admin/index.html.twig', array();
    }
}