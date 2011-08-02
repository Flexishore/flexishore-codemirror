<?php
/*
 * @category    Flexishore
 * @package     Flexishore_Codemirror
 * @copyright   Copyright (c) 2011 Flexishore (http://www.flexishore.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Widgets Plugin Config for CodeMirror
 *
 * @category    Flexishore
 * @package     Flexishore_Codemirror
 * @author      Rafał Kos <rafal.k@flexishore.com>
 */
class Flexishore_Codemirror_Model_Config extends Varien_Object
{

    /**
     * Return config settings for widgets insertion plugin based on editor element config
     *
     * @param Varien_Object $config
     * 
     * @return array
     */
    public function getPluginSettings($config)
    {

        $codemirrorWysiwygPlugin = array(array('name' => 'codemagic',
            'src' => Mage::getBaseUrl('js').'tiny_mce/plugins/codemagic/editor_plugin.js',
        ));

        $configPlugins = $config->getData('plugins');
        $variableConfig['plugins'] = array_merge($codemirrorWysiwygPlugin, $configPlugins);
        
        return $variableConfig;
    }
}
