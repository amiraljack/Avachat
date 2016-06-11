<?php

namespace ConversationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ConversationBundle\Conversation\ConversationManager;

class ConversationController extends Controller
{
    public function viewAction()
    {
    	//var_dump($this->container);
    	$cm = $this->get('conversationmanager');
    	$conversations = $cm->getConversations(1);

        return $this->render('ConversationBundle:Message:view.html.twig', array(
            "jack"=>"tape m'en une"
        ));
    }
}

