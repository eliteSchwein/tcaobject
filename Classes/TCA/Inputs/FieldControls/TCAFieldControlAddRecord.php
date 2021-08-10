<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs\FieldControls;

use ThomasLudwig\Tcaobject\TCA\TCAFieldControlBase;

/**
 *
 */
class TCAFieldControlAddRecord extends TCAFieldControlBase
{
    /**
     * @var string
     */
    protected string $type = 'addRecord';
    /**
     * @var bool
     */
    protected bool $disabled = false;
}
