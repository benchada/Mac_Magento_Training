<?php

namespace TrainingUnit1\Ex5Observer\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogDispatch implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {

        $request        = $observer->getRequest();
        $fullActionName = $request->getFullActionName();

        $this->logger->info('Observer: ' . $fullActionName);

    }

}
