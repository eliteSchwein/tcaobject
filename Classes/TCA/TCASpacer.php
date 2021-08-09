<?php

namespace ThomasLudwig\Tcaobject\TCA;

class TCASpacer
{
    protected ?string $name = '';

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    public function asArray(): array
    {
        return ['--linebreak--'];
    }
}
