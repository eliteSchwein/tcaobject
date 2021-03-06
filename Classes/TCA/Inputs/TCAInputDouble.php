<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputDouble extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $type = 'input';
    /**
     * @var string|null
     */
    protected ?string $eval = 'double2';
    /**
     * @var int|null
     */
    protected ?int $size = 30;
    /**
     * @var int
     */
    protected $default = 0;

    /**
     * @param int $digits
     * @return TCAInputDouble
     */
    public function setDigits(int $digits): TCAInputDouble
    {
        $this->eval = 'double'.$digits;
        return $this;
    }

}
