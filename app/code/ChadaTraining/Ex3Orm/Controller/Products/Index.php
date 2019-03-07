<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-07
 * Time: 11:01
 */

namespace ChadaTraining\Ex3Orm\Controller\Products;


use ChadaTraining\Ex3Orm\Service\LoadNewestProductsService;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Index extends Action
{
    /**
     * @var JsonFactory
     */
    private $jsonFactory;
    /**
     * @var LoadNewestProductsService
     */
    private $loadNewestProductsService;

    public function __construct(Context $context, JsonFactory $jsonFactory, LoadNewestProductsService $loadNewestProductsService)
    {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
        $this->loadNewestProductsService = $loadNewestProductsService;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $jsonResult = $this->jsonFactory->create();
        $newestProducts = $this->loadNewestProductsService->load();
        $resultArray = [];

        foreach ($newestProducts as $product)
        {
            $resultArray[] =$product->getDataUsingMethod('name');
        }

        $jsonResult->setData($resultArray);

        return $jsonResult;
    }


}