<?php
// src/AppBundle/Entity/Category.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="categorytbl")
*/
class Category
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $category_id;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message = "Provide a category title")
    */
    private $category_title;

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set categoryTitle
     *
     * @param string $categoryTitle
     *
     * @return Category
     */
    public function setCategoryTitle($categoryTitle)
    {
        $this->category_title = $categoryTitle;

        return $this;
    }

    /**
     * Get categoryTitle
     *
     * @return string
     */
    public function getCategoryTitle()
    {
        return $this->category_title;
    }
}
