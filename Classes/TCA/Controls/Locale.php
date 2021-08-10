<?php

namespace ThomasLudwig\Tcaobject\TCA\Controls;

/**
 *
 */
class Locale
{
    /**
     * @var string|null
     */
    protected ?string $languageField = 'sys_language_uid';
    /**
     * @var string|null
     */
    protected ?string $transOrigPointerField = 'l10n_parent';
    /**
     * @var string|null
     */
    protected ?string $transOrigDiffSourceField = 'l10n_diffsource';

    /**
     * @return ?string
     */
    public function getLanguageField(): ?string
    {
        return $this->languageField;
    }

    /**
     * @param ?string $languageField
     * @return Locale
     */
    public function setLanguageField(?string $languageField): Locale
    {
        $this->languageField = $languageField;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getTransOrigPointerField(): ?string
    {
        return $this->transOrigPointerField;
    }

    /**
     * @return ?string
     */
    public function getTransOrigDiffSourceField(): ?string
    {
        return $this->transOrigDiffSourceField;
    }

    /**
     * @param ?string $transOrigPointerField
     * @return Locale
     */
    public function setTransOrigPointerField(?string $transOrigPointerField): Locale
    {
        $this->transOrigPointerField = $transOrigPointerField;
        return $this;
    }

    /**
     * @param ?string $transOrigDiffSourceField
     * @return Locale
     */
    public function setTransOrigDiffSourceField(?string $transOrigDiffSourceField): Locale
    {
        $this->transOrigDiffSourceField = $transOrigDiffSourceField;
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
