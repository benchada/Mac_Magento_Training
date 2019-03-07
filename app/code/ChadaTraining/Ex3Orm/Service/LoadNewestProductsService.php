<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-07
 * Time: 11:04
 */

namespace ChadaTraining\Ex3Orm\Service;


use Magento\Catalog\Model\Product;

class LoadNewestProductsService
{
    /**
     * @var \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory
     */
    private $productCollectionFactory;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory)
    {
        $this->productCollectionFactory = $productCollectionFactory;
    }

    public function load ( $numberOfProductsToLoad = 100)
    {
        $productCollection = $this->productCollectionFactory->create();
        $productCollection->addOrder( 'created_at', 'DESC');
        $productCollection->addAttributeToSelect('name');
        $productCollection->setPageSize($numberOfProductsToLoad);
        $productCollection->setCurPage(0);

        $products = $productCollection->getItems();

        usort($products, function (Product $productA , Product $productB){
           return strcmp($productA->getName(), $productB->getName());
        });

        return $products;
    }


}