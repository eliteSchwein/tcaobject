<?php

namespace ThomasLudwig\Tcaobject\TCA;

/**
 *
 */
class TCAPaletteBase
{
    /**
     * @var string|null
     */
    protected ?string $name = '';
    /**
     * @var string|null
     */
    protected ?string $label = '';
    /**
     * @var string|null
     */
    protected ?string $items = '';

    /**
     * @var bool|null
     */
    protected ?bool $hidden = null;

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
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string|null $label
     */
    public function setLabel(?string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return bool|null
     */
    public function isHidden(): ?bool
    {
        return $this->hidden;
    }

    /**
     * @param bool|null $hidden
     */
    public function setHidden(?bool $hidden): void
    {
        $this->hidden = $hidden;
    }

    /**
     * @return string|null
     */
    public function getItems(): ?string
    {
        return $this->items;
    }

    /**
     * @param string|null $items
     */
    public function setItems(?string $items): void
    {
        $this->items = $items;
    }

    /**
     * @param string|null $item
     */
    public function addItem(?string $item): void
    {
       $this->items = $this->items.','.$item;
    }

    /**
     * @return array
     */
    public function asArray(): array
    {
        $rawArray = [];
        if(!empty($this->getLabel())) {
            $rawArray['label'] = $this->getLabel();
        }
        if(!empty($this->getItems())) {
            $rawArray['showitem'] = $this->getItems();
        }
        if(!empty($this->isHidden())) {
            $rawArray['isHiddenPalette'] = $this->isHidden();
        }
        return $rawArray;
    }
}
