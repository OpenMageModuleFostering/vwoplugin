<?php
/**
* 
*/
class Wingify_Abtester_Block_Multishipping_Success extends Mage_Checkout_Block_Multishipping_Success
{
    public function getTotalRevenue()
    {
		$total = 0;
		$_orderIds = $this->getOrderIds();
		foreach ($_orderIds as $id=>$incrementId) {
    		$order = Mage::getModel('sales/order')->loadByIncrementId($incrementId);
    		$total += $order->getGrandTotal();
		}

		return $total;
    }

    public function getTotalWithoutShipping()
    {
		$total = 0;
		$_orderIds = $this->getOrderIds();
		foreach ($_orderIds as $id=>$incrementId) {
    		$order = Mage::getModel('sales/order')->loadByIncrementId($incrementId);
    		$total += $order->getGrandTotal() - $order->getShippingAmount();
		}

		return $total;
    }

    public function getTotalWithoutShippingTax()
    {
		$total = 0;
		$_orderIds = $this->getOrderIds();
		foreach ($_orderIds as $id=>$incrementId) {
    		$order = Mage::getModel('sales/order')->loadByIncrementId($incrementId);
    		$total += $order->getGrandTotal() - $order->getShippingAmount() - $order->getTaxAmount() ;
		}

		return $total;
    } 
}