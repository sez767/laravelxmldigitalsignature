<?php

namespace Iwalpola\XmlDigitalSignature;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Collective\Html\HtmlBuilder
 */
class XmlDigitalSignatureFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'xmldigisig';
    }
}
