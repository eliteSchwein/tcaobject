<?php

namespace ThomasLudwig\Tcaobject\TCA;

use ThomasLudwig\Tcaobject\TCA\Controls\Administration;
use ThomasLudwig\Tcaobject\TCA\Controls\Interfaces;
use ThomasLudwig\Tcaobject\TCA\Controls\Locale;
use ThomasLudwig\Tcaobject\TCA\Controls\Misc;

/**
 *
 */
class TCA
{
    /**
     * @var string
     */
    protected string $title = '';
    /**
     * @var string
     */
    protected string $label = '';
    /**
     * @var string
     */
    protected string $iconFile = '';
    /**
     * @var string
     */
    protected string $descriptionColumn = '';
    /**
     * @var string
     */
    protected string $delete = 'deleted';
    /**
     * @var string
     */
    protected string $databaseTable = '';

    /**
     * @var array
     */
    protected array $components = [];
    /**
     * @var array
     */
    protected array $enableColumns = [];

    /**
     * @var Misc
     */
    protected Misc $misc;
    /**
     * @var Administration
     */
    protected Administration $administration;
    /**
     * @var Locale
     */
    protected Locale $locale;
    /**
     * @var Interfaces
     */
    protected Interfaces $interfaces;

    /**
     * @var mixed|null
     */
    protected $label_userFunc = null;

    /**
     * @var array
     */
    protected array $rawArray = [
        'ctrl' => [
            'searchFields' => ''
        ],
        'interface' => [],
        'types' => [
            '1' => ['showitem' => '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access']
        ],
        'columns' => [],
        'palettes' => []
    ];

    /**
     * @param bool $useLabelUserFunc
     */
    public function __construct(bool $useLabelUserFunc = false)
    {
        $this->misc = new Misc();
        $this->administration = new Administration();
        $this->locale = new Locale();
        $this->interfaces = new Interfaces();

        if($useLabelUserFunc) {
            $this->label_userFunc = get_class($this) . '->labelUserFunc';
        }
    }

    /**
     * @param $parameters
     */
    public function labelUserFunc(&$parameters)
    {

    }

    /**
     * @param string $title
     * @return TCA
     */
    public function setTitle(string $title): TCA
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $label
     * @return TCA
     */
    public function setLabel(string $label): TCA
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $iconFile
     * @return TCA
     */
    public function setIconFile(string $iconFile): TCA
    {
        $this->iconFile = $iconFile;
        return $this;
    }

    /**
     * @return string
     */
    public function getIconFile(): string
    {
        return $this->iconFile;
    }

    /**
     * @return array
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @param array $components
     * @return TCA
     */
    public function setComponents(array $components): TCA
    {
        $this->components = $components;
        return $this;
    }

    /**
     * @param TCAPaletteBase $palette
     * @return TCA
     */
    public function addPalette(TCAPaletteBase $palette): TCA
    {
        $this->components[] = $palette;
        return $this;
    }

    /**
     * @param TCAInputBase $input
     * @return TCA
     */
    public function addInput(TCAInputBase $input): TCA
    {
        $this->components[] = $input;
        return $this;
    }

    /**
     * @param TCASpacer $spacer
     * @return TCA
     */
    public function addSpacer(TCASpacer $spacer): TCA
    {
        $this->components[] = $spacer;
        return $this;
    }

    /**
     * @param string $name
     * @return TCA
     */
    public function removeInput(string $name): TCA
    {
        foreach ($this->components as $key => $value) {
            if($value instanceof TCAInputBase &&
                $value->getName() === $name) {
                unset($this->components[$key]);
            }
        }
        return $this;
    }

    /**
     * @param string $name
     * @return TCA
     */
    public function removePalette(string $name): TCA
    {
        foreach ($this->components as $key => $value) {
            if($value instanceof TCAPaletteBase &&
                $value->getName() === $name) {
                unset($this->components[$key]);
            }
        }
        return $this;
    }

