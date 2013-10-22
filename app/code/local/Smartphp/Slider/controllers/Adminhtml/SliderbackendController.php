<?php
class Smartphp_Slider_Adminhtml_SliderbackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Slider configuration"));
	   $this->renderLayout();
    }
}