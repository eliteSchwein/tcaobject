<?php

namespace ThomasLudwig\Tcaobject\TCA;

class TCAInputBase
{
    protected string $datasetName = '';
    protected string $label = '';
    protected string $type = '';
    protected string $databaseType = '';
    protected string $eval = '';
    protected string $renderType = '';
    protected bool $requiresItems = false;
    protected bool $visible = true;
    protected bool $searchable = false;
    protected int $size = 30;
    protected int $maxItems = 9999;
    protected array $fieldControls = [];
    protected array $items = [];
    protected array $behaviour = [];
    protected array $range = [];
    protected $default = '';

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getDefault(): string
    {
        return $this->default;
    }

    /**
     * @param string $default
     */
    public function setDefault(string $default): void
    {
        $this->default = $default;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getEval(): string
    {
        return $this->eval;
    }

    /**
     * @param string $eval
     */
    public function setEval(string $eval): void
    {
        $this->eval = $eval;
    }

    /**
     * @return string
     */
    public function getDatasetName(): string
    {
        return $this->datasetName;
    }

    /**
     * @param string $datasetName
     */
    public function setDatasetName(string $datasetName): void
    {
        $this->datasetName = $datasetName;
    }

    /**
     * @return array
     */
    public function getFieldControls(): array
    {
        return $this->fieldControls;
    }

    /**
     * @param array $fieldControls
     */
    public function setFieldControls(array $fieldControls): void
    {
        $this->fieldControls = $fieldControls;
    }

    public function addFieldControl($fieldControl): void
    {
        array_push($this->fieldControls, $fieldControl);
    }

    /**
     * @return string
     */
    public function getRenderType(): string
    {
        return $this->renderType;
    }

    /**
     * @param string $renderType
     */
    public function setRenderType(string $renderType): void
    {
        $this->renderType = $renderType;
    }

    /**
     * @return bool
     */
    public function isRequiresItems(): bool
    {
        return $this->requiresItems;
    }

    /**
     * @return string
     */
    public function getDatabaseType(): string
    {
        return $this->databaseType;
    }

    /**
     * @return int
     */
    public function getMaxItems(): int
    {
        return $this->maxItems;
    }

    /**
     * @param int $maxItems
     */
    public function setMaxItems(int $maxItems): void
    {
        $this->maxItems = $maxItems;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem($key, $value): void
    {
        $this->items[$key] = $value;
    }

    public function removeItemByKey($key): void
    {
        unset($this->items[$key]);
    }

    public function removeItemByValue($value): void
    {
        if (($key = array_search($value, $this->items)) !== false) {
            unset($this->items[$key]);
        }
    }

    /**
     * @return array
     */
    public function getBehaviour(): array
    {
        return $this->behaviour;
    }

    /**
     * @param array $behaviour
     */
    public function setBehaviour(array $behaviour): void
    {
        $this->behaviour = $behaviour;
    }

    public function addBehavior($key, $value): void
    {
        $this->behaviour[$key] = $value;
    }

    public function removeBehaviorByKey($key): void
    {
        unset($this->behaviour[$key]);
    }

    public function removeBehaviorByValue($value): void
    {
        if (($key = array_search($value, $this->behaviour)) !== false) {
            unset($this->behaviour[$key]);
        }
    }

    /**
     * @return bool
     */
    public function isVisible(): bool
    {
        return $this->visible;
    }

    /**
     * @param bool $visible
     */
    public function setVisible(bool $visible): void
    {
        $this->visible = $visible;
    }

    /**
     * @return bool
     */
    public function isSearchable(): bool
    {
        return $this->searchable;
    }

    /**
     * @param bool $searchable
     */
    public function setSearchable(bool $searchable): void
    {
        $this->searchable = $searchable;
    }

    /**
     * @return array
     */
    public function getRange(): array
    {
        return $this->range;
    }

    /**
     * @param array $range
     */
    public function setRange(array $range): void
    {
        $this->range = $range;
    }

    public function addRange($key, $value): void
    {
        $this->range[$key] = $value;
    }

    public function removeRangeByKey($key): void
    {
        unset($this->range[$key]);
    }

    public function removeRangeByValue($value): void
    {
        if (($key = array_search($value, $this->range)) !== false) {
            unset($this->range[$key]);
        }
    }
}
