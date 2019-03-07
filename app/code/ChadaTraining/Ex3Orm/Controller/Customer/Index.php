<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-07
 * Time: 09:45
 */

namespace ChadaTraining\Ex3Orm\Controller\Customer;


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

    public function __construct(Context $context, RawFactory $rawFactory)
    {
        parent::__construct($context);
        $this->rawFactory = $rawFactory;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $rawResult = $this->rawFactory->create();
        $rawResult->setContents('test');
        return $rawResult;
    }


}