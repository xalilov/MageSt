<?php
// class Olko_Catalog_Block_Product_Featured extends Mage_Catalog_Block_Product_Abstract
// {
//   protected $_limit = 1;
// 
//   public function getFeaturedProducts()
//   {
//     $productCollection = Mage::registry('current_category')->getProductCollection();
//     Mage::getModel('catalog/layer')->prepareProductCollection($productCollection);
// 
//     $productCollection->addAttributeToFilter('featured', true)
//                       ->setPageSize($this->_limit)
//                       ->load();
// 
//     return $productCollection;
//   }
// 
//   public function setLimit($limit = null)
//   {
//     if (intval($limit) > 0) $this->_limit = intval($limit);
//   }
// }
class Olko_Catalog_Block_Product_Featured extends Mage_Catalog_Block_Product_Abstract
    {
        public function getFeaturedProduct()
        {
            // instantiate database connection object
            $storeId = Mage::app()->getStore()->getId();   
            $categoryId = $this->getRequest()->getParam('id', false);
            $resource = Mage::getSingleton('core/resource');
            $read = $resource->getConnection('catalog_read');
            $categoryProductTable = $resource->getTableName('catalog/category_product');
            //$productEntityIntTable = $resource->getTableName('catalog/product_entity_int'); // doesn't work :(

            $productEntityIntTable = (string)Mage::getConfig()->getTablePrefix() . 'catalog_product_entity_int';
            $eavAttributeTable = $resource->getTableName('eav/attribute');
            // Query database for featured product
            if ($categoryId){
            $select = $read->select()
                           ->from(array('cp'=>$categoryProductTable))
                           ->join(array('pei'=>$productEntityIntTable), 'pei.entity_id=cp.product_id', array())
                           ->joinNatural(array('ea'=>$eavAttributeTable))
                           ->where('cp.category_id=?', $categoryId)
                           ->where('pei.value=1')
                           ->where('ea.attribute_code="featured"');}
              else {
             
                $select = $read->select()
                           ->from(array('cp'=>$categoryProductTable))
                           ->join(array('pei'=>$productEntityIntTable), 'pei.entity_id=cp.product_id', array())
                           ->joinNatural(array('ea'=>$eavAttributeTable))
                           ->where('pei.value=1')
                           ->where('ea.attribute_code="featured"');
              }
           
           $featuredProductData = $read->fetchAll($select);
           $i=0;
           $product=array();
           $productid=array();
           foreach ($featuredProductData as $row) {
     
              // instantiate the product object
              //$productid[$i] = Mage::getModel('catalog/product')->load($row['product_id']);
              $productid[$i] = $row['product_id'];
         
              // if the product is a featured product, return the object
              // if ($product->getData('featured')) {

              //}
              $i++;
          }
          $productid=array_unique($productid);
          $i=0;
          foreach($productid as $id){
              $product[$i] = Mage::getModel('catalog/product')->load($id);
              $i++;
          }
          return $product;
      }
}
?>