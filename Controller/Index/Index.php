<?php
declare(strict_types=1); 
namespace Dev\Grid\Controller\Index;

use \Magento\Framework\App\ActionInterface;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\App\ResponseInterface;
use \Magento\Framework\View\Page;
use \Magento\Framework\App\Action\Context;
class Index implements ActionInterface
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $PageFactory;

    /**
     * @param PageFactory $resultPageFactory
     */
    public function __construct(PageFactory $PageFactory) {

        $this->PageFactory = $PageFactory;
        
    }

    /**
     * Prints the information 
     * @return Page
     */
    public function execute()
    {
        $resultpage = $this->PageFactory->create();
         
         return $resultpage;
    }
}