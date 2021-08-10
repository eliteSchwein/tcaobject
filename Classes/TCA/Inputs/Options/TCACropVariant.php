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
     */
    public function setCropArea(TCACropArea $cropArea): void
    {
        $this->cropArea = $cropArea;
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
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
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
     */
    public function setAllowedAspectRatios(array $allowedAspectRatios): void
    {
        $this->allowedAspectRatios = $allowedAspectRatios;
    }

    /**
     * @param $key
     * @param $value
     */
    public function addAllowedAspectRatio($key, $value)
    {
        $this->allowedAspectRatios[$key] = $value->asArray();
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
     */
    public function setSelectedRatio(?string $selectedRatio): void
    {
        $this->selectedRatio = $selectedRatio;
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
