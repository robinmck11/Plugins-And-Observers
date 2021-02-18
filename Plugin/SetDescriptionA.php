<?php
namespace RobinMcK\PluginsAndObservers\Plugin;

use Psr\Log\LoggerInterface;
use RobinMcK\PluginsAndObservers\Block\StaffPick;

class SetDescriptionA
{
    /** @var LoggerInterface $logger */
    public $logger;

    public function __construct(LoggerInterface $looger)
    {
        $this->logger = $looger;
    }

    public function beforeGetStaffName(StaffPick $subject, $prefix = null)
    {
        $this->logger->debug('Plugin A before Called');

        return ['Hand Picked By: ' . $prefix];
    }

//    public function afterGetStaffName(StaffPick $subject)
//    {
//        $this->logger->debug('Plugin A after Called');
//    }
}
