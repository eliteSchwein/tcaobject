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
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
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
