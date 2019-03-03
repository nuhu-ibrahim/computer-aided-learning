<?php
// src/AppBundle/Form/UserType.php
namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Doctrine\ORM\EntityManager;

use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    protected $em;
    
    function __construct(EntityManager $em) {
        $this->em=$em;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('surname', TextType::class)
	->add('othername', TextType::class)
        ->add('firstname', TextType::class)
        ->add('username', TextType::class)              
        ->add('password', PasswordType::class)
        //->add('cpassword', PasswordType::class, array('mapped' => false, 'constraints' => array(
            //new NotBlank(array('message'=>'Fill the confirm password field')))))
        ->add('cpassword', PasswordType::class, array('mapped' => false))
        ->add('email', EmailType::class)
        ->add('role',  ChoiceType::class, 
            array('choices' => array('--Select usertype--'=>'', 'Student'=>'ROLE_STUDENT',
                'Admin'=>'ROLE_ADMIN', 'Super Admin'=>'ROLE_SUPER_ADMIN')))
        ->add('submit', SubmitType::class, array('label' => 'Add User'))
        ->add('update', SubmitType::class, array('label' => 'Update User'));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'AppBundle\Entity\User',
        ));
    }
}