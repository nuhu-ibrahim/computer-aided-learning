<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Comment;
use AppBundle\Form\CommentType;

class PostsController extends Controller
{
    /**
     * @Route("/posts/{id}", defaults={"id"=0}, name="post")
     */
    public function indexAction(Request $request, $id)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $property= $em->getRepository('AppBundle:Post')->findOneBy(array('post_id'=>$id));
        if(!$property){
            return $this->redirectToRoute("home");
        }
        
        $comment= new Comment();
        
        $form = $this->createForm(CommentType::class, $comment);
        
        $form->handleRequest($request);
        
        $create_msg="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setPostId($id);
            $comment->setUserId($user->getID());
            
            $date = date_create();
            $comment->setCommentDate($date);

            $comment->setFirstname($user->getFirstname());
            $comment->setSurname($user->getSurname());
            
            $comment->setPostTitle($property->getPostTitle());
            
            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute("post", array("id"=>$id));
        }
        
        $option = $em->getRepository('AppBundle:Category')->findAll();
        
        $attachs= $em->getRepository('AppBundle:Attachment')->findBy(array("post_id"=>$id));
        
        $comment= $em->getRepository('AppBundle:Comment')->findBy(array("post_id"=>$id));
        
        return $this->render('home/posts.html.twig', array('user'=>$user,'form' => $form->createView(), "create_msg"=>$create_msg , "errors"=>$error, "attachs"=>$attachs , "comments"=>$comment,'last_username'=>'','errors'=>'', 'options'=>$option,'post'=>$property));
    
    }
}
