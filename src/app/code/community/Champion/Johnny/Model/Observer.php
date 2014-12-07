<?php

class Champion_Johnny_Model_Observer
{
    public function addRendererOption(Varien_Event_Observer $observer)
    {
        $options = $observer->getEvent()->getOptions();

        $options[] = array(
            'value' => 'champion_johnny/renderer',
            'label' => Mage::helper('champion_johnny')->__('Johnny'),
        );

        $observer->getEvent()->setOptions($options);
    }
}