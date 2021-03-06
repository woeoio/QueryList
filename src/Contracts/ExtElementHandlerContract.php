<?php

namespace QL\Contracts;


use QL\Dom\Elements;

interface ExtElementHandlerContract
{
    /**
     * @param  Elements  $element
     * @param  array|object  $rule
     * @param  mixed  ...$args
     * @return Elements
     */
    public function handle(Elements $element, $rule, ...$args): Elements;

}
