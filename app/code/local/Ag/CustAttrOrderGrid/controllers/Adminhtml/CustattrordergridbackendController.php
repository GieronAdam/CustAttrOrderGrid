<?php
class Ag_CustAttrOrderGrid_Adminhtml_CustattrordergridbackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('custattrordergrid/custattrordergridbackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("CustAttrOrderGrid"));
	   $this->renderLayout();
    }

    public function developAction()
    {
       Zend_Debug::dump('You can test here everything:)');
    }
}