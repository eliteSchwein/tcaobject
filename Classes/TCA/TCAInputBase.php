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
    protected int $size = 30;
    protected int $maxItems = 9999;
    protected array $fieldControls = [];
    protected array $items = [];
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
}
