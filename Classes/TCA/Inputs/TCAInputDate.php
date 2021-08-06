<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputDate extends TCAInputBase
{
    protected string $databaseType = 'date';
    protected string $type = 'input';
    protected string $eval = 'date';
    protected string $renderType = 'inputDateTime';
    protected int $size = 7;
    protected $default = null;
}
