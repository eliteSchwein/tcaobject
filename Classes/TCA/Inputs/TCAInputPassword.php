<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputPassword extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $type = 'input';
    /**
     * @var string|null
     */
    protected ?string $eval = 'nospace,password';
    /**
     * @var int|null
     */
    protected ?int $size = 30;

}
