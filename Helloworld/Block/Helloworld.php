<?php
#doc
#  classname:  ClassName
#  scope:    PUBLIC
#
#/doc

class Olko_Helloworld_Block_Helloworld extends Mage_Core_Block_Template
  {
    public function _prepareLayout()
    {
      return parent::_prepareLayout();
    }

    public function getHelloworld()
    {
      return 'Hello world';
    }
  }
?>
