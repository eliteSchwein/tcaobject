<?php
declare(strict_types=1);

namespace ThomasLudwig\Tcaobject\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class ExampleTest extends UnitTestCase
{
    /**
     * @var \ThomasLudwig\Tcaobject\Domain\Model\Example
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ThomasLudwig\Tcaobject\Domain\Model\Example();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getStringExampleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStringExample()
        );
    }

    /**
     * @test
     */
    public function setStringExampleForStringSetsStringExample()
    {
        $this->subject->setStringExample('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'stringExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTextExampleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTextExample()
        );
    }

    /**
     * @test
     */
    public function setTextExampleForStringSetsTextExample()
    {
        $this->subject->setTextExample('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'textExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRichTextExampleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRichTextExample()
        );
    }

    /**
     * @test
     */
    public function setRichTextExampleForStringSetsRichTextExample()
    {
        $this->subject->setRichTextExample('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'richTextExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPasswordExampleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPasswordExample()
        );
    }

    /**
     * @test
     */
    public function setPasswordExampleForStringSetsPasswordExample()
    {
        $this->subject->setPasswordExample('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'passwordExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailExampleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmailExample()
        );
    }

    /**
     * @test
     */
    public function setEmailExampleForStringSetsEmailExample()
    {
        $this->subject->setEmailExample('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'emailExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIntegerExampleReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getIntegerExample()
        );
    }

    /**
     * @test
     */
    public function setIntegerExampleForIntSetsIntegerExample()
    {
        $this->subject->setIntegerExample(12);

        self::assertAttributeEquals(
            12,
            'integerExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFloatExampleReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getFloatExample()
        );
    }

    /**
     * @test
     */
    public function setFloatExampleForFloatSetsFloatExample()
    {
        $this->subject->setFloatExample(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'floatExample',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getBooleanExampleReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getBooleanExample()
        );
    }

    /**
     * @test
     */
    public function setBooleanExampleForBoolSetsBooleanExample()
    {
        $this->subject->setBooleanExample(true);

        self::assertAttributeEquals(
            true,
            'booleanExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateExampleReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateExample()
        );
    }

    /**
     * @test
     */
    public function setDateExampleForDateTimeSetsDateExample()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateExample($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateTimeExampleReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateTimeExample()
        );
    }

    /**
     * @test
     */
    public function setDateTimeExampleForDateTimeSetsDateTimeExample()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateTimeExample($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateTimeExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTimeExampleReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getTimeExample()
        );
    }

    /**
     * @test
     */
    public function setTimeExampleForDateTimeSetsTimeExample()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setTimeExample($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'timeExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTimeSecExampleReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getTimeSecExample()
        );
    }

    /**
     * @test
     */
    public function setTimeSecExampleForIntSetsTimeSecExample()
    {
        $this->subject->setTimeSecExample(12);

        self::assertAttributeEquals(
            12,
            'timeSecExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSelectExampleReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSelectExample()
        );
    }

    /**
     * @test
     */
    public function setSelectExampleForIntSetsSelectExample()
    {
        $this->subject->setSelectExample(12);

        self::assertAttributeEquals(
            12,
            'selectExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFileExampleReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getFileExample()
        );
    }

    /**
     * @test
     */
    public function setFileExampleForFileReferenceSetsFileExample()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setFileExample($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'fileExample',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImageExampleReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImageExample()
        );
    }

    /**
     * @test
     */
    public function setImageExampleForFileReferenceSetsImageExample()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImageExample($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'imageExample',
            $this->subject
        );
    }
}
