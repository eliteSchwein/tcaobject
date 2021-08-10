<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputInline extends TCAInputBase
{
    protected ?string $type = 'inline';
    protected ?int $maxItems = 9999;
}
