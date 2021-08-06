<?php
declare(strict_types=1);

namespace ThomasLudwig\Tcaobject\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class ExampleControllerTest extends UnitTestCase
{
    /**
     * @var \ThomasLudwig\Tcaobject\Controller\ExampleController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\ThomasLudwig\Tcaobject\Controller\ExampleController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllExamplesFromRepositoryAndAssignsThemToView()
    {
        $allExamples = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $exampleRepository = $this->getMockBuilder(\ThomasLudwig\Tcaobject\Domain\Repository\ExampleRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $exampleRepository->expects(self::once())->method('findAll')->will(self::returnValue($allExamples));
        $this->inject($this->subject, 'exampleRepository', $exampleRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('examples', $allExamples);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenExampleToView()
    {
        $example = new \ThomasLudwig\Tcaobject\Domain\Model\Example();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('example', $example);

        $this->subject->showAction($example);
    }
}
