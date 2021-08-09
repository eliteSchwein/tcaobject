<?php

namespace ThomasLudwig\Tcaobject\TCA;

use ThomasLudwig\Tcaobject\TCA\Controls\Administration;
use ThomasLudwig\Tcaobject\TCA\Controls\Locale;
use ThomasLudwig\Tcaobject\TCA\Controls\Misc;

class TCA
{
    protected string $title = '';
    protected string $label = '';
    protected string $iconFile = '';
    protected string $descriptionColumn = '';
    protected string $delete = 'deleted';
    protected string $databaseTable = '';

    protected array $inputs = [];
    protected array $enableColumns = [];

    protected Misc $misc;
    protected Administration $administration;
    protected Locale $locale;

    protected array $rawArray = [
        'ctrl' => [
            'searchFields' => ''
        ],
        'types' => [
            '1' => ['showitem' => '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access']
        ],
        'columns' => []
    ];

    public function __construct()
    {
        $this->misc = new Misc();
        $this->administration = new Administration();
        $this->locale = new Locale();
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
     * @param array $inputs
     */
    public function setInputs(array $inputs): void
    {
        $this->inputs = $inputs;
    }


    public function addInput(TCAInputBase $input) {
        array_push($this->inputs, $input);
    }

    /**
     * @return array
     */
    public function getInputs(): array
    {
        return $this->inputs;
    }

    public function removeInput(string $datasetName)
    {
        foreach ($this->inputs as $key => $value) {
            if($value->getDatasetName() === $datasetName) {
                unset($this->inputs[$key]);
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

    public function removeEnableColumn(string $enableColumn): void
    {
        if (($key = array_search($enableColumn, $this->enableColumns)) !== false) {
            unset($this->enableColumns[$key]);
        }
    }

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

    public function asArray(): array
    {
        $this->parseSection('ctrl', $this->administration->asArray());
        $this->parseSection('ctrl', $this->locale->asArray());
        $this->parseSection('ctrl', $this->misc->asArray());

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

        $this->parseInputs();

        return $this->rawArray;
    }
    protected function parseInputs() {
        foreach ($this->getInputs() as $key => $input) {
            $dataname = $input->getDatasetName();
            $this->rawArray['columns'][$dataname] = $input->asArray();
            if($input->isSearchable()) {
                $searchableList = $this->rawArray['ctrl']['searchFields'];
                $searchableList = $searchableList.', '.$dataname;
                $this->rawArray['ctrl']['searchFields'] = $searchableList;
            }
            if($input->isVisible()) {
                $visibleList = $this->rawArray['types']['1']['showitem'];
                $visibleList = $visibleList.', '.$dataname;
                $this->rawArray['types']['1']['showitem'] = $visibleList;
            }
        }
    }

    protected function parseSection($inArray, $section) {
        foreach ((array) $section as $key => $value){
            $cleanedUpKey = str_replace('*', '', $key);
            $this->rawArray[$inArray][$cleanedUpKey] = $value;
        }
    }
}
