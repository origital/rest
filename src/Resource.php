<?php

/**
 * Origital Rest
 *
 * @author Carlos Acedo <carlos@origital.com>
 */

namespace Origital\Rest;

interface Resource
{
    /**
     * @return string
     */
    public function getPath(): string;
}
