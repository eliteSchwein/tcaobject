<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputCustom extends TCAInputBase
{
    /**
     * @param string $eval
     * @return TCAInputCustom
     */
    public function setEval(string $eval): TCAInputCustom
    {
        $this->eval = $eval;
        return $this;
    }

    /**
     * @param string $type
     * @return TCAInputCustom
     */
    public function setType(string $type): TCAInputCustom
    {
        $this->type = $type;
        return $this;
    }
}
