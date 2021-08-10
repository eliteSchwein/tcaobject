<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputDateTime extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $databaseType = 'datetime';
    /**
     * @var string|null
     */
    protected ?string $type = 'input';
    /**
     * @var string|null
     */
    protected ?string $eval = 'datetime';
    /**
     * @var string|null
     */
    protected ?string $renderType = 'inputDateTime';
    /**
     * @var int|null
     */
    protected ?int $size = 12;
    /**
     * @var null
     */
    protected $default = null;
}
