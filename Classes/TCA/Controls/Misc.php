<?php

namespace ThomasLudwig\Tcaobject\TCA\Controls;

/**
 *
 */
class Misc
{
    /**
     * @var string|null
     */
    protected ?string $tstamp = 'tstamp';
    /**
     * @var string|null
     */
    protected ?string $crdate = 'crdate';
    /**
     * @var string|null
     */
    protected ?string $cruser_id = 'cruser_id';

    /**
     * @var bool|null
     */
    protected ?bool $versioningWS = true;

    /**
     * @var int|null
     */
    protected ?int $rootLevel = null;

    /**
     * @return ?string
     */
    public function getTimeStamp(): ?string
    {
        return $this->tstamp;
    }

    /**
     * @param ?string $tstamp
     */
    public function setTimeStamp(?string $tstamp): void
    {
        $this->tstamp = $tstamp;
    }

    /**
     * @return ?string
     */
    public function getCreateDate(): ?string
    {
        return $this->crdate;
    }

    /**
     * @param ?string $crdate
     */
    public function setCreateDate(?string $crdate): void
    {
        $this->crdate = $crdate;
    }

    /**
     * @return ?string
     */
    public function getCreateUserId(): ?string
    {
        return $this->cruser_id;
    }

    /**
     * @param ?string $cruser_id
     */
    public function setCreateUserId(?string $cruser_id): void
    {
        $this->cruser_id = $cruser_id;
    }

    /**
     * @return ?bool
     */
    public function isVersioning(): ?bool
    {
        return $this->versioningWS;
    }

    /**
     * @param ?bool $versioning
     */
    public function setVersioning(?bool $versioning): void
    {
        $this->versioningWS = $versioning;
    }

    /**
     * @return ?int
     */
    public function getRootLevel(): ?int
    {
        return $this->rootLevel;
    }

    /**
     * @param ?int $rootLevel
     */
    public function setRootLevel(?int $rootLevel): void
    {
        $this->rootLevel = $rootLevel;
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
