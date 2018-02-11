<?php

class Ag_CustAttrOrderGrid_Adminhtml_Block_Sales_Order_Grid extends Mage_Adminhtml_Block_Sales_Order_Grid
{
    private $attributes = array();

    public function __construct()
    {
        parent::__construct();
        $attr_names = Mage::getStoreConfig('custattrordergrid/customattributes/attrcode');
        $row_array= explode(',',$attr_names);
        foreach($row_array as $row){
            $rows = explode(':',$row);
            $this->attributes[$rows[0]] = $rows[1];
        }
        return $this->attributes;
    }

    protected function _prepareCollection()
    {

        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $select = $collection->getSelect();
        foreach($this->attributes as $key => $value){
            $select->joinLeft(array
            (
                $key => Mage::getModel('core/resource')->getTableName('sales/order')),
                $key.'entity_id=main_table.entity_id',
                array($key => $key)
            );
            $collection->addFilterToMap($key, 'main_table.entity_id');
        }
        $this->setCollection($collection);
        return parent::_prepareCollection();

    }

    protected function _prepareColumns()
    {
        foreach ($this->attributes as $key => $value){
            $this->addColumnAfter($key, array(
                'header' => $value,
                'index' => $key,
                'width' => '50px',
                'type' => 'text',
            ), 'entity_id');
        }
        return parent::_prepareColumns();
    }
}