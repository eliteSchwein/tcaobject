<?php

namespace ThomasLudwig\Tcaobject\TCA\Controls;

class Locale
{
    protected string $languageField = 'sys_language_uid';
    protected string $transOrigPointerField = 'l10n_parent';
    protected string $transOrigDiffSourceField = 'l10n_diffsource';

    /**
     * @return string
     */
    public function getLanguageField(): string
    {
        return $this->languageField;
    }

    /**
     * @param string $languageField
     */
    public function setLanguageField(string $languageField): void
    {
        $this->languageField = $languageField;
    }

    /**
     * @return string
     */
    public function getTransOrigPointerField(): string
    {
        return $this->transOrigPointerField;
    }

    /**
     * @return string
     */
    public function getTransOrigDiffSourceField(): string
    {
        return $this->transOrigDiffSourceField;
    }

    /**
     * @param string $transOrigPointerField
     */
    public function setTransOrigPointerField(string $transOrigPointerField): void
    {
        $this->transOrigPointerField = $transOrigPointerField;
    }

    /**
     * @param string $transOrigDiffSourceField
     */
    public function setTransOrigDiffSourceField(string $transOrigDiffSourceField): void
    {
        $this->transOrigDiffSourceField = $transOrigDiffSourceField;
    }
}
