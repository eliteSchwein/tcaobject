<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs\Options;

/**
 *
 */
class TCACropVariant
{
    /**
     * @var string|null
     */
    protected ?string $selectedRatio = null;
    /**
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * @var string|null
     */
    protected ?string $title = null;

    /**
     * @var array
     */
    protected array $allowedAspectRatios = [];

    /**
     * @var TCACropArea
     */
    protected TCACropArea $cropArea;

    /**
     *
     */
    public function __construct() {
        $this->cropArea = new TCACropArea();
    }

    /**
     * @return TCACropArea
     */
    public function getCropArea(): TCACropArea
    {
        return $this->cropArea;
    }

    /**
     * @param TCACropArea $cropArea
     * @return TCACropVariant
     */
    public function setCropArea(TCACropArea $cropArea): TCACropVariant
    {
        $this->cropArea = $cropArea;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return TCACropVariant
     */
    public function setName(?string $name): TCACropVariant
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string|null $title
     * @return TCACropVariant
     */
    public function setTitle(?string $title): TCACropVariant
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return array
     */
    public function getAllowedAspectRatios(): array
    {
        return $this->allowedAspectRatios;
    }

    /**
     * @param array $allowedAspectRatios
     * @return TCACropVariant
     */
    public function setAllowedAspectRatios(array $allowedAspectRatios): TCACropVariant
    {
        $this->allowedAspectRatios = $allowedAspectRatios;
        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return TCACropVariant
     */
    public function addAllowedAspectRatio($key, $value): TCACropVariant
    {
        $this->allowedAspectRatios[$key] = $value->asArray();
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSelectedRatio(): ?string
    {
        return $this->selectedRatio;
    }

    /**
     * @param string|null $selectedRatio
     * @return TCACropVariant
     */
    public function setSelectedRatio(?string $selectedRatio): TCACropVariant
    {
        $this->selectedRatio = $selectedRatio;
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
