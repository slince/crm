<?php

/*
 * This file is part of the slince/composer-registry-manager package.
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Slince\Crm\Command;

use Slince\Crm\RegistryManager;

interface CommandInterface
{
    /**
     * Get manager instance
     * @return RegistryManager
     */
    public function getManager();
}
