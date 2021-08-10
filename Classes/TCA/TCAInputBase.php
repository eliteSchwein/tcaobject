<?php

namespace ThomasLudwig\Tcaobject\TCA;

class TCAInputBase
{
    protected ?string $name = null;
    protected ?string $label = null;
    protected ?string $type = null;
    protected ?string $databaseType = null;
    protected ?string $eval = null;
    protected ?string $renderType = null;
    protected ?string $foreign_table = null;
    protected ?string $foreign_table_where = null;
    protected ?string $displayCond = null;
    protected ?string $special = null;
    protected ?string $itemsProcFunc = null;

    protected ?bool $visible = true;
    protected ?bool $searchable = false;
    protected ?bool $exclude = true;
    protected ?bool $readOnly = null;

    protected ?int $size = null;
    protected ?int $maxItems = null;
    protected ?int $minItems = null;
    protected ?int $multiple = null;
    protected ?int $autoSizeMax = null;
    protected ?int $autoSizeMin = null;

    protected array $fieldControl = [];
    protected array $items = [];
    protected array $behaviour = [];
    protected array $range = [];
    protected array $itemsProcConfig = [];

    protected $default = null;

    /**
     * @return string
     */
    public function getLabel(): ?string
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
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param string $default
     */
    public function setDefault($default): void
    {
        $this->default = $default;
    }

    /**
     * @return int
     */
    public function getSize(): ?int
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
    public function getEval(): ?string
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
    public function getName(): ?string
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
     * @return array
     */
    public function getFieldControls(): array
    {
        return $this->fieldControl;
    }

    /**
     * @param array $fieldControls
     */
    public function setFieldControls(array $fieldControls): void
    {
        $this->fieldControl = $fieldControls;
    }

    public function addFieldControl(TCAFieldControlBase $fieldControl): void
    {
        $this->fieldControl[$fieldControl->getType()] = $fieldControl->asArray();
    }

    /**
     * @return string
     */
    public function getRenderType(): ?string
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
    public function getDatabaseType(): ?string
    {
        return $this->databaseType;
    }

    /**
     * @return int
     */
    public function getMaxItems(): ?int
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

    public function addItem($key, $id = null, $icon = null): void
    {
        $entry = [];
        $entry = $this->parseInputFragment($entry, $key);
        $entry = $this->parseInputFragment($entry, $id);
        $entry = $this->parseInputFragment($entry, $icon);
        $this->items[] = $entry;
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
     * @return null|bool
     */
    public function isVisible(): ?bool
    {
        return $this->visible;
    }

    /**
     * @param null|bool $visible
     */
    public function setVisible(?bool $visible): void
    {
        $this->visible = $visible;
    }

    /**
     * @return null|bool
     */
    public function isSearchable(): ?bool
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

    /**
     * @return string
     */
    public function getForeignTable(): ?string
    {
        return $this->foreign_table;
    }

    /**
     * @return string
     */
    public function getForeignTableWhere(): ?string
    {
        return $this->foreign_table_where;
    }

    /**
     * @param string $foreign_table
     */
    public function setForeignTable(string $foreign_table): void
    {
        $this->foreign_table = $foreign_table;
    }

    /**
     * @param string $foreign_table_where
     */
    public function setForeignTableWhere(string $foreign_table_where): void
    {
        $this->foreign_table_where = $foreign_table_where;
    }

    /**
     * @return string
     */
    public function getDisplayCond(): ?string
    {
        return $this->displayCond;
    }

    /**
     * @param string $displayCond
     */
    public function setDisplayCond(string $displayCond): void
    {
        $this->displayCond = $displayCond;
    }

    /**
     * @return bool|null
     */
    public function isExclude(): ?bool
    {
        return $this->exclude;
    }

    /**
     * @param bool|null $exclude
     */
    public function setExclude(?bool $exclude): void
    {
        $this->exclude = $exclude;
    }

    /**
     * @return string|null
     */
    public function getSpecial(): ?string
    {
        return $this->special;
    }

    /**
     * @param string|null $special
     */
    public function setSpecial(?string $special): void
    {
        $this->special = $special;
    }

    /**
     * @return int|null
     */
    public function getMinItems(): ?int
    {
        return $this->minItems;
    }

    /**
     * @param int|null $minItems
     */
    public function setMinItems(?int $minItems): void
    {
        $this->minItems = $minItems;
    }

    protected function parseInputFragment(array $array, $fragment) {
        if($fragment === null) {
            return $array;
        }
        if(is_array($fragment)) {
            $array[key($fragment)] = $fragment[key($fragment)];
        } else {
            $array[] = $fragment;
        }
        return $array;
    }


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

    /**
     * @return bool|null
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * @param bool|null $readOnly
     */
    public function setReadOnly(?bool $readOnly): void
    {
        $this->readOnly = $readOnly;
    }

    /**
     * @return bool|null
     */
    public function getSearchable(): ?bool
    {
        return $this->searchable;
    }

    /**
     * @return int|null
     */
    public function getMultiple(): ?int
    {
        return $this->multiple;
    }

    /**
     * @param int|null $multiple
     */
    public function setMultiple(?int $multiple): void
    {
        $this->multiple = $multiple;
    }

    /**
     * @return bool|null
     */
    public function getExclude(): ?bool
    {
        return $this->exclude;
    }

    /**
     * @return int|null
     */
    public function getAutoSizeMax(): ?int
    {
        return $this->autoSizeMax;
    }

    /**
     * @return int|null
     */
    public function getAutoSizeMin(): ?int
    {
        return $this->autoSizeMin;
    }

    /**
     * @param int|null $autoSizeMax
     */
    public function setAutoSizeMax(?int $autoSizeMax): void
    {
        $this->autoSizeMax = $autoSizeMax;
    }

    /**
     * @param int|null $autoSizeMin
     */
    public function setAutoSizeMin(?int $autoSizeMin): void
    {
        $this->autoSizeMin = $autoSizeMin;
    }

    public function asArray(): array
    {
        $rawArray = [];
        if(!empty($this->isExclude())) {
            $rawArray['exclude'] = $this->isExclude();
        }
        if(!empty($this->getLabel())) {
            $rawArray['label'] = $this->getLabel();
        }
        if(!empty($this->getDisplayCond())) {
            $rawArray['display_cond'] = $this->getDisplayCond();
        }
        foreach ((array) $this as $key => $value) {
            $cleanedUpKey = str_replace('*', '', $key);
            if(!is_array($cleanedUpKey)) {
                $cleanedUpKey = trim($cleanedUpKey);
            }
            if((is_array($value) && sizeof($value) > 0) ||
                (!is_array($value) && !is_null($value))) {
                $rawArray['config'][$cleanedUpKey] = $value;
            }
        }
        unset($rawArray['config']['name']);
        unset($rawArray['config']['visible']);
        unset($rawArray['config']['displayCond']);
        unset($rawArray['config']['label']);
        unset($rawArray['config']['searchable']);
        unset($rawArray['config']['exclude']);
        return $rawArray;
    }
}
