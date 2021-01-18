<?php

namespace GoMageFE\Footer\Helper;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 * @package GoMageFE\Footer\Helper
 */

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const XML_PATH_FIELD = 'aureatelabs/general/';

    public function getConfigValue($field, $storeId = null) {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    public function getFieldConfig($code, $storeId = null) {
        return $this->getConfigValue(self::XML_PATH_FIELD.$code, $storeId);
    }
}
