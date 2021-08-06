<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

class TCAInputCustom extends \ThomasLudwig\Tcaobject\TCA\TCAInputBase
{
    /**
     * @param string $eval
     */
    public function setEval(string $eval): void
    {
        $this->eval = $eval;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param bool $requiresItems
     */
    public function setRequiresItems(bool $requiresItems): void
    {
        $this->requiresItems = $requiresItems;
    }
}
