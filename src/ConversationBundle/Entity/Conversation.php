<?php

namespace ConversationBundle\Entity;

/**
 * Conversation
 */
class Conversation
{
    /**
     * @var integer
     */
    private $conversationid;

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

