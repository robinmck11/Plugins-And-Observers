<?php
namespace RobinMcK\PluginsAndObservers\Plugin;

use Psr\Log\LoggerInterface;
use RobinMcK\PluginsAndObservers\Block\StaffPick;

class SetDescriptionC
{
    /** @var LoggerInterface $logger */
    public $logger;

    public function __construct(LoggerInterface $looger)
    {
        $this->logger = $looger;
    }

    public function beforeGetStaffName(StaffPick $subject, $prefix = null)
    {
        $this->logger->debug('Plugin C before Called');

        return [' sourced by' . $prefix];
    }

    public function afterGetStaffName(StaffPick $subject, $result)
    {
        $this->logger->debug('Plugin C after Called');
        return $result;
    }
}
