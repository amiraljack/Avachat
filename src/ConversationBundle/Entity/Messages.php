<?php

namespace ConversationBundle\Entity;

/**
 * Messages
 */
class Messages
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var integer
     */
    private $userid;

    /**
     * @var string
     */
    private $text;

    /**
     * @var \DateTime
     */
    private $date;
    /**
     * @var integer
     */
    private $conversationid;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return Messages
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }
    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Messages
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Messages
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set conversationid
     *
     * @param integer $conversationid
     *
     * @return Messages
     */
    public function setConversationid($conversationid)
    {
        $this->conversationid = $conversationid;

        return $this;
    }

    /**
     * Get conversationid
     *
     * @return integer
     */
    public function getConversationid()
    {
        return $this->conversationid;
    }
}

