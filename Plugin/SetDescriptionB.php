<?php
namespace RobinMcK\PluginsAndObservers\Plugin;

use Psr\Log\LoggerInterface;
use RobinMcK\PluginsAndObservers\Block\StaffPick;

class SetDescriptionB
{
    /** @var LoggerInterface $logger */
    public $logger;

    public function __construct(LoggerInterface $looger)
    {
        $this->logger = $looger;
    }

    public function beforeGetStaffName(StaffPick $subject, $prefix = null)
    {
        $this->logger->debug('Plugin B before Called');

        return [' hand crafted by ' . $prefix];
    }


//    public function afterGetStaffName(StaffPick $subject, $result)
//    {
//        $this->logger->debug('Plugin B after Called');
//    }
}
