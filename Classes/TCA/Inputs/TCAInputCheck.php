<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputCheck extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $type = 'check';
    /**
     * @var string|null
     */
    protected ?string $renderType = 'checkboxToggle';
    /**
     * @var int
     */
    protected $default = 0;

}
