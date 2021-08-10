<?php

declare(strict_types=1);

namespace ThomasLudwig\Tcaobject\Controller;


use ThomasLudwig\Tcaobject\Misc\LabelFuncTest;
use ThomasLudwig\Tcaobject\TCA\DefaultTCA;
use ThomasLudwig\Tcaobject\TCA\FieldControls\TCAFieldControlAddRecord;
use ThomasLudwig\Tcaobject\TCA\FieldControls\TCAFieldControlEditPopup;
use ThomasLudwig\Tcaobject\TCA\FieldControls\TCAFieldControlListModule;
use ThomasLudwig\Tcaobject\TCA\Inputs\Options\TCAAspectRatio;
use ThomasLudwig\Tcaobject\TCA\Inputs\Options\TCACropArea;
use ThomasLudwig\Tcaobject\TCA\Inputs\Options\TCACropVariant;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputImageManipulaton;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputInput;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputSelect;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputText;
use ThomasLudwig\Tcaobject\TCA\TCAPaletteBase;
use ThomasLudwig\Tcaobject\TCA\TCARenderTypes;
use ThomasLudwig\Tcaobject\TCA\TCASpacer;

/**
 * This file is part of the "TCAObject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021
 */


/**
 * ExampleController
 */
class ExampleController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * exampleRepository
     *
     * @var \ThomasLudwig\Tcaobject\Domain\Repository\ExampleRepository
     */
    protected $exampleRepository = null;

    /**
     * @param \ThomasLudwig\Tcaobject\Domain\Repository\ExampleRepository $exampleRepository
     */
    public function injectExampleRepository(\ThomasLudwig\Tcaobject\Domain\Repository\ExampleRepository $exampleRepository)
    {
        $this->exampleRepository = $exampleRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
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

        debug($tca->asArray());
    }

    /**
     * action show
     *
     * @param \ThomasLudwig\Tcaobject\Domain\Model\Example $example
     * @return string|object|null|void
     */
    public function showAction(\ThomasLudwig\Tcaobject\Domain\Model\Example $example)
    {
        $this->view->assign('example', $example);
    }
}
