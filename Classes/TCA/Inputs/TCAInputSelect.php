<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputSelect extends TCAInputBase
{
    protected ?string $type = 'select';
    protected ?string $renderType = 'selectSingle';
    protected ?string $itemsProcFunc = null;
    protected ?int $size = 1;
    protected ?int $maxItems = 1;
    protected array $itemsProcConfig = [];


    /**
     * @return string|null
     */
    public function getItemsProcFunc(): ?string
    {
        return $this->itemsProcFunc;
    }

    /**
     * @param string|null $itemsProcFunc
     */
    public function setItemsProcFunc(?string $itemsProcFunc): void
    {
        $this->itemsProcFunc = $itemsProcFunc;
    }

    /**
     * @param array $itemsProcConfig
     */
    public function setItemsProcConfig(array $itemsProcConfig): void
    {
        $this->itemsProcConfig = $itemsProcConfig;
    }

    /**
     * @return array
     */
    public function getItemsProcConfig(): array
    {
        return $this->itemsProcConfig;
    }

    /**
     * @param $key
     * @param $value
     */
    public function addItemProcConfig($key, $value) {
        $this->itemsProcConfig[$key] = $value;
    }
}
