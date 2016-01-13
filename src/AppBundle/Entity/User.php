<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    private $userfirstname;

    /**
     * @ORM\Column(type="string")
     */
    private $userlastname;

    /**
     * @Gedmo\Slug(fields={"userfirstname", "userlastname", "id"})
     * @ORM\Column(type="string", nullable=true, unique=true)
     */
    private $urlname;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getUrlname()
    {
        return $this->urlname;
    }

    public function setUrlname($urlname)
    {
        $this->urlname = $urlname;
        return $this;
    }

    /**
     * Set userfirstname
     *
     * @param string $userfirstname
     *
     * @return User
     */
    public function setUserfirstname($userfirstname)
    {
        $this->userfirstname = $userfirstname;

        return $this;
    }

    /**
     * Get userfirstname
     *
     * @return string
     */
    public function getUserfirstname()
    {
        return $this->userfirstname;
    }

    /**
     * Set userlastname
     *
     * @param string $userlastname
     *
     * @return User
     */
    public function setUserlastname($userlastname)
    {
        $this->userlastname = $userlastname;

        return $this;
    }

    /**
     * Get userlastname
     *
     * @return string
     */
    public function getUserlastname()
    {
        return $this->userlastname;
    }
}
