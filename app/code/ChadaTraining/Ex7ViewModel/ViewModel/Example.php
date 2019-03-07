<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-06
 * Time: 14:19
 */

namespace ChadaTraining\Ex7ViewModel\ViewModel;


use Magento\Framework\View\Element\Block\ArgumentInterface;

class Example implements ArgumentInterface
{
    public function getArrayValues(){
        return ['one', 'two'];
    }

}