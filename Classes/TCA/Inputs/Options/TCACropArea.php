<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs\Options;

class TCACropArea
{

    protected float $x = 0.0;
    protected float $y = 0.0;
    protected float $width = 1.0;
    protected float $height = 1.0;

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    /**
     * @param float $x
     */
    public function setX(float $x): void
    {
        $this->x = $x;
    }

    /**
     * @param float $y
     */
    public function setY(float $y): void
    {
        $this->y = $y;
    }

    public function asArray(): array
    {
        $rawArray = [];
        foreach ((array) $this as $key => $value) {
            $cleanedUpKey = str_replace('*', '', $key);
            if(!is_array($cleanedUpKey)) {
                $cleanedUpKey = trim($cleanedUpKey);
            }
            if((is_array($value) && sizeof($value) > 0) ||
                (!is_array($value) && !is_null($value))) {
                $rawArray[$cleanedUpKey] = $value;
            }
        }
        unset($rawArray['name']);
        return $rawArray;
    }
}
