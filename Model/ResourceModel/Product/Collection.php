<?php
/**
 * @category Mdbhojwani
 * @package Mdbhojwani_WishlistAnalytics
 * @author Manish Bhojwani <manishbhojwani3@gmail.com>
 * @github https://github.com/mdbhojwani
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
declare(strict_types = 1);

namespace Mdbhojwani\WishlistAnalytics\Model\ResourceModel\Product;

class Collection extends \Magento\Catalog\Model\ResourceModel\Product\Collection
{
    /**#@+
     * Tables to join
     */
    const TABLE_STOCK_ITEM = 'cataloginventory_stock_item';

    const TABLE_WISHLIST_ITEM = 'wishlist_item';
    /**#@-*/

    /**
     * @return Collection
     */
    public function getCollectionWithJoins()
    {
        $this
            ->addAttributeToSelect('name')
            ->addAttributeToSelect('thumbnail')
            ->joinField(
                'qtyStock',
                $this->getTable(self::TABLE_STOCK_ITEM),
                'qty',
                'product_id=entity_id',
                '{{table}}.stock_id=1',
                'left'
            )->joinField(
                'wi',
                $this->getTable(self::TABLE_WISHLIST_ITEM),
                'product_id',
                'product_id=entity_id'
            );

        $this->getSelect()->columns('count(*) as count')->group('at_wi.product_id');

        return $this->load();
    }
}
