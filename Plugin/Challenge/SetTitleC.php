<?php
namespace RobinMcK\PluginsAndObservers\Plugin\Challenge;

use Psr\Log\LoggerInterface;
use RobinMcK\PluginsAndObservers\Block\StaffPick;

class SetTitleC
{
    /** @var LoggerInterface $logger */
    public $logger;

    public function __construct(LoggerInterface $looger)
    {
        $this->logger = $looger;
    }

    public function beforeSetTitle(StaffPick $subject, $title)
    {
        $this->logger->debug('Plugin C beforeSetTitle');

        return [$title];
    }
}
