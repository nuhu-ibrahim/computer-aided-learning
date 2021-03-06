<?php
// src/AppBundle/Entity/Comment.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="commenttbl")
*/
class Comment
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $comment_id;
    
    /**
    * @ORM\Column(type="integer")
    */
    private $post_id;
    
    /**
    * @ORM\Column(type="string", length=100)
    */
    private $user_id;
    
    /**
    * @ORM\Column(type="string", length=100)
    */
    private $post_title;
    
    /**
    * @ORM\Column(type="string", length=100)
    */
    private $firstname;
    
    /**
    * @ORM\Column(type="string", length=100)
    */
    private $surname;

    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message = "Comment cannot be empty.")
    */
    private $comment_content;
    
    /**
    * @ORM\Column(type="datetime")
    */
    private $comment_date;

    /**
     * Get commentId
     *
     * @return integer
     */
    public function getCommentId()
    {
        return $this->comment_id;
    }

    /**
     * Set postId
     *
     * @param integer $postId
     *
     * @return Comment
     */
    public function setPostId($postId)
    {
        $this->post_id = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return integer
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * Set userId
     *
     * @param string $userId
     *
     * @return Comment
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set commentContent
     *
     * @param string $commentContent
     *
     * @return Comment
     */
    public function setCommentContent($commentContent)
    {
        $this->comment_content = $commentContent;

        return $this;
    }

    /**
     * Get commentContent
     *
     * @return string
     */
    public function getCommentContent()
    {
        return $this->comment_content;
    }

    /**
     * Set commentDate
     *
     * @param \DateTime $commentDate
     *
     * @return Comment
     */
    public function setCommentDate($commentDate)
    {
        $this->comment_date = $commentDate;

        return $this;
    }

    /**
     * Get commentDate
     *
     * @return \DateTime
     */
    public function getCommentDate()
    {
        return $this->comment_date;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Comment
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Comment
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set postTitle
     *
     * @param string $postTitle
     *
     * @return Comment
     */
    public function setPostTitle($postTitle)
    {
        $this->post_title = $postTitle;

        return $this;
    }

    /**
     * Get postTitle
     *
     * @return string
     */
    public function getPostTitle()
    {
        return $this->post_title;
    }
}
