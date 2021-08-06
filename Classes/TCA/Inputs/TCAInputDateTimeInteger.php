<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputDateTimeInteger extends TCAInputBase
{
    protected string $type = 'input';
    protected string $eval = 'datetime,int';
    protected int $size = 30;
    protected $default = 0;
}
