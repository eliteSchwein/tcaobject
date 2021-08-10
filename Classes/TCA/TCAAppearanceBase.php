<?php

namespace ThomasLudwig\Tcaobject\TCA;

/**
 *
 */
class TCAAppearanceBase
{
    /**
     * @var string
     */
    protected string $type = '';
    /**
     * @var null
     */
    protected $value = null;

    /**
     * @param null $value
     */
    public function setValue($value): TCAAppearanceBase
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
