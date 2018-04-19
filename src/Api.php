<?php

/**
 * Origital Rest
 *
 * @author Carlos Acedo <carlos@origital.com>
 */

namespace Origital\Rest;

use Origital\Rest\Exception\InvalidResolverException;
use Origital\Rest\Exception\InvalidResourceException;

/**
 * Interface Api
 *
 * @package Origital\Rest
 */
interface Api
{
    /**
     * @param string|Resolver $resolver
     * @return Api
     * @throws InvalidResolverException if $resolver is not a Resolver or class name of a Resolver
     */
    public function setResolver($resolver): Api;

    /**
     * @param string|Resource $resource
     * @return Api
     * @throws InvalidResourceException if $resource is not a Resource or class name of a Resource
     */
    public function addResource($resource): Api;

    /**
     * @param $request
     * @return mixed
     */
    public function handle($request);
}
