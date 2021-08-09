<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputSelect extends TCAInputBase
{
    protected ?string $type = 'select';
    protected ?string $renderType = 'selectSingle';
    protected ?int $size = 1;
    protected ?int $maxItems = 1;
}
