<?php

namespace ThomasLudwig\Tcaobject\TCA;

/**
 *
 */
class TCASpacer
{
    /**
     * @var string|null
     */
    protected ?string $name = '';

    /**
     * @param string|null $name
     * @return TCASpacer
     */
    public function setName(?string $name): TCASpacer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function asArray(): array
    {
        return ['--linebreak--'];
    }
}
