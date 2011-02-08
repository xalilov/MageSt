<?php

  #doc
  #  classname:  Olko_Helloworld_IndexControler
  #  scope:    PUBLIC
  #
  #/doc
  
  class Olko_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
  {
    #  internal variables
    public function indexAction()
    {
      echo 'Hello Index';
#      $this->loadLayout();
#      $this->renderLayout();
    }
    
#    public function goodvyeAction()
#    {
#      echo 'Another good bye';
#    }
#    
#    public function paramsAction() {
#      echo '<dl>';            
#      foreach($this->getRequest()->getParams() as $key=>$value) {
#          echo '<dt><strong>Param: </strong>'.$key.'</dt>';
#          echo '<dt><strong>Value: </strong>'.$value.'</dt>';
#      }
#      echo '</dl>';
#    }
  }
?>
