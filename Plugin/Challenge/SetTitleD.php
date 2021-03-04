<?php
namespace RobinMcK\PluginsAndObservers\Plugin\Challenge;

use Psr\Log\LoggerInterface;
use RobinMcK\PluginsAndObservers\Block\StaffPick;

class SetTitleD
{
    /** @var LoggerInterface $logger */
    public $logger;

    public function __construct(LoggerInterface $looger)
    {
        $this->logger = $looger;
    }

    public function beforeSetTitle(StaffPick $subject, $title)
    {
        $this->logger->debug('Plugin D beforeSetTitle');

        return [$title];
    }

    public function afterSetTitle(StaffPick $subject, $result, $title)
    {
        $this->logger->debug('Plugin D afterSetTitle');
        return $result;
    }

    public function aroundSetTitle(StaffPick $subject, callable $proceed, $title)
    {
        $returnValue = null;

        $this->logger->debug('Plugin D around set title (1)');

        $returnValue = $proceed($title);

        $this->logger->debug('Plugin D around set title (2)');

        return $returnValue;
    }
}
