<?php


namespace Dev\Grid\Controller\Adminhtml\Index;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;


class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);  
        $this->resultPageFactory = $resultPageFactory;
       
    }
          protected function _isAllowed()
          {
      return $this->_authorization->isAllowed('Dev_Grid::dev_grid');
          }
    /**
     * Add the main Admin Grid page
     *
     * @return Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Admin Grid Tutorial Example'));
        return $resultPage;
    }
}