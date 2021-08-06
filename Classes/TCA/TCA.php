<?php

namespace ThomasLudwig\Tcaobject\TCA;

use ThomasLudwig\Tcaobject\TCA\Controls\Administration;
use ThomasLudwig\Tcaobject\TCA\Controls\Locale;
use ThomasLudwig\Tcaobject\TCA\Controls\Misc;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputCheck;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputDateTimeInteger;

class TCA
{
    protected string $title = '';
    protected string $label = '';
    protected string $iconFile = '';
    protected string $descriptionColumn = '';
    protected string $delete = 'deleted';

    protected array $inputs = [];
    protected array $enableColumns = [];

    protected Misc $misc;
    protected Administration $administration;
    protected Locale $locale;

    public function __construct()
    {
        $this->misc = new Misc();
        $this->administration = new Administration();
        $this->locale = new Locale();

        $hidden = new TCAInputCheck();
        $hidden->setDatasetName('hidden');
        $hidden->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible');
        $hidden->addItem(0, '');
        $hidden->addItem(1, '');
        $hidden->addItem('invertStateDisplay', true);

        $starttime = new TCAInputDateTimeInteger();
        $starttime->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime');
        $starttime->addBehavior('allowLanguageSynchronization', true);

        $endtime = new TCAInputDateTimeInteger();
        $endtime->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime');
        $endtime->addBehavior('upper', mktime(0, 0, 0, 1, 1, 2038));
        $endtime->addBehavior('allowLanguageSynchronization', true);

        $this->addInput($hidden);
        $this->addInput($starttime);
        $this->addInput($endtime);
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

    public function addEnableColumn(string $enableColumn): void
    {
        array_push($this->enableColumns, $enableColumn);
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
}
