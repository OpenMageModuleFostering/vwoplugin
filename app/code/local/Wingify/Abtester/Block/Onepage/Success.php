<?php
/**
* 
*/
class Wingify_Abtester_Block_Onepage_Success extends Mage_Checkout_Block_Onepage_Success
{
	public function getOrder()
	{
		$sOrderId = Mage::getSingleton('checkout/session')->getLastRealOrderId();
		$oOrder = Mage::getModel('sales/order')->loadByIncrementId($sOrderId);		
		return $oOrder;		
	}

    public function getTotalRevenue()
    {
		return $this->getOrder()->getGrandTotal();
    }

    public function getTotalWithoutShipping(){
    	$order = $this->getOrder();
		$total = $order->getGrandTotal() - $order->getShippingAmount();
		return $total;
    }

    public function getTotalWithoutShippingTax()
    {
    	$order = $this->getOrder();
		$total = $order->getGrandTotal() - $order->getShippingAmount() - $order->getTaxAmount();
		return $total;

    }
}