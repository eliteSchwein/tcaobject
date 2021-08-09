<?php

namespace ThomasLudwig\Tcaobject\TCA;

class TCAFieldControlBase
{
    protected string $type = '';
    protected bool $disabled = false;

    /**
     * @return bool
     */
    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     */
    public function setDisabled(bool $disabled): void
    {
        $this->disabled = $disabled;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function asArray(): array
    {
        $rawArray = [];
        $rawArray['disabled'] = $this->disabled;
        return $rawArray;
    }
}
