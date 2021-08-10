<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputTimeSec extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $type = 'input';
    /**
     * @var string|null
     */
    protected ?string $eval = 'timesec';
    /**
     * @var string|null
     */
    protected ?string $renderType = 'inputDateTime';
    /**
     * @var int|null
     */
    protected ?int $size = 6;
    /**
     * @var int
     */
    protected $default = 0;

    /**
     *
     */
    public function __construct() {
        parent::__construct();

        $this->default = time();
    }
}
