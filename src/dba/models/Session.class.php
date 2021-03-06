<?php

/**
 * Created by IntelliJ IDEA.
 * User: sein
 * Date: 02.01.17
 * Time: 23:57
 */

namespace DBA;

class Session extends AbstractModel {
  private $sessionId;
  private $userId;
  private $sessionStartDate;
  private $lastActionDate;
  private $isOpen;
  private $sessionLifetime;
  private $sessionKey;
  
  function __construct($sessionId, $userId, $sessionStartDate, $lastActionDate, $isOpen, $sessionLifetime, $sessionKey) {
    $this->sessionId = $sessionId;
    $this->userId = $userId;
    $this->sessionStartDate = $sessionStartDate;
    $this->lastActionDate = $lastActionDate;
    $this->isOpen = $isOpen;
    $this->sessionLifetime = $sessionLifetime;
    $this->sessionKey = $sessionKey;
  }
  
  function getKeyValueDict() {
    $dict = array();
    $dict['sessionId'] = $this->sessionId;
    $dict['userId'] = $this->userId;
    $dict['sessionStartDate'] = $this->sessionStartDate;
    $dict['lastActionDate'] = $this->lastActionDate;
    $dict['isOpen'] = $this->isOpen;
    $dict['sessionLifetime'] = $this->sessionLifetime;
    $dict['sessionKey'] = $this->sessionKey;
    
    return $dict;
  }
  
  function getPrimaryKey() {
    return "sessionId";
  }
  
  function getPrimaryKeyValue() {
    return $this->sessionId;
  }
  
  function getId() {
    return $this->sessionId;
  }
  
  function setId($id) {
    $this->sessionId = $id;
  }
  
  function getUserId(){
    return $this->userId;
  }
  
  function setUserId($userId){
    $this->userId = $userId;
  }
  
  function getSessionStartDate(){
    return $this->sessionStartDate;
  }
  
  function setSessionStartDate($sessionStartDate){
    $this->sessionStartDate = $sessionStartDate;
  }
  
  function getLastActionDate(){
    return $this->lastActionDate;
  }
  
  function setLastActionDate($lastActionDate){
    $this->lastActionDate = $lastActionDate;
  }
  
  function getIsOpen(){
    return $this->isOpen;
  }
  
  function setIsOpen($isOpen){
    $this->isOpen = $isOpen;
  }
  
  function getSessionLifetime(){
    return $this->sessionLifetime;
  }
  
  function setSessionLifetime($sessionLifetime){
    $this->sessionLifetime = $sessionLifetime;
  }
  
  function getSessionKey(){
    return $this->sessionKey;
  }
  
  function setSessionKey($sessionKey){
    $this->sessionKey = $sessionKey;
  }

  const SESSION_ID = "sessionId";
  const USER_ID = "userId";
  const SESSION_START_DATE = "sessionStartDate";
  const LAST_ACTION_DATE = "lastActionDate";
  const IS_OPEN = "isOpen";
  const SESSION_LIFETIME = "sessionLifetime";
  const SESSION_KEY = "sessionKey";
}
