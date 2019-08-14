<?php

/**
 * Class DigitalPianism_ReviewCaptcha_Block_Form
 */
class DigitalPianism_ReviewCaptcha_Block_Form extends Mage_Review_Block_Form
{

    /**
     * @return string
     */
    public function getAction()
    {
        $productId = Mage::app()->getRequest()->getParam('id', false);
        return Mage::getUrl('reviewcaptcha/index/post', array('id' => $productId));
    }
	
}