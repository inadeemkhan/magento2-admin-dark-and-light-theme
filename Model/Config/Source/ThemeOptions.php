<?php
namespace DevScripts\AdminTheme\Model\Config\Source;

class ThemeOptions implements \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'none', 'label' => __('Default (No Theme)')],
            ['value' => 'light', 'label' => __('Light Theme')],
            ['value' => 'dark', 'label' => __('Dark Theme')]
        ];
    }
}