<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-07
 * Time: 13:31
 */

namespace ChadaTraining\Ex4Service\Api;


interface UpdateCustomerServiceInterface
{
    /**
     * @param $email
     * @param $firstname
     * @return \Magento\Customer\Api\Data\CustomerInterface
     */
    public function updateCustomerName($email, $firstname);

}