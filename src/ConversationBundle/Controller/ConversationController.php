<?php

namespace ConversationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ConversationBundle\Conversation\ConversationManager;
use Symfony\Component\HttpFoundation\JsonResponse;

class ConversationController extends Controller
{
    public function viewHomeAction()
    {
        //var_dump($this->container);
        $cm = $this->get('conversationmanager');
        $conversations = $cm->getUserConversations(1);

        return $this->render('ConversationBundle:Conversation:viewHome.html.twig', array(
            "conversations"=>$conversations
        ));
    }
    public function addMessageAction()
    {
    	// TODO : retrieve ajax data 
    	$cm    = $this->get('conversationmanager');

        $cm->addMessage($_GET["userid"], $_GET["text"], $_GET["conversation"]);// TODO implement ajax data
        return new JsonResponse("success");
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
        $participants = $cm->getParticipantsConversation($conversationid);

        return $this->render('ConversationBundle:Conversation:viewConversation.html.twig', array(
            "user"              => 1, //TODO user
            "conversationid"    => $conversationid,
            "conversation"      => $conversation,
            "conversationLabel" => $conversationLabel,
            "participants"      => $participants
        ));
    }
}

