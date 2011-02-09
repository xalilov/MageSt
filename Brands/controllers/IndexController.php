<?php

  #doc
  #  classname:  Olko_Helloworld_IndexControler
  #  scope:    PUBLIC
  #
  #/doc
  
  class Olko_Brands_IndexController extends Mage_Core_Controller_Front_Action
  {
    #  internal variables
    public function indexAction()
    {
#      echo 'Hello Index';
      $brand_id = $this->getRequest()->getParam('id');
      if ($brand_id != NULL && $brand_id != '') {
        $brands = Mage::getModel('brands/brands')->load($brand_id)->getData();
      } else {
        $brands = NULL;
      }
      
      if($brands == NULL) {
        $resource = Mage::getSingleton('core/resource');
        $read= $resource->getConnection('core_read');
        $brandsTable = $resource->getTableName('brands');
        $select = $read->select()->from($brandsTable,
          array('brands_id','brand_description','brand_location','status'))
          ->where('status', 1)
          ->order('created_time DESC');
        $brands = $read->fetchRow($select);
      }
      
      Mage::register('brands', $brands);
      $this->loadLayout();
      $this->renderLayout();
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
