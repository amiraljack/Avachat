<?php
namespace ConversationBundle\Conversation;

class ConversationManager
{
  protected $em;

  public function __construct ($entityManager)
  {
      $this->em = $entityManager;
  }

  public function getConversations($userid)
  {
      $conversationsManager = $this->em->getRepository('ConversationBundle:UsersConversations');
      $conversations = $conversationsManager->findBy(array("userid"=>$userid));
      return $conversations;
  }
  public function getMessages()
  {
      $messagesManager = $this->em->getRepository('ConversationBundle:Messages');
      $message = $messagesManager->findOneBy(array("userid"=>null));
      return $message;
  }
}