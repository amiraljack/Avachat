<?php

namespace ConversationBundle\Entity;

/**
 * UsersConversations
 */
class UsersConversations
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $conversationid;

    /**
     * @var integer
     */
    private $userid;

    /**
     * @var string
     */
    private $labelconversation;


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
     * Set conversationid
     *
     * @param integer $conversationid
     *
     * @return UsersConversations
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

    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return UsersConversations
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
     * Set labelconversation
     *
     * @param string $labelconversation
     *
     * @return UsersConversations
     */
    public function setLabelconversation($labelconversation)
    {
        $this->labelconversation = $labelconversation;

        return $this;
    }

    /**
     * Get labelconversation
     *
     * @return string
     */
    public function getLabelconversation()
    {
        return $this->labelconversation;
    }
}

