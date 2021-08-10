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
     * @return Misc
     */
    public function setTimeStamp(?string $tstamp): Misc
    {
        $this->tstamp = $tstamp;
        return $this;
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
     * @return Misc
     */
    public function setCreateDate(?string $crdate): Misc
    {
        $this->crdate = $crdate;
        return $this;
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
     * @return Misc
     */
    public function setCreateUserId(?string $cruser_id): Misc
    {
        $this->cruser_id = $cruser_id;
        return $this;
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
     * @return Misc
     */
    public function setVersioning(?bool $versioning): Misc
    {
        $this->versioningWS = $versioning;
        return $this;
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
     * @return Misc
     */
    public function setRootLevel(?int $rootLevel): Misc
    {
        $this->rootLevel = $rootLevel;
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
