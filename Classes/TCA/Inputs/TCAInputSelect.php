<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputSelect extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $type = 'select';
    /**
     * @var string|null
     */
    protected ?string $renderType = 'selectSingle';
    /**
     * @var string|null
     */
    protected ?string $itemsProcFunc = null;
    /**
     * @var string|null
     */
    protected ?string $MM = null;
    /**
     * @var int|null
     */
    protected ?int $size = 1;
    /**
     * @var int|null
     */
    protected ?int $maxItems = 1;
    /**
     * @var array
     */
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

    /**
     * @param $key
     * @param null $id
     * @param null $icon
     */
    public function addMultiSelectFilterItem($key, $id = null, $icon = null): void
    {
        $entry = [];
        $entry = $this->parseInputFragment($entry, $key);
        $entry = $this->parseInputFragment($entry, $id);
        $entry = $this->parseInputFragment($entry, $icon);
        $this->multiSelectFilterItems[] = $entry;
    }
}
