<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputTime extends TCAInputBase
{
    protected ?string $databaseType = 'time';
    protected ?string $type = 'input';
    protected ?string $eval = 'time';
    protected ?string $renderType = 'inputDateTime';
    protected ?int $size = 4;
    protected $default = null;
}
