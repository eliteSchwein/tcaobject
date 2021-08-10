<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputInput extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $type = 'input';
    /**
     * @var string|null
     */
    protected ?string $eval = 'trim';
    /**
     * @var bool|null
     */
    protected ?bool $searchable = true;
    /**
     * @var int|null
     */
    protected ?int $size = 30;
    /**
     * @var string
     */
    protected $default = '';
}
