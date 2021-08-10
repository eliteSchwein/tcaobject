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
     */
    public function setRows(int $rows): void
    {
        $this->rows = $rows;
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
     */
    public function setColumns(int $cols): void
    {
        $this->cols = $cols;
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
     */
    public function setRichTextConfiguration(string $richTextConfiguration): void
    {
        $this->richtextConfiguration = $richTextConfiguration;
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
     */
    public function setRichText(bool $richText): void
    {
        $this->enableRichtext = $richText;
    }
}
