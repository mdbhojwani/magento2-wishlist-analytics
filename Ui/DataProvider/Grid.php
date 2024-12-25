<?php
/**
 * @category Mdbhojwani
 * @package Mdbhojwani_WishlistAnalytics
 * @author Manish Bhojwani <manishbhojwani3@gmail.com>
 * @github https://github.com/mdbhojwani
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
declare(strict_types = 1);

namespace Mdbhojwani\WishlistAnalytics\Ui\DataProvider;

use Mdbhojwani\WishlistAnalytics\Model\ResourceModel\Product\Collection;
use Mdbhojwani\WishlistAnalytics\Model\ResourceModel\Product\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

class Grid extends AbstractDataProvider
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return array
     */
    public function getData()
    {
        $arrItems = [];
        $arrItems['totalRecords'] = $this->getCollection()->getSize();
        $arrItems['items'] = [];

        /** @var \Magento\Catalog\Model\Product $item */
        foreach ($this->getCollection() as $item) {
            $arrItems['items'][] = $item->toArray();
        }

        return $arrItems;
    }

    /**
     * @return Collection
     */
    public function getCollection()
    {
        if (!$this->collection) {
            /** @var Collection $collection */
            $collection = $this->collectionFactory->create();
            $this->collection = $collection->getCollectionWithJoins();
        }

        return $this->collection;
    }
}
