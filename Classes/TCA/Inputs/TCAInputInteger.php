<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputInteger extends TCAInputBase
{
    protected string $type = 'input';
    protected string $eval = 'int';
    protected int $size = 4;
}
