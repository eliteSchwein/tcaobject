<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputInline extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $type = 'inline';
    /**
     * @var int|null
     */
    protected ?int $maxItems = 9999;
}
