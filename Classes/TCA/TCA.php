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
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
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
     */
    public function setIconFile(string $iconFile): void
    {
        $this->iconFile = $iconFile;
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
     */
    public function setComponents(array $components): void
    {
        $this->components = $components;
    }

    /**
     * @param TCAPaletteBase $palette
     */
    public function addPalette(TCAPaletteBase $palette): void
    {
        $this->components[] = $palette;
    }

    /**
     * @param TCAInputBase $input
     */
    public function addInput(TCAInputBase $input) {
        $this->components[] = $input;
    }

    /**
     * @param TCASpacer $spacer
     */
    public function addSpacer(TCASpacer $spacer) {
        $this->components[] = $spacer;
    }

    /**
     * @param string $name
     */
    public function removeInput(string $name)
    {
        foreach ($this->components as $key => $value) {
            if($value instanceof TCAInputBase &&
                $value->getName() === $name) {
                unset($this->components[$key]);
            }
        }
    }

    /**
     * @param string $name
     */
    public function removePalette(string $name) {
        foreach ($this->components as $key => $value) {
            if($value instanceof TCAPaletteBase &&
                $value->getName() === $name) {
                unset($this->components[$key]);
            }
        }
    }

    /**
     * @param string $name
     */
    public function removeSpacer(string $name) {
        foreach($this->components as $key => $value) {
            if($value instanceof TCASpacer &&
                $value->getName() === $name) {
                unset($this->components[$key]);
            }
        }
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
     */
    public function setEnableColumns(array $enableColumns): void
    {
        $this->enableColumns = $enableColumns;
    }

    /**
     * @param string $enableColumn
     */
    public function removeEnableColumn(string $enableColumn): void
    {
        if (($key = array_search($enableColumn, $this->enableColumns)) !== false) {
            unset($this->enableColumns[$key]);
        }
    }

    /**
     * @param $key
     * @param $value
     */
    public function addEnableColumn($key, $value): void
    {
        $this->enableColumns[$key] = $value;
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
     */
    public function setDescriptionColumn(string $descriptionColumn): void
    {
        $this->descriptionColumn = $descriptionColumn;
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
     */
    public function setMisc(Misc $misc): void
    {
        $this->misc = $misc;
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
     */
    public function setAdministration(Administration $administration): void
    {
        $this->administration = $administration;
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
     */
    public function setLocale(Locale $locale): void
    {
        $this->locale = $locale;
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
     */
    public function setDatabaseTable(string $databaseTable): void
    {
        $this->databaseTable = $databaseTable;
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
    public function setLabelUserFunc($label_userFunc): void
    {
        $this->label_userFunc = $label_userFunc;
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
     */
    public function setInterfaces(Interfaces $interfaces): void
    {
        $this->interfaces = $interfaces;
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
