<?php

  #doc
  #  classname:  Olko_Helloworld_Model_Helloworld
  #  scope:    PUBLIC
  #
  #/doc
  
  class Olko_Helloworld_Model_Helloworld extends Mage_Core_Model_Abstract
  {
    public function _construct()
    {
      parent::_construct();
      $this->_init('helloworld/helloworld');
    }
  }
  ###

?>
