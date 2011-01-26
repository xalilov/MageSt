<?php
/**
 * Product_View_Case
 *
 * @package default
 * @author oLko
 */
class Product_View_Case extends Mage_Catalog_Block_Product_View_Type_Simple
{

  //getCaseCount()
  /**
   * undocumented function
   *
   * @return void
   * @author oLko
   */
  function getCaseCount(){
    $product = $this->getProduct();
    return intval($product->getCaseCount());
  }


  //hasCaseCount()
  /**
   * undocumented function
   *
   * @return void
   * @author oLko
   */
  function hasCaseCount(){
    $product = $this->getProduct();
    return $product->getCaseCount() > 1;
  }
  
  //getMaxQty()
  /**
   * undocumented function
   *
   * @return void
   * @author oLko
   */
  function getMaximumQty(){
    $product = $this->getProduct();
    $stock = $product->getStockItem();
    return $stock->getMaxSaleQty();
  }
}    
?>