<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-05
 * Time: 10:12
 */

namespace ChadaTraining\RoutersList\App;


use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RouterListInterface;
use Psr\Log\LoggerInterface;

class FrontController extends \Magento\Framework\App\FrontController

{
    /**
     * @var LoggerInterface
     */
    private $logger;

    //this is to access the logger, and we create it as a parameter in the construction list
    public function __construct(
        RouterListInterface $routerList,
        ResponseInterface $response,
        LoggerInterface $logger)
    {
        parent::__construct($routerList, $response);
        $this->logger = $logger;
    }

    //This function to access the object
    public function dispatch(RequestInterface $request)
    {
        foreach ( $this->_routerList as $router)
        {
            $this->logger->info( 'Router: '.get_class($router));
        }
        return parent::dispatch($request); // TODO: Change the autogenerated stub
    }
}