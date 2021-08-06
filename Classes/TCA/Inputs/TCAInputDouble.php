<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputDouble extends TCAInputBase
{
    protected string $type = 'input';
    protected string $eval = 'double2';
    protected $default = 0;

    public function setDigits(int $digits) {
        $this->eval = 'double'.$digits;
    }

}
