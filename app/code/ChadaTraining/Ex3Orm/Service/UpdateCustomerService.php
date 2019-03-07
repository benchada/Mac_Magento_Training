<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-07
 * Time: 09:56
 */

namespace ChadaTraining\Ex3Orm\Service;


use Magento\Customer\Model\CustomerFactory ;
use Magento\Customer\Model\ResourceModel\Customer as CustomerResource;

class UpdateCustomerService
{
    /**
     * @var CustomerResource
     */
    private $CustomerResource;
    /**
     * @var CustomerFactory
     */
    private $customerFactory;

    public function __construct(
        CustomerFactory $customerFactory, CustomerResource $CustomerResource
    )
    {

        $this->CustomerResource = $CustomerResource;
        $this->customerFactory = $customerFactory;
    }

    public function updateCustomerName($id, $firstname)
{
    $customer = $this->customerFactory->create();
    $this->CustomerResource->load($customer, $id);

    $customer->setDataUsingMethod('firstname', $firstname);
    $this->CustomerResource->save($customer);

    return $customer;
}


}