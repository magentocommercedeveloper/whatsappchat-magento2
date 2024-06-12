<?php
namespace Ssquare\Whatsapp\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Config\ScopeConfigInterface;

class WhatsAppChat extends Template
{
    protected $scopeConfig;

    public function __construct(
        Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getReceiverNumber()
    {
        return $this->scopeConfig->getValue('whatsapp_chat/settings/receiver_number', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getReceiverMessage()
    {
        return $this->scopeConfig->getValue('whatsapp_chat/settings/receiver_message', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
