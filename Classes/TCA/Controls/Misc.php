<?php

namespace ThomasLudwig\Tcaobject\TCA\Controls;

class Misc
{
    protected string $tstamp = 'tstamp';
    protected string $crdate = 'crdate';
    protected string $cruser_id = 'cruser_id';

    protected bool $versioningWS = true;

    protected int $rootLevel = 0;

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
        return $this->versioningWS;
    }

    /**
     * @param bool $versioning
     */
    public function setVersioning(bool $versioning): void
    {
        $this->versioningWS = $versioning;
    }

    /**
     * @return int
     */
    public function getRootLevel(): int
    {
        return $this->rootLevel;
    }

    /**
     * @param int $rootLevel
     */
    public function setRootLevel(int $rootLevel): void
    {
        $this->rootLevel = $rootLevel;
    }

    public function asArray(): array
    {
        $rawArray = [];
        foreach ((array) $this as $key => $value) {
            $cleanedUpKey = str_replace('*', '', $key);
            $cleanedUpKey = trim($cleanedUpKey);
            $rawArray[$cleanedUpKey] = $value;
        }
        return $rawArray;
    }
}
