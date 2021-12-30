<?php
namespace Arbh\Auction\Model\ResourceModel\Products;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'arbh_auctioningsystem_product_collection';
    protected $_eventObject = 'product_collection';

    /**
     * Define resource model
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Arbh\Auction\Model\Products', 'Arbh\Auction\Model\ResourceModel\Products');
    }
}