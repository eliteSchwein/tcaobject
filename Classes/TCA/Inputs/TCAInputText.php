<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

/**
 *
 */
class TCAInputText extends TCAInputBase
{
    /**
     * @var string|null
     */
    protected ?string $type = 'text';
    /**
     * @var string|null
     */
    protected ?string $eval = 'trim';
    /**
     * @var string|null
     */
    protected ?string $richtextConfiguration = 'default';
    /**
     * @var bool
     */
    protected bool $enableRichtext = false;
    /**
     * @var bool|null
     */
    protected ?bool $searchable = true;
    /**
     * @var int|null
     */
    protected ?int $size = -1;
    /**
     * @var int
     */
    protected int $cols = 40;
    /**
     * @var int
     */
    protected int $rows = 15;
    /**
     * @var string
     */
    protected $default = '';

    /**
     * @return int
     */
    public function getRows(): int
    {
        return $this->rows;
    }

    /**
     * @param int $rows
     * @return TCAInputText
     */
    public function setRows(int $rows): TCAInputText
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * @return int
     */
    public function getColumns(): int
    {
        return $this->cols;
    }

    /**
     * @param int $cols
     * @return TCAInputText
     */
    public function setColumns(int $cols): TCAInputText
    {
        $this->cols = $cols;
        return $this;
    }

    /**
     * @return string
     */
    public function getRichTextConfiguration(): string
    {
        return $this->richtextConfiguration;
    }

    /**
     * @param string $richTextConfiguration
     * @return TCAInputText
     */
    public function setRichTextConfiguration(string $richTextConfiguration): TCAInputText
    {
        $this->richtextConfiguration = $richTextConfiguration;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRichText(): bool
    {
        return $this->enableRichtext;
    }

    /**
     * @param bool $richText
     * @return TCAInputText
     */
    public function setRichText(bool $richText): TCAInputText
    {
        $this->enableRichtext = $richText;
        return $this;
    }
}
