<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputCheck extends TCAInputBase
{
    protected string $type = 'check';
    protected string $eval = '';
    protected bool $requiresItems = true;
    protected string $renderType = 'checkboxToggle';
    protected $default = 0;

}
