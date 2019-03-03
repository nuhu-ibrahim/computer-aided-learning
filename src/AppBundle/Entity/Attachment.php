<?php
// src/AppBundle/Entity/Attachment.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="attachmenttbl")
*/
class Attachment
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $attachment_id;
   
    /**
    * @ORM\Column(type="integer")
    * @Assert\NotBlank(groups={"add","edit"},message = "Choose the post whose attachment you want to upload.")
    */
    private $post_id;
    
    /**
    * @ORM\Column(type="string", length=100)
    */
    private $post_title;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add"},message = "Provide the document you want to upload.")
    */
    private $attachment;
    
    /**
    * @ORM\Column(type="string", length=100)
    * @Assert\NotBlank(groups={"add","edit"},message = "Provide a description of the attached document.")
    */
    private $attachment_desc;


    /**
     * Get attachmentId
     *
     * @return integer
     */
    public function getAttachmentId()
    {
        return $this->attachment_id;
    }

    /**
     * Set postId
     *
     * @param integer $postId
     *
     * @return Attachment
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
     * Set postTitle
     *
     * @param string $postTitle
     *
     * @return Attachment
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

    /**
     * Set attachment
     *
     * @param string $attachment
     *
     * @return Attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return string
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set attachmentDesc
     *
     * @param string $attachmentDesc
     *
     * @return Attachment
     */
    public function setAttachmentDesc($attachmentDesc)
    {
        $this->attachment_desc = $attachmentDesc;

        return $this;
    }

    /**
     * Get attachmentDesc
     *
     * @return string
     */
    public function getAttachmentDesc()
    {
        return $this->attachment_desc;
    }
}
