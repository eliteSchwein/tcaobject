<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs\Options;

/**
 *
 */
class TCACropArea
{

    /**
     * @var float
     */
    protected float $x = 0.0;
    /**
     * @var float
     */
    protected float $y = 0.0;
    /**
     * @var float
     */
    protected float $width = 1.0;
    /**
     * @var float
     */
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
     * @return TCACropArea
     */
    public function setHeight(float $height): TCACropArea
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @param float $width
     * @return TCACropArea
     */
    public function setWidth(float $width): TCACropArea
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @param float $x
     * @return TCACropArea
     */
    public function setX(float $x): TCACropArea
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @param float $y
     * @return TCACropArea
     */
    public function setY(float $y): TCACropArea
    {
        $this->y = $y;
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
