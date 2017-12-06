<?php

class Polyweb_Oppc_Block_Oppc_BillingShipping extends Mage_Checkout_Block_Onepage_Billing
{
    public function isUseBillingAddressForShipping()
    {
        return true;
    }
}
