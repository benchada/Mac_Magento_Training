<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-05
 * Time: 13:22
 */

namespace ChadaTraining\ResultsObject\Controller\Action;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Json extends Action
{
    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    private $jsonFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $this->jsonFactory->create()->setData([ "This is the json data format"]);
        return $this->jsonFactory->create()->setJsonData("this is from the setjson data class");
    }


}