<?php

namespace ThomasLudwig\Tcaobject\TCA\Controls;

class Misc
{
    protected string $tstamp = 'tstamp';
    protected string $crdate = 'crdate';
    protected string $cruser_id = 'cruser_id';

    protected bool $versioning = true;

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
}
