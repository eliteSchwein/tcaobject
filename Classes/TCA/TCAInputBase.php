<?php

namespace ThomasLudwig\Tcaobject\TCA;

use ThomasLudwig\Tcaobject\TCA\Inputs\TCAAppearanceBase;

/**
 *
 */
class TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * @var string|null
     */
    protected ?string $label = null;
    /**
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * @var string|null
     */
    protected ?string $databaseType = null;
    /**
     * @var string|null
     */
    protected ?string $eval = null;
    /**
     * @var string|null
     */
    protected ?string $renderType = null;
    /**
     * @var string|null
     */
    protected ?string $foreign_table = null;
    /**
     * @var string|null
     */
    protected ?string $foreign_table_where = null;
    /**
     * @var string|null
     */
    protected ?string $displayCond = null;
    /**
     * @var string|null
     */
    protected ?string $special = null;
    /**
     * @var string|null
     */
    protected ?string $itemsProcFunc = null;

    /**
     * @var bool|null
     */
    protected ?bool $visible = true;
    /**
     * @var bool|null
     */
    protected ?bool $searchable = false;
    /**
     * @var bool|null
     */
    protected ?bool $requiresItems = null;
    /**
     * @var bool|null
     */
    protected ?bool $exclude = true;
    /**
     * @var bool|null
     */
    protected ?bool $readOnly = null;

    /**
     * @var int|null
     */
    protected ?int $size = null;
    /**
     * @var int|null
     */
    protected ?int $maxItems = null;
    /**
     * @var int|null
     */
    protected ?int $minItems = null;
    /**
     * @var int|null
     */
    protected ?int $multiple = null;
    /**
     * @var int|null
     */
    protected ?int $autoSizeMax = null;
    /**
     * @var int|null
     */
    protected ?int $autoSizeMin = null;

    /**
     * @var array
     */
    protected array $fieldControl = [];
    /**
     * @var array
     */
    protected array $items = [];
    /**
     * @var array
     */
    protected array $behaviour = [];
    /**
     * @var array
     */
    protected array $appearance = [];
    /**
     * @var array
     */
    protected array $range = [];
    /**
     * @var array
     */
    protected array $itemsProcConfig = [];

    /**
     * @var mixed|null
     */
    protected $default = null;

    /**
     * @param bool $useItemsProcFunc
     */
    function __construct(bool $useItemsProcFunc = false) {
        if($useItemsProcFunc) {
            $this->itemsProcFunc = get_class($this) . '->itemsProcFunc';
        }
    }

    /**
     * @param $configuration
     */
    public function itemsProcFunc(&$configuration) {

    }

    /**
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return TCAInputBase
     */
    public function setLabel(string $label): TCAInputBase
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param mixed $default
     */
    public function setDefault($default): TCAInputBase
    {
        $this->default = $default;
        return $this;
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
     * @return TCAInputBase
     */
    public function setSize(int $size): TCAInputBase
    {
        $this->size = $size;
        return $this;
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
     * @return TCAInputBase
     */
    public function setEval(string $eval): TCAInputBase
    {
        $this->eval = $eval;
        return $this;
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
     * @return TCAInputBase
     */
    public function setName(string $name): TCAInputBase
    {
        $this->name = $name;
        return $this;
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
     * @return TCAInputBase
     */
    public function setFieldControls(array $fieldControls): TCAInputBase
    {
        $this->fieldControl = $fieldControls;
        return $this;
    }

    /**
     * @param TCAFieldControlBase $fieldControl
     * @return TCAInputBase
     */
    public function addFieldControl(TCAFieldControlBase $fieldControl): TCAInputBase
    {
        $this->fieldControl[$fieldControl->getType()] = $fieldControl->asArray();
        return $this;
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
     * @return TCAInputBase
     */
    public function setRenderType(string $renderType): TCAInputBase
    {
        $this->renderType = $renderType;
        return $this;
    }

    /**
     * @return null|bool
     */
    public function isRequiresItems(): ?bool
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
     * @return TCAInputBase
     */
    public function setMaxItems(int $maxItems): TCAInputBase
    {
        $this->maxItems = $maxItems;
        return $this;
    }

    /**
     * @param array $items
     * @return TCAInputBase
     */
    public function setItems(array $items): TCAInputBase
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param $key
     * @param null $id
     * @param null $icon
     * @return TCAInputBase
     */
    public function addItem($key, $id = null, $icon = null): TCAInputBase
    {
        $entry = [];
        $entry = $this->parseInputFragment($entry, $key);
        $entry = $this->parseInputFragment($entry, $id);
        $entry = $this->parseInputFragment($entry, $icon);
        $this->items[] = $entry;
        return $this;
    }

    /**
     * @param $key
     * @return TCAInputBase
     */
    public function removeItemByKey($key): TCAInputBase
    {
        unset($this->items[$key]);
        return $this;
    }

    /**
     * @param $value
     * @return TCAInputBase
     */
    public function removeItemByValue($value): TCAInputBase
    {
        if (($key = array_search($value, $this->items)) !== false) {
            unset($this->items[$key]);
        }
        return $this;
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
     * @return TCAInputBase
     */
    public function setBehaviour(array $behaviour): TCAInputBase
    {
        $this->behaviour = $behaviour;
        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return TCAInputBase
     */
    public function addBehavior($key, $value): TCAInputBase
    {
        $this->behaviour[$key] = $value;
        return $this;
    }

    /**
     * @param $key
     * @return TCAInputBase
     */
    public function removeBehaviorByKey($key): TCAInputBase
    {
        unset($this->behaviour[$key]);
        return $this;
    }

    /**
     * @param $value
     * @return TCAInputBase
     */
    public function removeBehaviorByValue($value): TCAInputBase
    {
        if (($key = array_search($value, $this->behaviour)) !== false) {
            unset($this->behaviour[$key]);
        }
        return $this;
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
     * @return TCAInputBase
     */
    public function setVisible(?bool $visible): TCAInputBase
    {
        $this->visible = $visible;
        return $this;
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
     * @return TCAInputBase
     */
    public function setSearchable(bool $searchable): TCAInputBase
    {
        $this->searchable = $searchable;
        return $this;
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
     * @return TCAInputBase
     */
    public function setRange(array $range): TCAInputBase
    {
        $this->range = $range;
        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return TCAInputBase
     */
    public function addRange($key, $value): TCAInputBase
    {
        $this->range[$key] = $value;
        return $this;
    }

    /**
     * @param $key
     * @return TCAInputBase
     */
    public function removeRangeByKey($key): TCAInputBase
    {
        unset($this->range[$key]);
        return $this;
    }

    /**
     * @param $value
     * @return TCAInputBase
     */
    public function removeRangeByValue($value): TCAInputBase
    {
        if (($key = array_search($value, $this->range)) !== false) {
            unset($this->range[$key]);
        }
        return $this;
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
     * @return TCAInputBase
     */
    public function setForeignTable(string $foreign_table): TCAInputBase
    {
        $this->foreign_table = $foreign_table;
        return $this;
    }

    /**
     * @param string $foreign_table_where
     * @return TCAInputBase
     */
    public function setForeignTableWhere(string $foreign_table_where): TCAInputBase
    {
        $this->foreign_table_where = $foreign_table_where;
        return $this;
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
     * @return TCAInputBase
     */
    public function setDisplayCond(string $displayCond): TCAInputBase
    {
        $this->displayCond = $displayCond;
        return $this;
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
     * @return TCAInputBase
     */
    public function setExclude(?bool $exclude): TCAInputBase
    {
        $this->exclude = $exclude;
        return $this;
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
     * @return TCAInputBase
     */
    public function setSpecial(?string $special): TCAInputBase
    {
        $this->special = $special;
        return $this;
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
     * @return TCAInputBase
     */
    public function setMinItems(?int $minItems): TCAInputBase
    {
        $this->minItems = $minItems;
        return $this;
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
     * @return TCAInputBase
     */
    public function setItemsProcFunc(?string $itemsProcFunc): TCAInputBase
    {
        $this->itemsProcFunc = $itemsProcFunc;
        return $this;
    }

    /**
     * @param array $itemsProcConfig
     * @return TCAInputBase
     */
    public function setItemsProcConfig(array $itemsProcConfig): TCAInputBase
    {
        $this->itemsProcConfig = $itemsProcConfig;
        return $this;
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
     * @return TCAInputBase
     */
    public function addItemProcConfig($key, $value): TCAInputBase
    {
        $this->itemsProcConfig[$key] = $value;
        return $this;
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
     * @return TCAInputBase
     */
    public function setReadOnly(?bool $readOnly): TCAInputBase
    {
        $this->readOnly = $readOnly;
        return $this;
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
     * @return TCAInputBase
     */
    public function setMultiple(?int $multiple): TCAInputBase
    {
        $this->multiple = $multiple;
        return $this;
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
     * @return TCAInputBase
     */
    public function setAutoSizeMax(?int $autoSizeMax): TCAInputBase
    {
        $this->autoSizeMax = $autoSizeMax;
        return $this;
    }

    /**
     * @param int|null $autoSizeMin
     * @return TCAInputBase
     */
    public function setAutoSizeMin(?int $autoSizeMin): TCAInputBase
    {
        $this->autoSizeMin = $autoSizeMin;
        return $this;
    }

    /**
     * @return array
     */
    public function getAppearance(): array
    {
        return $this->appearance;
    }

    /**
     * @param array $appearance
     * @return TCAInputBase
     */
    public function setAppearance(array $appearance): TCAInputBase
    {
        $this->appearance = $appearance;
        return $this;
    }

    /**
     * @param TCAAppearanceBase $appearance
     * @return TCAInputBase
     */
    public function addAppearance(TCAAppearanceBase $appearance): TCAInputBase
    {
        $this->appearance[$appearance->getType()] = $appearance->getValue();
        return $this;
    }

    /**
     * @return array
     */
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

    /**
     * @param array $array
     * @param $fragment
     * @return array
     */
    protected function parseInputFragment(array $array, $fragment): array
    {
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
}
