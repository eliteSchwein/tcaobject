<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputTime extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $databaseType = 'time';
    /**
     * @var string|null
     */
    protected ?string $type = 'input';
    /**
     * @var string|null
     */
    protected ?string $eval = 'time';
    /**
     * @var string|null
     */
    protected ?string $renderType = 'inputDateTime';
    /**
     * @var int|null
     */
    protected ?int $size = 4;
    /**
     * @var null
     */
    protected $default = null;
}
