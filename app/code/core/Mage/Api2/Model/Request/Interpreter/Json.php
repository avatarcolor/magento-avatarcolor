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
 * @package     Mage_Api2
 * @copyright   Copyright (c) 2014 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://www.magentocommerce.com/license/enterprise-edition
 */

/**
 * Request content interpreter JSON adapter
 *
 * @category    Mage
 * @package     Mage_Api2
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Api2_Model_Request_Interpreter_Json implements Mage_Api2_Model_Request_Interpreter_Interface
{
    /**
     * Parse Request body into array of params
     *
     * @param string $body  Posted content from request
     * @return array|null   Return NULL if content is invalid
     * @throws Exception|Mage_Api2_Exception
     */
    public function interpret($body)
    {
        if (!is_string($body)) {
            throw new Exception(sprintf('Invalid data type "%s". String expected.', gettype($body)));
        }

        $decoded = Zend_Json::decode($body);

        if ($body != 'null' && $decoded === null) {
            throw new Mage_Api2_Exception('Decoding error.', Mage_Api2_Model_Server::HTTP_BAD_REQUEST);
        }

        return $decoded;
    }
}
