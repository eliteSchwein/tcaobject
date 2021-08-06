<?php

namespace ThomasLudwig\Tcaobject\TCA\Controls;

class Administration
{
    protected bool $hideAtCopy = false;
    protected bool $hideTable = false;
    protected bool $readOnly = false;
    protected bool $adminOnly = false;

    protected string $editLock = '';

    /**
     * @return bool
     */
    public function isAdminOnly(): bool
    {
        return $this->adminOnly;
    }

    /**
     * @param bool $adminOnly
     */
    public function setAdminOnly(bool $adminOnly): void
    {
        $this->adminOnly = $adminOnly;
    }


    /**
     * @return string
     */
    public function getEditLock(): string
    {
        return $this->editLock;
    }

    /**
     * @param string $editLock
     */
    public function setEditLock(string $editLock): void
    {
        $this->editLock = $editLock;
    }

    /**
     * @return bool
     */
    public function isHideAtCopy(): bool
    {
        return $this->hideAtCopy;
    }

    /**
     * @param bool $hideAtCopy
     */
    public function setHideAtCopy(bool $hideAtCopy): void
    {
        $this->hideAtCopy = $hideAtCopy;
    }

    /**
     * @return bool
     */
    public function isHideTable(): bool
    {
        return $this->hideTable;
    }

    /**
     * @param bool $hideTable
     */
    public function setHideTable(bool $hideTable): void
    {
        $this->hideTable = $hideTable;
    }
}
