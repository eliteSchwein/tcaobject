<?php

namespace ThomasLudwig\Tcaobject\TCA;

use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputCheck;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputDateTimeInteger;

class TCA
{
    protected string $title = '';
    protected string $label = '';
    protected string $iconFile = '';
    protected string $delete = 'deleted';
    protected string $tstamp = 'tstamp';
    protected string $crdate = 'crdate';
    protected string $cruser_id = 'cruser_id';
    protected string $languageField = 'sys_language_uid';
    protected string $transOrigPointerField = 'l10n_parent';
    protected string $transOrigDiffSourceField = 'l10n_diffsource';
    protected bool $versioning = true;
    protected array $inputs = [];
    protected array $enableColumns = [];

    public function __construct()
    {
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
     * @return string
     */
    public function getTimeStamp(): string
    {
        return $this->tstamp;
    }

    /**
     * @param string $tstamp
     */
    public function setTimeStamp(string $tstamp): void
    {
        $this->tstamp = $tstamp;
    }

    /**
     * @return string
     */
    public function getCreateDate(): string
    {
        return $this->crdate;
    }

    /**
     * @param string $crdate
     */
    public function setCreateDate(string $crdate): void
    {
        $this->crdate = $crdate;
    }

    /**
     * @return string
     */
    public function getCreateUserId(): string
    {
        return $this->cruser_id;
    }

    /**
     * @param string $cruser_id
     */
    public function setCreateUserId(string $cruser_id): void
    {
        $this->cruser_id = $cruser_id;
    }

    /**
     * @return bool
     */
    public function isVersioning(): bool
    {
        return $this->versioning;
    }

    /**
     * @param bool $versioning
     */
    public function setVersioning(bool $versioning): void
    {
        $this->versioning = $versioning;
    }

    /**
     * @return string
     */
    public function getLanguageField(): string
    {
        return $this->languageField;
    }

    /**
     * @param string $languageField
     */
    public function setLanguageField(string $languageField): void
    {
        $this->languageField = $languageField;
    }

    /**
     * @return string
     */
    public function getTransOrigPointerField(): string
    {
        return $this->transOrigPointerField;
    }

    /**
     * @return string
     */
    public function getTransOrigDiffSourceField(): string
    {
        return $this->transOrigDiffSourceField;
    }

    /**
     * @param string $transOrigPointerField
     */
    public function setTransOrigPointerField(string $transOrigPointerField): void
    {
        $this->transOrigPointerField = $transOrigPointerField;
    }

    /**
     * @param string $transOrigDiffSourceField
     */
    public function setTransOrigDiffSourceField(string $transOrigDiffSourceField): void
    {
        $this->transOrigDiffSourceField = $transOrigDiffSourceField;
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
}
