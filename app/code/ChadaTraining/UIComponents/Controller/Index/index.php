<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-05
 * Time: 15:04
 */

namespace ChadaTraining\UIComponents\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
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
        /** @var \Magento\Framework\View\Element\Text $block */
        // TODO: Implement execute() method.
        $block = $this->layout->createBlock(\Magento\Framework\View\Element\Text::class, 'training_textblock');

        $block->addText('Hellow World Chada!');

        //This is now to render the block
        $content = $block->toHtml();

        $rawResult = $this->rawFactory->create();
        $rawResult->setContents($content);

        return $rawResult;

    }

}