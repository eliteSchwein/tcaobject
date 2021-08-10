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
     * @return TCAInputSelect
     */
    public function setRelation(?string $MM): TCAInputSelect
    {
        $this->MM = $MM;
        return $this;
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
     * @return TCAInputSelect
     */
    public function setMultiSelectFilterItems(array $multiSelectFilterItems): TCAInputSelect
    {
        $this->multiSelectFilterItems = $multiSelectFilterItems;
        return $this;
    }

    /**
     * @param $key
     * @param null $id
     * @param null $icon
     * @return TCAInputSelect
     */
    public function addMultiSelectFilterItem($key, $id = null, $icon = null): TCAInputSelect
    {
        $entry = [];
        $entry = $this->parseInputFragment($entry, $key);
        $entry = $this->parseInputFragment($entry, $id);
        $entry = $this->parseInputFragment($entry, $icon);
        $this->multiSelectFilterItems[] = $entry;
        return $this;
    }
}
