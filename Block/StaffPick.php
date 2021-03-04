<?php
namespace RobinMcK\PluginsAndObservers\Block;

use Magento\Framework\View\Element\Template;

class StaffPick extends Template
{
    const DEFAULT_PREFIX = 'This product has been hand picked by ';

    const DEFAULT_TITLE = 'Staff Pick: ';

    private $staffName;

    private $title;

    public function __construct(Template\Context $context, $staffName, array $data = [])
    {
        $this->staffName = $staffName;
        parent::__construct($context, $data);
    }

    public function getStaffName($prefix = null)
    {
        return $prefix ? $prefix . $this->staffName : self::DEFAULT_PREFIX . $this->staffName;
    }

    public function setTitle($title)
    {
        $this->_logger->debug('Method');
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title ?? self::DEFAULT_TITLE;
    }
}
