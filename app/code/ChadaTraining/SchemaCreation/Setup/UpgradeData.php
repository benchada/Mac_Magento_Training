<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-06
 * Time: 17:16
 */

namespace ChadaTraining\SchemaCreation\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement upgrade() method.
        if (version_compare($context->getVersion(), '1.1.1','<')){
            $tableName = $setup->getTable('pets');
            $data = [
                [ 'customer_id' => 1, 'pet_name' => 'Fiko', 'pet_type'=> 'Cat'],
                [ 'customer_id' => 1, 'pet_name' => 'Rayla', 'pet_type'=> 'Dog'],
            ];
            $setup->getConnection()->insertMultiple($tableName, $data);
        }
    }

}