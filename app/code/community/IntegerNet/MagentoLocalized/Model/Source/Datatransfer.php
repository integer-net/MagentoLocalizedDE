<?php
class IntegerNet_MagentoLocalized_Model_Source_Datatransfer
{
    const DATATRANSFER_NONE         = 0;
    const DATATRANSFER_BASIC        = 1;
    const DATATRANSFER_ADVANCED     = 2;

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => self::DATATRANSFER_NONE, 'label'=>Mage::helper('magento_localized')->__('None')),
            array('value' => self::DATATRANSFER_BASIC, 'label'=>Mage::helper('magento_localized')->__('Basic')),
            array('value' => self::DATATRANSFER_ADVANCED, 'label'=>Mage::helper('magento_localized')->__('Advanced')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        $options = array();
        foreach($this->toOptionArray() as $option) {
            $options[$option['value']] = $option['label'];
        }
        return $options;
    }
}