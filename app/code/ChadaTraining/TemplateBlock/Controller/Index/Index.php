<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-05
 * Time: 16:07
 */

namespace ChadaTraining\TemplateBlock\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\View\LayoutInterface;

class index extends Action
{
    /**
     * @var RawFactory
     */
    private $rawFactory;
    /**
     * @var LayoutInterface
     */
    private $layout;

    public function __construct(Context $context, RawFactory $rawFactory, LayoutInterface $layout)
    {
        parent::__construct($context);
        $this->rawFactory = $rawFactory;
        $this->layout = $layout;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $block = $this->layout->createBlock( \Magento\Framework\View\Element\Template::class, 'templateblock_thisistestblock');
        $block->setTemplate ('ChadaTraining_TemplateBlock::block.phtml');

        $content = $block->toHtml();
        $rawResult = $this->rawFactory->create();

        $rawResult->setContents($content);

        return $rawResult;
    }


}