<?php

namespace Iyzico\Iyzipay\Block\Adminhtml\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class webhookurl
 *
 * @package Iyzico\Iyzipay\Block\Adminhtml\System\Config\Fieldset
 */
class getWebhookUrl extends Field
{

    /**
     * @param  AbstractElement $element
     * @return string
     * @throws NoSuchEntityException
     */
    protected function _getElementHtml(AbstractElement $element): string
    {

        $webhook_url_key = $this->_scopeConfig->getValue('payment/iyzipay/webhook_url_key');
        return $this->_storeManager->getStore()->getBaseUrl().'rest/V1/iyzico/webhook/'.$webhook_url_key;
    }
}
