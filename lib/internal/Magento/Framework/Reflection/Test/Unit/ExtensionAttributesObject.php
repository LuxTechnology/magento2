<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Reflection\Test\Unit;

use Magento\Framework\Api\ExtensionAttributesInterface;

/**
 * Dummy data object to be used by ExtensionAttributesProcessorTest
 */
class ExtensionAttributesObject implements ExtensionAttributesInterface
{
    /**
     * @return string
     */
    public function getAttrName()
    {
        return 'attrName';
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return false;
    }
}
