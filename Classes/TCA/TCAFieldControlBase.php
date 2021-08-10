<?php

namespace ThomasLudwig\Tcaobject\TCA;

/**
 *
 */
class TCAFieldControlBase
{
    /**
     * @var string
     */
    protected string $type = '';
    /**
     * @var bool
     */
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
     * @return TCAFieldControlBase
     */
    public function setDisabled(bool $disabled): TCAFieldControlBase
    {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return array
     */
    public function asArray(): array
    {
        $rawArray = [];
        $rawArray['disabled'] = $this->disabled;
        return $rawArray;
    }
}
