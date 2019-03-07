<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-05
 * Time: 13:49
 */

namespace ChadaTraining\ResultsObject\Controller\Action;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Forward extends Action
{
    /**
     * @var \Magento\Framework\Controller\Result\ForwardFactory
     */
    private $forwardFactory;

    public function __construct(Context $context, \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory)
    {
        parent::__construct($context);
        $this->forwardFactory = $forwardFactory;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $forwardResult = $this->forwardFactory->create();
        $forwardResult->forward('json');

        return $forwardResult;
    }


}