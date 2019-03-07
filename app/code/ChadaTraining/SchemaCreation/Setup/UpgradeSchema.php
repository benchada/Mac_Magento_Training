<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-06
 * Time: 17:01
 */

namespace ChadaTraining\SchemaCreation\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement upgrade() method.
        if ( version_compare($context->getVersion(), '1.1.0', '<')){
            $tableName = $setup->getTable('pets');
            $setup->getConnection()->addColumn(
                $tableName,
                'pet_type',
                [
                    'type'=> Table::TYPE_TEXT,
                    'length' => 100,
                    'nullable' => false,
                    'after'=> 'pet_name',
                    'comment' => 'It is the ype of the pet',
                    'default' => 'Cat'
                ]
            );
        }
    }

}