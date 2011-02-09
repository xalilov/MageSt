<?php

  class Olko_Brands_Model_Mysql4_Brands_Collections extends Mage_Core_Model_Mysql4_Collection_Abstract
  {
    public function _construct()
    {
      $this->_init('brands/brands');
    }
  }

?>
