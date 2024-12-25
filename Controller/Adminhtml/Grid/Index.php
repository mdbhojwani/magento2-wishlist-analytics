<?php
/**
 * @category Mdbhojwani
 * @package Mdbhojwani_WishlistAnalytics
 * @author Manish Bhojwani <manishbhojwani3@gmail.com>
 * @github https://github.com/mdbhojwani
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
declare(strict_types = 1);

namespace Mdbhojwani\WishlistAnalytics\Controller\Adminhtml\Grid;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    /**
     * Resource name for Mdbhojwani_WishlistAnalytics
     */
    const RESOURCE_NAME = 'Mdbhojwani_WishlistAnalytics::wishlist_analytics';

    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $resultPage->setActiveMenu(self::RESOURCE_NAME);
        $resultPage->getConfig()->getTitle()->prepend(__('Popular items in wishlists'));

        return $resultPage;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return parent::_isAllowed() && $this->_authorization->isAllowed(self::RESOURCE_NAME);
    }
}
