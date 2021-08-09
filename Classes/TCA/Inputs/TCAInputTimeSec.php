<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputTimeSec extends TCAInputBase
{
    protected ?string $type = 'input';
    protected ?string $eval = 'timesec';
    protected ?string $renderType = 'inputDateTime';
    protected ?int $size = 6;
    protected $default = 0;

    public function __construct() {
        $this->default = time();
    }
}
