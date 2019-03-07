<?php
/**
 * Created by PhpStorm.
 * User: chadaelislamm.benmahcene
 * Date: 2019-03-06
 * Time: 16:05
 */

namespace ChadaTraining\SchemaCreation\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement install() method.
        //$setup->startSetup(); not recommendedn unless you are importing

        $tableName = $setup->getTable('pets');

        $table = $setup->getConnection()->newTable($tableName);
        $table->addColumn('pet_id', Table::TYPE_INTEGER, NULL, [
            'primary'=> true,
            'auto_increment'=> true,
            'unsigned' => true,
            'nullable' => false


            ]);
        $table->addColumn( 'customer_id', Table::TYPE_INTEGER, NULL, [
            'unsigned' => true, 'nullable' => false
        ]);
        $table->addColumn('pet_name', Table::TYPE_TEXT , 255, [
            'nullable' => true,
            'default' =>''
        ]);

        $table->addColumn('created_at', Table::TYPE_TIMESTAMP, NULL, [
            'nullable'=> false, 'default'=> Table::TIMESTAMP_INIT
            ]);

        $table->addColumn('updated_at', Table::TYPE_TIMESTAMP, NULL, [
            'nullable'=> false, 'default'=> Table::TIMESTAMP_INIT_UPDATE
        ] );

        $customerTableName = $setup->getTable('customer_entity');

        $fkName = $setup->getFkName(
            $tableName,
            'customer_id',
            $customerTableName,
            $setup->getTable('customer_entity'),
            'entity_id'
        );
        $table->addForeignKey(
            $fkName, 'customer_id',
            $customerTableName, 'entity_id', Table::ACTION_CASCADE
        );

        $setup->getConnection()->createTable($table);

        //$setup->endSetup(); recomended by Magento, not recomended by Rico



    }

}