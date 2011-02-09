<?php
#doc
#  classname:  ClassName
#  scope:    PUBLIC
#
#/doc

class Olko_Brands_Block_Brands extends Mage_Core_Block_Template
  {
    public function _prepareLayout()
    {
      return parent::_prepareLayout();
    }

    public function getBrands()
    {
      return 'brands will go here';
    }
  }
?>
