<?php
/*
 * This file is part of DBUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPUnit\DbUnit\DataSet\Specification;

use PHPUnit_Extensions_Database_DataSet_ISpec;

/**
 * An interface for data set spec factories.
 */
interface IFactory
{
    /**
     * Returns the data set
     *
     * @param  string $type
     * @return PHPUnit_Extensions_Database_DataSet_ISpec
     */
    public function getDataSetSpecByType($type);
}
