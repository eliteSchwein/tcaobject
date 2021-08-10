<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputDateTimeInteger extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $type = 'input';
    /**
     * @var string|null
     */
    protected ?string $eval = 'datetime,int';
    /**
     * @var int|null
     */
    protected ?int $size = 30;
    /**
     * @var int
     */
    protected $default = 0;
}
