<?php

namespace ThomasLudwig\Tcaobject\TCA;

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
    protected bool $versioning = true;
    protected array $inputs = [];


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
}
