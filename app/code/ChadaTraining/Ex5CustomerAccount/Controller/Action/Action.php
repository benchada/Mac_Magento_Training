<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-06
 * Time: 11:45
 */

namespace ChadaTraining\Ex5CustomerAccount\Controller\Action;


use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;

class Action extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        // TODO: Implement execute() method.

        $pageResult = $this->pageFactory->create();
        return $pageResult;


    }


}