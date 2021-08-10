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
     * @return TCAPaletteBase
     */
    public function setName(?string $name): TCAPaletteBase
    {
        $this->name = $name;
        return $this;
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
     * @return TCAPaletteBase
     */
    public function setLabel(?string $label): TCAPaletteBase
    {
        $this->label = $label;
        return $this;
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
     * @return TCAPaletteBase
     */
    public function setHidden(?bool $hidden): TCAPaletteBase
    {
        $this->hidden = $hidden;
        return $this;
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
     * @return TCAPaletteBase
     */
    public function setItems(?string $items): TCAPaletteBase
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @param string|null $item
     * @return TCAPaletteBase
     */
    public function addItem(?string $item): TCAPaletteBase
    {
       $this->items = $this->items.','.$item;
       return $this;
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
