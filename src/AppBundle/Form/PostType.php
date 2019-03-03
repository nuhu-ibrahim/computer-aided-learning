<?php
// src/AppBundle/Form/PropertyType.php
namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Doctrine\ORM\EntityManager;

use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    protected $em;
    
    function __construct(EntityManager $em) {
        $this->em=$em;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
 
        //$em = $entity_manager->getDoctrine()->getManager();
        $cats = $this->em->getRepository('AppBundle:Category')->findAll();
        
        $cat= array('--Select Category--'=>'');
        
        foreach( $cats as $c){
            $cat[$c->getCategoryTitle()]=$c->getCategoryId();
        }
        $builder
        ->add('category_id', ChoiceType::class, array('choices' => $cat))
        ->add('post_title', TextType::class)
        ->add('post_desc', TextareaType::class)
        ->add('post_content', TextareaType::class)
        ->add('post_image', FileType::class)
        ->add('post_status',  ChoiceType::class, 
                array('choices' => array('--Select Post Status'=>'', 
                    'Draft'=>'draft', 'Published'=>'published')))
        ->add('submit', SubmitType::class, array('label' => 'Add Post'))
        ->add('update', SubmitType::class, array('label' => 'Update Post'));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'AppBundle\Entity\Post',
        ));
    }
}