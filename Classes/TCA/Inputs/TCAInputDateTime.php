<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputDateTime extends TCAInputBase
{
    protected ?string $databaseType = 'datetime';
    protected ?string $type = 'input';
    protected ?string $eval = 'datetime';
    protected ?string $renderType = 'inputDateTime';
    protected ?int $size = 12;
    protected $default = null;
}
