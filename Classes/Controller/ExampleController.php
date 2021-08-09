<?php

declare(strict_types=1);

namespace ThomasLudwig\Tcaobject\Controller;


use ThomasLudwig\Tcaobject\TCA\DefaultTCA;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputInput;

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
        $tca->setLabel('example');

        $stringInput = new TCAInputInput();
        $stringInput->setDatasetName('string_example');
        $stringInput->setLabel('LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.string_example');

        $tca->addInput($stringInput);

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
