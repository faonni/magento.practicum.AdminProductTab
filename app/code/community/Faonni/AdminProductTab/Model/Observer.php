<?php
/**
 * Faonni Group
 *  
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade module to newer
 * versions in the future.
 * 
 * @package     Faonni_AdminProductTab
 * @copyright   Copyright (c) 2014 Faonni Group(support@faonni.com) 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */ 
class Faonni_AdminProductTab_Model_Observer
{
    /**
     * This method will run when the product is saved from the Magento Admin
	 *
     * @param Varien_Event_Observer $observer
     */
    public function saveProduct(Varien_Event_Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        $request = $observer->getEvent()->getRequest(); 
		try{
			$myField = $request->getPost('my_field');
			/**
			 * Perform any actions you want here
			*/
			$product->save();
			
		}catch(Exception $e){
			Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
		}
    }
}