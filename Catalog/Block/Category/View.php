<?php
   /**
   * Category view class
   */
  class Olko_Catalog_Block_Category_View extends Mage_Catalog_Block_Category_View
  {
    public function getFeaturedProductHTML()
    {
      return $this->getBlockHtml('product_featured');
    }
  }
   
?>