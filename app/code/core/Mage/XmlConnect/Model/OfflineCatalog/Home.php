<?php
/**
 * Magento Enterprise Edition
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Enterprise Edition License
 * that is bundled with this package in the file LICENSE_EE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magentocommerce.com/license/enterprise-edition
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_XmlConnect
 * @copyright   Copyright (c) 2014 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://www.magentocommerce.com/license/enterprise-edition
 */

/**
 * Xmlconnect offline catalog home model
 *
 * @category    Mage
 * @package     Mage_XmlConnect
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_XmlConnect_Model_OfflineCatalog_Home extends Mage_XmlConnect_Model_OfflineCatalog_Abstract
{
    /**
     * Home url
     */
    const HOME_URL = 'xmlconnect/index/index/';

    /**
     * Return home block
     *
     * @param Mage_XmlConnect_Helper_OfflineCatalog $exportHelper
     * @return Mage_Core_Block_Abstract
     */
    public function getLayoutBlock($exportHelper)
    {
        return $exportHelper->getBlock('xmlconnect.home');
    }

    /**
     * Return home url
     *
     * @return string
     */
    protected function _getActionUrl()
    {
        return Mage::getBaseUrl() . self::HOME_URL;
    }
}
