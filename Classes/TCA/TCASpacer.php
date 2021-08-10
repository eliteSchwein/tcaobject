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

    /**
     * @return array
     */
    public function asArray(): array
    {
        return ['--linebreak--'];
    }
}
