<?php

/**
 * Origital Rest
 *
 * @author Carlos Acedo <carlos@origital.com>
 */

namespace Origital\Rest;

interface Resolver
{
    /**
     * @param string $path
     * @return Resource
     */
    public function resolve(string $path): Resource;
}
