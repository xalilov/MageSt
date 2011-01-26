<?php
  Company_UserConnect_Model_Customer
  extends Mage_Customer_Model_Customer {
  function _construct()
  public function authenticate($login, $password)
  public function loadByEmail($customerEmail)
  protected function _beforeSave()
  public function changePassword($newPassword, $checkCurrent=true)
  public function setPassword($password)
  public function hashPassword($password, $salt=null)
  public function generatePassword($length=6)
  public function validatePassword($password)
  public function encryptPassword($password)
  public function decryptPassword($password)
?>