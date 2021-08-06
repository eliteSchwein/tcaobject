<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputEMail extends TCAInputBase
{
    protected string $type = 'input';
    protected string $eval = 'nospace,email';

}
