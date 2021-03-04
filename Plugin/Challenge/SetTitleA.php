<?php
namespace RobinMcK\PluginsAndObservers\Plugin\Challenge;

use Psr\Log\LoggerInterface;
use RobinMcK\PluginsAndObservers\Block\StaffPick;

class SetTitleA
{
    /** @var LoggerInterface $logger */
    public $logger;

    public function __construct(LoggerInterface $looger)
    {
        $this->logger = $looger;
    }

    public function afterSetTitle(StaffPick $subject, $result, $title)
    {
        $this->logger->debug('Plugin A afterSetTitle');
        return $result;
    }
}
