<?php

namespace TrainingUnit1\Ex4Plugin\Plugin;

use Magento\Framework\App\Action\Action;
use Psr\Log\LoggerInterface;

class LogDispatch
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function afterDispatch(Action $subject, $result){
        $fullActionName = $subject->getRequest()->getFullActionName();

        $this->logger->info('Plugin:'.$fullActionName);

        return $result;
    }

}
