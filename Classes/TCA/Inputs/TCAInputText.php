<?php

namespace ThomasLudwig\Tcaobject\TCA\Inputs;

use ThomasLudwig\Tcaobject\TCA\TCAInputBase;

class TCAInputText extends TCAInputBase
{
    protected string $type = 'text';
    protected string $eval = 'trim';
    protected string $richTextConfiguration = 'default';
    protected bool $richText = false;
    protected int $size = -1;
    protected int $cols = 40;
    protected int $rows = 15;

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
        return $this->richTextConfiguration;
    }

    /**
     * @param string $richTextConfiguration
     */
    public function setRichTextConfiguration(string $richTextConfiguration): void
    {
        $this->richTextConfiguration = $richTextConfiguration;
    }

    /**
     * @return bool
     */
    public function isRichText(): bool
    {
        return $this->richText;
    }

    /**
     * @param bool $richText
     */
    public function setRichText(bool $richText): void
    {
        $this->richText = $richText;
    }
}
