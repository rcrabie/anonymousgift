<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEvent
 *
 * @ORM\Table(name="user_event")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\UserEventRepository")
 */
class UserEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="BlogBundle\Entity\User", cascade={"persist"})
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="BlogBundle\Entity\Event", cascade={"persist"})
     */
    private $event;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="BlogBundle\Entity\User", cascade={"persist"})
     */
    private $receivedUser;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return UserEvent
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set event
     *
     * @param string $event
     * @return UserEvent
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return string 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set receivedUser
     *
     * @param string $receivedUser
     * @return UserEvent
     */
    public function setReceivedUser($receivedUser)
    {
        $this->receivedUser = $receivedUser;

        return $this;
    }

    /**
     * Get receivedUser
     *
     * @return string 
     */
    public function getReceivedUser()
    {
        return $this->receivedUser;
    }
}
