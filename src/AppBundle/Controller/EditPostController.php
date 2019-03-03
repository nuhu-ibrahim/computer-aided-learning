<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Entity\Post;
use AppBundle\Form\PostType;
use Symfony\Component\HttpFoundation\Response;
class EditPostController extends Controller
{
    /**
     * @Route("/edit_posts/{edit}", name="edit_posts", defaults={"edit"=0})
     */
    public function indexAction(Request $request, $edit)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $prop= $em->getRepository('AppBundle:Post')->findOneBy(array('post_id'=>$edit));
        if(!$prop){
            return $this->redirectToRoute("add_posts");
        }
        $post=new Post();
        
        $post->setCategoryId($prop->getCategoryId());
        $post->setPostTitle($prop->getPostTitle());
        $post->setPostDesc($prop->getPostDesc());
        $post->setPostStatus($prop->getPostStatus());
        $post->setPostContent($prop->getPostContent());
        $form = $this->createForm(PostType::class, $post, array('validation_groups' => array("edit")));
        
        $form->handleRequest($request);
        $update_msg="";
        $cat2="";
        $image="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $prop2 = $em->getRepository('AppBundle:Post')->findOneBy(array('post_id'=>$edit));
            
            $prop->setCategoryId($post->getCategoryId());
            $prop->setPostTitle($post->getPostTitle());
            $prop->setPostDesc($post->getPostDesc());
            $prop->setPostStatus($post->getPostStatus());
            $prop->setPostContent($post->getPostContent());
            
            if($post->getPostImage()){
                $file= $post->getPostImage();
                $directory="uploads";
                //$file=$pass->move($directory, $pass->getClientOriginalName());
                $ext=$file->guessExtension();
                if(!$ext){
                    $ext='bin';
                }
                $rand= rand(1, 9999999);
                $file->move($directory, $rand.'.'.$ext);
                $prop->setPostImage($rand.'.'.$ext);
            }
            $myCat = $em->getRepository('AppBundle:Category')->findOneBy(array("category_id"=>$post->getCategoryId()));
            $prop->setCategoryTitle($myCat->getCategoryTitle());
            $em->flush();

            return $this->redirectToRoute("add_posts");
        }
        $cat2 = $em->getRepository('AppBundle:Post')->findOneBy(array('post_id'=>$edit));
        if(!$cat2){
            return $this->redirectToRoute("add_posts");
        }
        $cat = $em->getRepository('AppBundle:Post')->findAll();
        
        $search_msg='';
        if(isset($_POST['search'])){
            $status=$_POST['search'];
            
            if(!$status==''){
                $pro = $em->getRepository('AppBundle:Post')->findBy(array('post_status'=>$status));
                $search_msg=  ucfirst($status).' Posts';
            }else
                $pro = $em->getRepository('AppBundle:Post')->findAll();
        }else{
            $pro = $em->getRepository('AppBundle:Post')->findAll();
        }
        return $this->render('admin/edit_post.html.twig', array(
        'user'=>$user,'form' => $form->createView(), 'search'=>$search_msg, "update_details"=>$cat2, "errors"=>$error, "update_msg"=>$update_msg, "page_header"=>"Posts", "posts"=>$pro));
    }
}
