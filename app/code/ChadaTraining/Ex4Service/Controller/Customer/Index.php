<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-07
 * Time: 13:27
 */

namespace ChadaTraining\Ex4Service\Controller\Customer;


use ChadaTraining\Ex4Service\Api\UpdateCustomerServiceInterface;
use ChadaTraining\Ex4Service\Service\UpdateCustomerService;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /**
     * @var JsonFactory
     */
    private $jsonFactory;
    /**
     * @var UpdateCustomerServiceInterface
     */
    private $updateCustomerService;

    public function __construct(Context $context, JsonFactory $jsonFactory, UpdateCustomerServiceInterface $updateCustomerService)
    {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
        $this->updateCustomerService = $updateCustomerService;
    }

    public function execute()
    {
        // TODO: Implement execute() method.

        $jsonResult = $this->jsonFactory->create();

        $firstName = $this->getRequest()->getParam('firstname');

        $jsonResult->setData(['error'=> 'first name parameter missing']);

        if ($firstName) {
            $customer = $this->updateCustomerService->updateCustomerName ('chada@example.com', $firstName);
            $jsonResult->setData($customer);
            //$jsonResult->setData(['updated'=> $customer->getFirstname()]);
        }

        return$jsonResult;
    }


}