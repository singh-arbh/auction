<?php

namespace Arbh\Auction\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Products extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('arbh_auctioning_system', 'id');
    }
}