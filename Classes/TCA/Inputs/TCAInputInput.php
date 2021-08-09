<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputInput extends TCAInputBase
{
    protected ?string $type = 'input';
    protected ?string $eval = 'trim';
    protected ?bool $searchable = true;
    protected ?int $size = 30;
    protected $default = '';
}
