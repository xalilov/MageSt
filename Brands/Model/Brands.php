<?php

  #doc
  #  classname:  Olko_Helloworld_Model_Helloworld
  #  scope:    PUBLIC
  #
  #/doc
  
  class Olko_Brands_Model_Brands extends Mage_Core_Model_Abstract
  {
    public function _construct()
    {
      parent::_construct();
      $this->_init('brands/brands');
    }
  }
?>
