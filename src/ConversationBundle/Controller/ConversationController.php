<?php

namespace ConversationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ConversationBundle\Conversation\ConversationManager;

class ConversationController extends Controller
{
    public function viewHomeAction()
    {
        //var_dump($this->container);
        $cm = $this->get('conversationmanager');
        $conversations = $cm->getUsersConversations(1);

        return $this->render('ConversationBundle:Conversation:view.html.twig', array(
            "conversations"=>$conversations
        ));
    }
    public function addMessageAction()
    {
    	// TODO : retrieve ajax data 
        // $data = file_get_contents("php://input");
    	$cm = $this->get('conversationmanager');

        $cm->addMessage();// TODO implement ajax data
        return $this->render('ConversationBundle:Conversation:view.html.twig', array(
            "jack"=>"tape m'en une"
        ));
    }
    public function viewConversationAction($conversationid)
    {
        //var_dump($this->container);
        $cm = $this->get('conversationmanager');
        $conversation = $cm->getMessages($conversationid);
        if (empty($conversation)) {
            return $this->render('ConversationBundle:Conversation:viewNotFound.html.twig', array(
        ));
        }
        $conversationLabel = $cm->getLabelConversation($conversationid, 1);
        return $this->render('ConversationBundle:Conversation:viewConversation.html.twig', array(
            "conversation"=>$conversation,
            "conversationLabel"=>$conversationLabel
        ));
    }
}

