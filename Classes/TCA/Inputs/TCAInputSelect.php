<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputSelect extends TCAInputBase
{
    protected ?string $type = 'select';
    protected ?string $renderType = 'selectSingle';
    protected ?string $itemsProcFunc = null;
    protected ?string $MM = null;
    protected ?int $size = 1;
    protected ?int $maxItems = 1;

    /**
     * @return string|null
     */
    public function getRelation(): ?string
    {
        return $this->MM;
    }

    /**
     * @param string|null $MM
     */
    public function setRelation(?string $MM): void
    {
        $this->MM = $MM;
    }
}
