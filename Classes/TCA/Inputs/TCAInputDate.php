<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputDate extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $databaseType = 'date';
    /**
     * @var string|null
     */
    protected ?string $type = 'input';
    /**
     * @var string|null
     */
    protected ?string $eval = 'date';
    /**
     * @var string|null
     */
    protected ?string $renderType = 'inputDateTime';
    /**
     * @var int|null
     */
    protected ?int $size = 7;
    /**
     * @var null
     */
    protected $default = null;
}
