<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputPassword extends TCAInputBase
{
    protected ?string $type = 'input';
    protected ?string $eval = 'nospace,password';
    protected ?int $size = 30;

}
