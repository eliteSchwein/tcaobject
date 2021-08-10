<?php

namespace ThomasLudwig\Tcaobject\TCA\Controls;

/**
 *
 */
class Administration
{
    /**
     * @var bool|null
     */
    protected ?bool $hideAtCopy = null;
    /**
     * @var bool|null
     */
    protected ?bool $hideTable = null;
    /**
     * @var bool|null
     */
    protected ?bool $readOnly = null;
    /**
     * @var bool|null
     */
    protected ?bool $adminOnly = null;

    /**
     * @var string|null
     */
    protected ?string $editlock = null;

    /**
     * @return ?bool
     */
    public function isAdminOnly(): ?bool
    {
        return $this->adminOnly;
    }

    /**
     * @param ?bool $adminOnly
     * @return Administration
     */
    public function setAdminOnly(?bool $adminOnly): Administration
    {
        $this->adminOnly = $adminOnly;
        return $this;
    }


    /**
     * @return ?string
     */
    public function getEditLock(): ?string
    {
        return $this->editlock;
    }

    /**
     * @param ?string $editLock
     * @return Administration
     */
    public function setEditLock(?string $editLock): Administration
    {
        $this->editlock = $editLock;
        return $this;
    }

    /**
     * @return ?bool
     */
    public function isHideAtCopy(): ?bool
    {
        return $this->hideAtCopy;
    }

    /**
     * @param ?bool $hideAtCopy
     * @return Administration
     */
    public function setHideAtCopy(?bool $hideAtCopy): Administration
    {
        $this->hideAtCopy = $hideAtCopy;
        return $this;
    }

    /**
     * @return ?bool
     */
    public function isHideTable(): ?bool
    {
        return $this->hideTable;
    }

    /**
     * @param ?bool $hideTable
     * @return Administration
     */
    public function setHideTable(?bool $hideTable): Administration
    {
        $this->hideTable = $hideTable;
        return $this;
    }

    /**
     * @return array
     */
    public function asArray(): array
    {
        $rawArray = [];
        foreach ((array) $this as $key => $value) {
            $cleanedUpKey = str_replace('*', '', $key);
            $cleanedUpKey = trim($cleanedUpKey);

            if((is_array($value) && sizeof($value) > 0) ||
                (!is_array($value) && !is_null($value))) {
                $rawArray[$cleanedUpKey] = $value;
            }
        }
        return $rawArray;
    }
}
