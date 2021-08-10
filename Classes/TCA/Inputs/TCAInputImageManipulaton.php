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
     */
    public function setCropVariants(array $cropVariants): void
    {
        $this->cropVariants = $cropVariants;
    }

    /**
     * @param TCACropVariant $cropVariant
     */
    public function addCropVariant(TCACropVariant $cropVariant) {
        $this->cropVariants[$cropVariant->getName()] = $cropVariant->asArray();
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
     */
    public function setAllowedExtensions(?string $allowedExtensions): void
    {
        $this->allowedExtensions = $allowedExtensions;
    }

    /**
     * @param string $allowedExtensions
     */
    public function addAllowedExtensions(string $allowedExtensions)
    {
        if($this->allowedExtensions === null) {
            $this->allowedExtensions = '';
        }
        $this->allowedExtensions .= ','.$allowedExtensions;
    }
}
