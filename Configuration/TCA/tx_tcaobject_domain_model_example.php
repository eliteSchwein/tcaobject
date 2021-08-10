<?php

use ThomasLudwig\Tcaobject\TCA\DefaultTCA;
use ThomasLudwig\Tcaobject\TCA\Inputs\FieldControls\TCAFieldControlAddRecord;
use ThomasLudwig\Tcaobject\TCA\Inputs\FieldControls\TCAFieldControlEditPopup;
use ThomasLudwig\Tcaobject\TCA\Inputs\FieldControls\TCAFieldControlListModule;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputInput;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputSelect;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputText;
use ThomasLudwig\Tcaobject\TCA\TCAPaletteBase;
use ThomasLudwig\Tcaobject\TCA\TCARenderTypes;
use ThomasLudwig\Tcaobject\TCA\TCASpacer;

$tca = new DefaultTCA('tx_tcaobject_domain_model_example');
$tca->setTitle('LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example');
$tca->setLabel('string_example');
$tca->setIconFile('EXT:tcaobject/Resources/Public/Icons/tx_tcaobject_domain_model_example.gif');

$stringInput = new TCAInputInput();
$stringInput->setVisible(false);
$stringInput->setName('string_example');
$stringInput->setLabel('LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.string_example');

$tca->addInput($stringInput);

$textInput = new TCAInputText();
$textInput->setVisible(false);
$textInput->setLabel('LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.text_example');
$textInput->setName('text_example');
$textInput->setRichText(true);

$tca->addInput($textInput);


$inputPalette = new TCAPaletteBase();
$inputPalette->setName('inputpalette');
$inputPalette->setLabel('Inputs');
$inputPalette->addItem($stringInput->getName());

$tca->addPalette($inputPalette);

$spacer = new TCASpacer();
$spacer->setName('spacer');

$tca->addSpacer($spacer);

$textPalette = new TCAPaletteBase();
$textPalette->setName('textpalette');
$textPalette->setLabel('Text Example');
$textPalette->addItem($textInput->getName());

$tca->addPalette($textPalette);

$listModuleFC = new TCAFieldControlListModule();
$listModuleFC->setDisabled(true);

$relatedSelect = new TCAInputSelect();
$relatedSelect->setName('example2input');
$relatedSelect->setLabel('Example 2 Input');
$relatedSelect->setMaxItems(9999);
$relatedSelect->setMultiple(0);
$relatedSelect->setRenderType(TCARenderTypes::selectMultipleSideBySide);
$relatedSelect->setAutoSizeMax(30);
$relatedSelect->setSize(10);
$relatedSelect->setForeignTable('tx_tcaobject_domain_model_example2');
$relatedSelect->setRelation('tx_tcaobject_example_example2_mm');
$relatedSelect->addFieldControl(new TCAFieldControlEditPopup());
$relatedSelect->addFieldControl(new TCAFieldControlAddRecord());
$relatedSelect->addFieldControl($listModuleFC);

$tca->addInput($relatedSelect);

return $tca->asArray();