    /**
     * @param string $name
     * @return TCA
     */
    public function removeSpacer(string $name): TCA
    {
        foreach($this->components as $key => $value) {
            if($value instanceof TCASpacer &&
                $value->getName() === $name) {
                unset($this->components[$key]);
            }
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getDelete(): string
    {
        return $this->delete;
    }

    /**
     * @param string $delete
     */
    public function setDelete(string $delete): void
    {
        $this->delete = $delete;
    }

    /**
     * @return array
     */
    public function getEnableColumns(): array
    {
        return $this->enableColumns;
    }

    /**
     * @param array $enableColumns
     * @return TCA
     */
    public function setEnableColumns(array $enableColumns): TCA
    {
        $this->enableColumns = $enableColumns;
        return $this;
    }

    /**
     * @param string $enableColumn
     * @return TCA
     */
    public function removeEnableColumn(string $enableColumn): TCA
    {
        if (($key = array_search($enableColumn, $this->enableColumns)) !== false) {
            unset($this->enableColumns[$key]);
        }
        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return TCA
     */
    public function addEnableColumn($key, $value): TCA
    {
        $this->enableColumns[$key] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionColumn(): string
    {
        return $this->descriptionColumn;
    }

    /**
     * @param string $descriptionColumn
     * @return TCA
     */
    public function setDescriptionColumn(string $descriptionColumn): TCA
    {
        $this->descriptionColumn = $descriptionColumn;
        return $this;
    }

    /**
     * @return Misc
     */
    public function getMisc(): Misc
    {
        return $this->misc;
    }

    /**
     * @param Misc $misc
     * @return TCA
     */
    public function setMisc(Misc $misc): TCA
    {
        $this->misc = $misc;
        return $this;
    }

    /**
     * @return Administration
     */
    public function getAdministration(): Administration
    {
        return $this->administration;
    }

    /**
     * @param Administration $administration
     * @return TCA
     */
    public function setAdministration(Administration $administration): TCA
    {
        $this->administration = $administration;
        return $this;
    }

    /**
     * @return Locale
     */
    public function getLocale(): Locale
    {
        return $this->locale;
    }

    /**
     * @param Locale $locale
     * @return TCA
     */
    public function setLocale(Locale $locale): TCA
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatabaseTable(): string
    {
        return $this->databaseTable;
    }

    /**
     * @param string $databaseTable
     * @return TCA
     */
    public function setDatabaseTable(string $databaseTable): TCA
    {
        $this->databaseTable = $databaseTable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLabelUserFunc()
    {
        return $this->label_userFunc;
    }

    /**
     * @param mixed $label_userFunc
     */
    public function setLabelUserFunc($label_userFunc): TCA
    {
        $this->label_userFunc = $label_userFunc;
        return $this;
    }

    /**
     * @return Interfaces
     */
    public function getInterfaces(): Interfaces
    {
        return $this->interfaces;
    }

    /**
     * @param Interfaces $interfaces
     * @return TCA
     */
    public function setInterfaces(Interfaces $interfaces): TCA
    {
        $this->interfaces = $interfaces;
        return $this;
    }

    /**
     * @return array
     */
    public function asArray(): array
    {
        $this->parseSection('ctrl', $this->administration->asArray());
        $this->parseSection('ctrl', $this->locale->asArray());
        $this->parseSection('ctrl', $this->misc->asArray());

        $this->parseSection('interface', $this->interfaces->asArray());

        $visibleList = $this->rawArray['types']['1']['showitem'];
        $visibleList = $visibleList.', '.$this->locale->getLanguageField();
        $visibleList = $visibleList.', '.$this->locale->getTransOrigDiffSourceField();
        $visibleList = $visibleList.', '.$this->locale->getTransOrigPointerField();
        $this->rawArray['types']['1']['showitem'] = $visibleList;

        $this->rawArray['ctrl']['title'] = $this->getTitle();
        $this->rawArray['ctrl']['label'] = $this->getLabel();
        $this->rawArray['ctrl']['iconfile'] = $this->getIconFile();
        $this->rawArray['ctrl']['delete'] = $this->getDelete();
        $this->rawArray['ctrl']['enablecolumns'] = $this->getEnableColumns();
        $this->rawArray['ctrl']['descriptionColumn'] = $this->getDescriptionColumn();
        $this->rawArray['ctrl']['label_userFunc'] = $this->getLabelUserFunc();

        $this->parseComponents();

        return $this->rawArray;
    }

    /**
     *
     */
    protected function parseComponents() {
        foreach ($this->getComponents() as $component) {
            $dataname = $component->getName();
            if($component instanceof TCAInputBase) {
                $this->rawArray['columns'][$dataname] = $component->asArray();
                if($component->isSearchable()) {
                    $searchableList = $this->rawArray['ctrl']['searchFields'];
                    $searchableList = $searchableList.','.$dataname;
                    $this->rawArray['ctrl']['searchFields'] = $searchableList;
                }
                if($component->isVisible()) {
                    $this->addShowItem($dataname);
                }
            }
            if($component instanceof TCAPaletteBase) {
                $this->rawArray['palettes'][$dataname] = $component->asArray();
                $this->addShowItem("--palette--;{$component->getLabel()};{$dataname}");
            }
            if($component instanceof TCASpacer) {
                $this->addShowItem('--linebreak--');
            }
        }
    }

    /**
     * @param mixed $item
     */
    protected function addShowItem($item) {
        $visibleList = $this->rawArray['types']['1']['showitem'];
        $visibleList = $visibleList.','.$item;
        $this->rawArray['types']['1']['showitem'] = $visibleList;
    }

    /**
     * @param $inArray
     * @param $section
     */
    protected function parseSection($inArray, $section) {
        foreach ((array) $section as $key => $value){
            $cleanedUpKey = str_replace('*', '', $key);
            $this->rawArray[$inArray][$cleanedUpKey] = $value;
        }
    }
}
