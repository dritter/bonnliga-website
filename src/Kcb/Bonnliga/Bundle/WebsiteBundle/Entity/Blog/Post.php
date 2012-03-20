<?php

namespace Kcb\Bonnliga\Bundle\WebsiteBundle\Entity\Blog;

use Sylius\Bundle\BloggerBundle\Model\SignedPost;
use Doctrine\ORM\Mapping as ORM;
use Kcb\Bonnliga\Bundle\WebsiteBundle\Entity\User;

/**
 * @ORM\Entity
 */
class Post extends SignedPost {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column
     */
    protected $title;

    /**
     * @ORM\Column
     */
    protected $slug;

    /**
     * @ORM\ManyToOne(targetEntity="Kcb\Bonnliga\Bundle\WebsiteBundle\Entity\User")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $published;

    /**
     * @ORM\Column(type="datetime", name="created_at")
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime", name="updated_at")
     */
    protected $updatedAt;

    public function __construct() {
        parent::__construct();
        $this->incrementUpdatedAt();
    }

}
