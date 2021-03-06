<?php

/*
 * This file is part of yuml-php
 *
 * (c) Robert Schönthal <seroscho@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace YumlPhp\Builder\Http;

use YumlPhp\Request\FileRequest;
use YumlPhp\Builder\HttpBuilder;

/**
 * the UseCaseBuilder generates a UseCaseDiagram via the http://yuml.me API
 *
 * @author Robert Schönthal <seroscho@googlemail.com>
 */
class UseCaseBuilder extends HttpBuilder
{
    const TYPE = 'usecase';
    protected $inspectorClass = 'YumlPhp\Request\FileRequest';

    /**
     * builds a request array for the yuml API
     *
     * @return UseCaseBuilder
     */
    protected function doBuild()
    {
        $this->request = explode(',', str_replace("\n", '', file_get_contents($this->path)));

        return $this;
    }
}
