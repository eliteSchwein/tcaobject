<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\Inputs\Options\TCACropVariant;
use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputImageManipulaton extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $type = 'imageManipulation';
    /**
     * @var string|null
     */
    protected ?string $allowedExtensions = null;

    /**
     * @var array
     */
    protected array $cropVariants = [];

    /**
     * @return array
     */
    public function getCropVariants(): array
    {
        return $this->cropVariants;
    }

    /**
     * @param array $cropVariants
     * @return TCAInputImageManipulaton
     */
    public function setCropVariants(array $cropVariants): TCAInputImageManipulaton
    {
        $this->cropVariants = $cropVariants;
        return $this;
    }

    /**
     * @param TCACropVariant $cropVariant
     * @return TCAInputImageManipulaton
     */
    public function addCropVariant(TCACropVariant $cropVariant): TCAInputImageManipulaton
    {
        $this->cropVariants[$cropVariant->getName()] = $cropVariant->asArray();
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAllowedExtensions(): ?string
    {
        return $this->allowedExtensions;
    }

    /**
     * @param string|null $allowedExtensions
     * @return TCAInputImageManipulaton
     */
    public function setAllowedExtensions(?string $allowedExtensions): TCAInputImageManipulaton
    {
        $this->allowedExtensions = $allowedExtensions;
        return $this;
    }

    /**
     * @param string $allowedExtensions
     * @return TCAInputImageManipulaton
     */
    public function addAllowedExtensions(string $allowedExtensions): TCAInputImageManipulaton
    {
        if($this->allowedExtensions === null) {
            $this->allowedExtensions = '';
        }
        $this->allowedExtensions .= ','.$allowedExtensions;
        return $this;
    }
}
