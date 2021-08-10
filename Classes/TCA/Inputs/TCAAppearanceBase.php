<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

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
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
