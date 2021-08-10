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
    protected array $multiSelectFilterItems = [];

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

    /**
     * @return array
     */
    public function getMultiSelectFilterItems(): array
    {
        return $this->multiSelectFilterItems;
    }

    /**
     * @param array $multiSelectFilterItems
     */
    public function setMultiSelectFilterItems(array $multiSelectFilterItems): void
    {
        $this->multiSelectFilterItems = $multiSelectFilterItems;
    }

    public function addMultiSelectFilterItem($key, $id = null, $icon = null): void
    {
        $entry = [];
        $entry = $this->parseInputFragment($entry, $key);
        $entry = $this->parseInputFragment($entry, $id);
        $entry = $this->parseInputFragment($entry, $icon);
        $this->multiSelectFilterItems[] = $entry;
    }
}
