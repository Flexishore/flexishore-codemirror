<?php
/*
 * @category    Flexishore
 * @package     Flexishore_Codemirror
 * @copyright   Copyright (c) 2011 Flexishore (http://www.flexishore.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Flexishore Cms Observer
 *
 * @category   Flexishore
 * @package    Flexishore_Codemirror
 * @author     Rafał Kos <rafal.k@flexishore.com>
 */
class Flexishore_Codemirror_Model_Observer
{
    /**
     * Add additional settings to wysiwyg config (CodeMirror)
     *
     * @param Varien_Event_Observer $observer
     *
     * @return Mage_Widget_Model_Observer
     */
    public function prepareWidgetsPluginConfig(Varien_Event_Observer $observer)
    {
        $config = $observer->getEvent()->getConfig();

        if ($config->getData('add_widgets')) {
            $settings = Mage::getModel('codemirror/config')->getPluginSettings($config);
            $config->addData($settings);
        }
        
        return $this;
    }

}
