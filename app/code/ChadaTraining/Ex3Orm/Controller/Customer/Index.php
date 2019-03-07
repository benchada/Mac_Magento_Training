<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-07
 * Time: 09:45
 */

namespace ChadaTraining\Ex3Orm\Controller\Customer;


use ChadaTraining\Ex3Orm\Service\UpdateCustomerService;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\RawFactory;

class Index extends Action
{
    /**
     * @var RawFactory
     */
    private $rawFactory;
    /**
     * @var UpdateCustomerService
     */
    private $updateCustomerService;

    public function __construct(Context $context, RawFactory $rawFactory, UpdateCustomerService $updateCustomerService)
    {
        parent::__construct($context);
        $this->rawFactory = $rawFactory;
        $this->updateCustomerService = $updateCustomerService;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $rawResult = $this->rawFactory->create();
        $rawResult->setContents('test');

        $firstname = $this->getRequest()->getParam('firstname'); // http request URL, from the browser
        $customerID = 1;


        $rawResult->setContents('No Firstname provided');

        if ($firstname)
        {
            $customer = $this->updateCustomerService->updateCustomerName($customerID, $firstname);
            $rawResult->setContents('customer has been updated: '. $customer->getDataUsingMethod('firstname'));

        }


        return $rawResult;
    }


}