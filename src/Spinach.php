<?php

namespace Monorepo\Spinach;

use Monorepo\Vegetable\Vegetable;
// THIS IS A TEST! HALLOWEEN IS COMING!!

class Spinach extends Vegetable
{
    var $cooked = false;

    //    var $cooked = $cooked === true ? 'Yes' : 'No';
    function __construct()
    {
        parent::__construct(true, "green");
    }

    function cook_it()
    {
        $this->cooked = true;
    }

    function is_cooked()
    {
        return $this->cooked;
    }
}
