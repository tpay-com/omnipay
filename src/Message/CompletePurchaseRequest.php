<?php

namespace Omnipay\Tpay\Message;

use Tpay\OriginApi\Notifications\CardNotificationHandler;

/**
 * Tpay Complete Purchase Request
 */
class CompletePurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('amount', 'currency');
        $tpayHandler = new CardNotificationHandler();

        $tpayHandler->setAmount((float) $this->getAmount());
        $tpayHandler->setCurrency($this->getCurrencyNumeric());
        if (!is_null($this->getOrderId())) {
            $tpayHandler->setOrderID($this->getOrderId());
        }

        $tpayResources = $tpayHandler->handleNotification();

        $tpayHandler->validateCardSign(
            $tpayResources['sign'],
            $tpayResources['sale_auth'],
            $tpayResources['card'],
            $tpayResources['date'],
            'correct',
            isset($tpayResources['test_mode'])
                ? $tpayResources['test_mode'] : ''
        );

        return $tpayResources;
    }
}
