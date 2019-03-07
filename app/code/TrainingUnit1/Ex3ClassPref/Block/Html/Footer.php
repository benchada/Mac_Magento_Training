<?php

namespace TrainingUnit1\Ex3ClassPref\Block\Html;

class Footer extends \Magento\Theme\Block\Html\Footer
{
    public function getCopyright()
    {
        return parent::getCopyright() . " ".__("Hello World");
    }

}
