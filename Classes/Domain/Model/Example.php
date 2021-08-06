<?php

declare(strict_types=1);

namespace ThomasLudwig\Tcaobject\Domain\Model;


/**
 * This file is part of the "TCAObject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 
 */


/**
 * Example
 */
class Example extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * stringExample
     *
     * @var string
     */
    protected $stringExample = '';

    /**
     * textExample
     *
     * @var string
     */
    protected $textExample = '';

    /**
     * richTextExample
     *
     * @var string
     */
    protected $richTextExample = '';

    /**
     * passwordExample
     *
     * @var string
     */
    protected $passwordExample = '';

    /**
     * emailExample
     *
     * @var string
     */
    protected $emailExample = '';

    /**
     * integerExample
     *
     * @var int
     */
    protected $integerExample = 0;

    /**
     * floatExample
     *
     * @var float
     */
    protected $floatExample = 0.0;

    /**
     * booleanExample
     *
     * @var bool
     */
    protected $booleanExample = false;

    /**
     * dateExample
     *
     * @var \DateTime
     */
    protected $dateExample = null;

    /**
     * dateTimeExample
     *
     * @var \DateTime
     */
    protected $dateTimeExample = null;

    /**
     * timeExample
     *
     * @var \DateTime
     */
    protected $timeExample = null;

    /**
     * timeSecExample
     *
     * @var int
     */
    protected $timeSecExample = 0;

    /**
     * selectExample
     *
     * @var int
     */
    protected $selectExample = 0;

    /**
     * fileExample
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $fileExample = null;

    /**
     * imageExample
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $imageExample = null;

    /**
     * Returns the stringExample
     *
     * @return string $stringExample
     */
    public function getStringExample()
    {
        return $this->stringExample;
    }

    /**
     * Sets the stringExample
     *
     * @param string $stringExample
     * @return void
     */
    public function setStringExample(string $stringExample)
    {
        $this->stringExample = $stringExample;
    }

    /**
     * Returns the textExample
     *
     * @return string $textExample
     */
    public function getTextExample()
    {
        return $this->textExample;
    }

    /**
     * Sets the textExample
     *
     * @param string $textExample
     * @return void
     */
    public function setTextExample(string $textExample)
    {
        $this->textExample = $textExample;
    }

    /**
     * Returns the richTextExample
     *
     * @return string $richTextExample
     */
    public function getRichTextExample()
    {
        return $this->richTextExample;
    }

    /**
     * Sets the richTextExample
     *
     * @param string $richTextExample
     * @return void
     */
    public function setRichTextExample(string $richTextExample)
    {
        $this->richTextExample = $richTextExample;
    }

    /**
     * Returns the passwordExample
     *
     * @return string $passwordExample
     */
    public function getPasswordExample()
    {
        return $this->passwordExample;
    }

    /**
     * Sets the passwordExample
     *
     * @param string $passwordExample
     * @return void
     */
    public function setPasswordExample(string $passwordExample)
    {
        $this->passwordExample = $passwordExample;
    }

    /**
     * Returns the emailExample
     *
     * @return string $emailExample
     */
    public function getEmailExample()
    {
        return $this->emailExample;
    }

    /**
     * Sets the emailExample
     *
     * @param string $emailExample
     * @return void
     */
    public function setEmailExample(string $emailExample)
    {
        $this->emailExample = $emailExample;
    }

    /**
     * Returns the integerExample
     *
     * @return int $integerExample
     */
    public function getIntegerExample()
    {
        return $this->integerExample;
    }

    /**
     * Sets the integerExample
     *
     * @param string $integerExample
     * @return void
     */
    public function setIntegerExample(int $integerExample)
    {
        $this->integerExample = $integerExample;
    }

    /**
     * Returns the floatExample
     *
     * @return float $floatExample
     */
    public function getFloatExample()
    {
        return $this->floatExample;
    }

    /**
     * Sets the floatExample
     *
     * @param string $floatExample
     * @return void
     */
    public function setFloatExample(float $floatExample)
    {
        $this->floatExample = $floatExample;
    }

    /**
     * Returns the booleanExample
     *
     * @return bool $booleanExample
     */
    public function getBooleanExample()
    {
        return $this->booleanExample;
    }

    /**
     * Sets the booleanExample
     *
     * @param string $booleanExample
     * @return void
     */
    public function setBooleanExample(bool $booleanExample)
    {
        $this->booleanExample = $booleanExample;
    }

    /**
     * Returns the boolean state of booleanExample
     *
     * @return bool
     */
    public function isBooleanExample()
    {
        return $this->booleanExample;
    }

    /**
     * Returns the dateExample
     *
     * @return \DateTime $dateExample
     */
    public function getDateExample()
    {
        return $this->dateExample;
    }

    /**
     * Sets the dateExample
     *
     * @param \DateTime $dateExample
     * @return void
     */
    public function setDateExample(\DateTime $dateExample)
    {
        $this->dateExample = $dateExample;
    }

    /**
     * Returns the dateTimeExample
     *
     * @return \DateTime $dateTimeExample
     */
    public function getDateTimeExample()
    {
        return $this->dateTimeExample;
    }

    /**
     * Sets the dateTimeExample
     *
     * @param \DateTime $dateTimeExample
     * @return void
     */
    public function setDateTimeExample(\DateTime $dateTimeExample)
    {
        $this->dateTimeExample = $dateTimeExample;
    }

    /**
     * Returns the timeExample
     *
     * @return \DateTime $timeExample
     */
    public function getTimeExample()
    {
        return $this->timeExample;
    }

    /**
     * Sets the timeExample
     *
     * @param \DateTime $timeExample
     * @return void
     */
    public function setTimeExample(\DateTime $timeExample)
    {
        $this->timeExample = $timeExample;
    }

    /**
     * Returns the timeSecExample
     *
     * @return int $timeSecExample
     */
    public function getTimeSecExample()
    {
        return $this->timeSecExample;
    }

    /**
     * Sets the timeSecExample
     *
     * @param int $timeSecExample
     * @return void
     */
    public function setTimeSecExample(int $timeSecExample)
    {
        $this->timeSecExample = $timeSecExample;
    }

    /**
     * Returns the selectExample
     *
     * @return int $selectExample
     */
    public function getSelectExample()
    {
        return $this->selectExample;
    }

    /**
     * Sets the selectExample
     *
     * @param int $selectExample
     * @return void
     */
    public function setSelectExample(int $selectExample)
    {
        $this->selectExample = $selectExample;
    }

    /**
     * Returns the fileExample
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $fileExample
     */
    public function getFileExample()
    {
        return $this->fileExample;
    }

    /**
     * Sets the fileExample
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $fileExample
     * @return void
     */
    public function setFileExample(\TYPO3\CMS\Extbase\Domain\Model\FileReference $fileExample)
    {
        $this->fileExample = $fileExample;
    }

    /**
     * Returns the imageExample
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageExample
     */
    public function getImageExample()
    {
        return $this->imageExample;
    }

    /**
     * Sets the imageExample
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageExample
     * @return void
     */
    public function setImageExample(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageExample)
    {
        $this->imageExample = $imageExample;
    }
}
