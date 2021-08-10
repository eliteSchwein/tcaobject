<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs\Options;

/**
 *
 */
class TCAAspectRatio
{
    /**
     * @var string
     */
    protected string $name = '';
    /**
     * @var string
     */
    protected string $title = '';
    /**
     * @var float
     */
    protected float $value = 0.0;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return TCAAspectRatio
     */
    public function setName(string $name): TCAAspectRatio
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return TCAAspectRatio
     */
    public function setTitle(string $title): TCAAspectRatio
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return TCAAspectRatio
     */
    public function setValue(float $value): TCAAspectRatio
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function asArray(): array
    {
        return [
            'title' => $this->title,
            'value' => $this->value
        ];
    }
}
