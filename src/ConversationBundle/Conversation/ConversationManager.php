<?php
namespace ConversationBundle\Conversation;

use ConversationBundle\Entity\Messages;

class ConversationManager
{
  protected $em;

  public function __construct ($entityManager)
  {
      $this->em = $entityManager;
  }

  // Get all conversations for one user
  public function getConversations($userid)
  {
      $conversationsManager = $this->em->getRepository('ConversationBundle:UsersConversations');
      $conversations = $conversationsManager->findBy(array("userid"=>$userid));
      return $conversations;
  }

  // Get all message for a conversation
  public function getMessages()
  {
      $messagesManager = $this->em->getRepository('ConversationBundle:Messages');
      $message = $messagesManager->findBy(array("userid"=>null));
      return $message;
  }

  // Get all new messages since last timestamp
  public function getNewMessages()
  {
      $messagesManager = $this->em->getRepository('ConversationBundle:Messages');
      $message = $messagesManager->findBy(array("userid"=>null));
      return $message;
  }

  // Add new message on a conversation for an user
  public function addMessage ($userid, $text, $conversationid)
  {
      $em = $this->em;

      $date = new \DateTime();
      $messagesManager = $em->getRepository('ConversationBundle:Messages');

      $newMessage = new Messages();
      $newMessage->setUserid($userid);
      $newMessage->setText($text);
      $newMessage->setConversationid($conversationid);
      $newMessage->setDate($date);

      $em->persist($newMessage);
      $em->flush();
      
      return json_encode(array("isSuccess"=>true));
  }

  // Create new conversation
  public function addConversation()
  {
      $messagesManager = $this->em->getRepository('ConversationBundle:Messages');
      $message = $messagesManager->findOneBy(array("userid"=>null));
      return $message;
  }
}