<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\PostType;
use AppBundle\Entity\Post;
use Symfony\Component\Validator\Constraints\Date;

class AddPostController extends Controller
{
    /**
     * @Route("/admin/posts", name="add_posts")
     */
    public function indexAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $post = new Post();
        $form = $this->createForm(PostType::class, $post, array('validation_groups' => array("add")));
        
        $form->handleRequest($request);
         
        $create_msg="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            
            $file= $post->getPostImage();
            $directory="uploads";
            //$file=$pass->move($directory, $pass->getClientOriginalName());
            $ext=$file->guessExtension();
            if(!$ext){
                $ext='bin';
            }
            $rand= rand(1, 9999999);
            $file->move($directory, $rand.'.'.$ext);
            $post->setPostImage($rand.'.'.$ext);
            
            $date = date_create();
            
            $myCat = $em->getRepository('AppBundle:Category')->findOneBy(array("category_id"=>$post->getCategoryId()));
            $post->setCategoryTitle($myCat->getCategoryTitle());

            $post->setPostDate($date);
            
            $post->setPostAuthor($user->getFirstname()." ".$user->getSurname());
            
            $em->persist($post);
            $em->flush();
                
            return $this->redirectToRoute("add_posts");
            
        }
        $search_msg='';
        if(isset($_POST['search'])){
            $status=$_POST['search'];
            
            if(!$status==''){
                $pro = $em->getRepository('AppBundle:Post')->findBy(array('post_status'=>$status));
                $search_msg=  ucfirst($status);
            }else{
                $pro = $em->getRepository('AppBundle:Post')->findAll();
            }
        }else{
            $pro = $em->getRepository('AppBundle:Post')->findAll();
        }

        $cats = $em->getRepository('AppBundle:Category')->findAll();
        
        return $this->render('admin/add_post.html.twig', array(
        'user'=>$user,'form' => $form->createView(), 'search'=>$search_msg, "create_msg"=>$create_msg , "errors"=>$error, "page_header"=>"Posts", "posts"=>$pro));
    }
    
    
    
}
