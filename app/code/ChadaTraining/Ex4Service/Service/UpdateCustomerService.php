<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-07
 * Time: 13:34
 */

namespace ChadaTraining\Ex4Service\Service;


use ChadaTraining\Ex4Service\Api\UpdateCustomerServiceInterface;
use Magento\Customer\Api\CustomerRepositoryInterface;

class UpdateCustomerService implements UpdateCustomerServiceInterface
{
    /**
     * @var CustomerRepositoryInterface
     */
    private $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {

        $this->customerRepository = $customerRepository;
    }


    public function updateCustomerName($email, $firstname)
    {
        // TODO: Implement updateCustomerName() method.
        //working with the customer repository interface and inject it , instead of the service class directly

        $customer = $this->customerRepository->get($email);

        $customer ->setFirstname($firstname);

        return $this->customerRepository->save($customer);

    }

}