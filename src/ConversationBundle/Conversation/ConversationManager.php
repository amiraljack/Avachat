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
  public function getUserConversations($userid)
  {
      $usersConversationsManager = $this->em->getRepository('ConversationBundle:UsersConversations');
      $userConversations = $usersConversationsManager->findBy(array("userid"=>$userid));
      return $userConversations;
  }

  // Get all message for a conversation
  public function getMessages($conversationid)
  {
      $messagesManager = $this->em->getRepository('ConversationBundle:Messages');
      $messages = $messagesManager->findBy(array("conversationid"=>$conversationid));
      
      return $messages;
  }

  // Get conversation label for an user
  public function getLabelConversation ($conversationid, $userid)
  {
      $usersConversationsManager = $this->em->getRepository('ConversationBundle:UsersConversations');
      $userConversations = $usersConversationsManager->findOneBy(array("conversationid"=>$conversationid, "userid"=>$userid));

      return $userConversations->getLabelConversation();
  }

  // Get conversation label for an user
  public function getParticipantsConversation ($conversationid)
  {
      $usersConversationsManager = $this->em->getRepository('ConversationBundle:UsersConversations');
      $usersManager = $this->em->getRepository('UserBundle:Users');

      $usersConversations = $usersConversationsManager->findBy(array("conversationid"=>$conversationid));

      $list = array();
      foreach ($usersConversations as $participant)
      {
          $list[] = $usersManager->findOneBy(array("userid" =>$participant->getUserid()))->getUsername();
      }

      return $list;
  }

  // Get all new messages since last timestamp
  public function getNewMessages ()
  {
      /*
      $messagesManager = $this->em->getRepository('ConversationBundle:Messages');
      $message = $messagesManager->findBy(array("userid"=>null));
      return $message;
      */
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

      return true;
  }

  // Create new conversation
  public function addConversation()
  {
      /*
      $messagesManager = $this->em->getRepository('ConversationBundle:Messages');
      $message = $messagesManager->findOneBy(array("userid"=>null));
      return $message;
      */
  }
}