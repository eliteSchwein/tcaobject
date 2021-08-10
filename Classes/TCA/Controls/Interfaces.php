<?php

namespace ThomasLudwig\Tcaobject\TCA\Controls;

/**
 *
 */
class Interfaces
{
    /**
     * @var int
     */
    protected int $maxDBListItems = 20;
    /**
     * @var int
     */
    protected int $maxSingleDBListItems = 100;

    /**
     * @return int
     */
    public function getMaxDBListItems(): int
    {
        return $this->maxDBListItems;
    }

    /**
     * @return int
     */
    public function getMaxSingleDBListItems(): int
    {
        return $this->maxSingleDBListItems;
    }

    /**
     * @param int $maxDBListItems
     */
    public function setMaxDBListItems(int $maxDBListItems): void
    {
        $this->maxDBListItems = $maxDBListItems;
    }

    /**
     * @param int $maxSingleDBListItems
     */
    public function setMaxSingleDBListItems(int $maxSingleDBListItems): void
    {
        $this->maxSingleDBListItems = $maxSingleDBListItems;
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
