<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-05
 * Time: 13:38
 */

namespace ChadaTraining\ResultsObject\Controller\Action;


use Magento\Framework\App\Action\Context;

class Redirect extends \Magento\Framework\App\Action\Redirect
{
    /**
     * @var \Magento\Framework\Controller\Result\Redirect
     */
    private $redirect;
    /**
     * @var \Magento\Framework\Controller\Result\RedirectFactory
     */
    private $redirectFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory)
    {
        parent::__construct($context);

        $this->redirectFactory = $redirectFactory;
    }

    public function execute()
    {

        return $this->redirectFactory->create()->setPath('*/*/raw');
    }


}