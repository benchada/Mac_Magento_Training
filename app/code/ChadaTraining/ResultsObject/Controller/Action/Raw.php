<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-05
 * Time: 12:07
 */

namespace ChadaTraining\ResultsObject\Controller\Action;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Raw extends Action
{
    /**
     * @var \Magento\Framework\Controller\Result\RawFactory
     */
    private $rawFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\Controller\Result\RawFactory $rawFactory)
    {

        parent::__construct($context);
        $this->rawFactory = $rawFactory;


    }

    public function execute()
    {
        // TODO: Implement execute() method.
        return $this->rawFactory->create()->setContents("Hello World Chada!");
    }


}