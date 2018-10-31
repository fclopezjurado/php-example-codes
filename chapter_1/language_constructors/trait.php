<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 24/10/18
 * Time: 17:38
 *
 * Traits are a mechanism for code reuse in single inheritance languages such as PHP. A Trait is intended to reduce
 * some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several
 * independent classes living in different class hierarchies.
 * https://secure.php.net/manual/en/language.oop5.traits.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

trait ezcReflectionReturnInfo
{
    function getReturnType()
    {
        echo __FUNCTION__;
    }

    function getReturnDescription()
    {
        echo __FUNCTION__;
    }
}

class ezcReflectionMethod extends ReflectionMethod
{
    use ezcReflectionReturnInfo;
    /* ... */
}

class ezcReflectionFunction extends ReflectionFunction
{
    use ezcReflectionReturnInfo;
    /* ... */
}