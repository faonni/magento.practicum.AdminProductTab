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
class Faonni_AdminProductTab_Block_Adminhtml_Catalog_Product_Edit_Tab_My
	extends Mage_Adminhtml_Block_Template
		implements Mage_Adminhtml_Block_Widget_Tab_Interface 
{
    /**
     * Set the template for the block
     */
    public function _construct()
    {
        parent::_construct();
         
        $this->setTemplate('faonni/adminproducttab/catalog/product/edit/tab/my.phtml');
    }
     
    /**
     * Retrieve the label used for the tab relating to this block
	 *
     * @return string
     */
    public function getTabLabel()
    {
        return $this->__('My Admin Product Tab');
    }
     
    /**
     * Retrieve the title used by this tab
	 *
     * @return string
     */
    public function getTabTitle()
    {
        return $this->__('My Admin Product Tab');
    }
     
    /**
     * Determines whether to display the tab
     * Add logic here to decide whether you want the tab to display
	 *
     * @return bool
     */
    public function canShowTab()
    {
        return true;
    }
     
    /**
     * Stops the tab being hidden
	 *
     * @return bool
     */
    public function isHidden()
    {
        return false;
    }
}