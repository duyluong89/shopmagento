<?php
class Mage_Catalog_Block_Category_Custom extends Mage_Core_Block_Template{

	public function createSidebar($category_id = 3){
		$subCategory = Mage::getModel('catalog/category')->load($category_id)->getChildren();
		$arr = explode(',', $subCategory);
		$arrData = array();
		foreach ($arr as $key =>$categoryId){
			$category = Mage::getModel('catalog/category')->load($categoryId);
			$products = $this->getProductByCategory($category);
			$arrtmp = array(
					'category'=>$category,
					'products'=>$products
					
			);
			$arrData[] = $arrtmp;
		}
		return $arrData;
	}
	
	public function getProductByCategory($category, $limitProduct = 15){
		$collection = Mage::getResourceModel('catalog/product_collection');
        $collection->addCategoryFilter($category); //category filter
        $collection->addAttributeToFilter('status',1); 
        $collection->addStoreFilter();
		
		return $collection;
	}
}