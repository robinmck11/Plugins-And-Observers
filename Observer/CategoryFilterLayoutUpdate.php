<?php
namespace RobinMcK\PluginsAndObservers\Observer;

use Magento\Framework\App\ResponseFactory;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\UrlInterface;
use Psr\Log\LoggerInterface;

class CategoryFilterLayoutUpdate implements ObserverInterface
{
    /** @var LoggerInterface $logger */
    private $logger;

    /** @var ResponseFactory $responseFactory */
    private $responseFactory;

    /** @var UrlInterface $urlInterface */
    private $urlInterface;

    public function __construct(LoggerInterface $logger, ResponseFactory $responseFactory, UrlInterface $urlInterface)
    {
        $this->logger = $logger;
        $this->responseFactory = $responseFactory;
        $this->urlInterface = $urlInterface;
    }

    public function execute(Observer $observer)
    {
        // Logged to var/log/debug.log
        $this->logger->debug("Category Controller Action executed.");

        // Get data from the event object!
        // $observer->getEvent()->getData();

        // Example redirect
        $redirectUrl = $this->urlInterface->getUrl('/');
        $this->responseFactory->create()->setRedirect($redirectUrl)->sendResponse();
    }
}
