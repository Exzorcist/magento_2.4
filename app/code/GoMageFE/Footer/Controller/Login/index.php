<?php

namespace GoMageFE\Footer\Controller\Login;
class Index extends \Magento\Framework\App\Action\Action

{
   protected $helperData;
   public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \GoMageFE\Footer\Helper\Data $helperData
   ) {
       $this->helperData = $helperData;
       return parent::__construct($context);
   }

   public function execute() {
       // TODO: Implement execute() method.
       $CheckEnable=$this->helperData->getFieldConfig('enable');
      // You can check value of result by printing $CheckEnable value
   }
}