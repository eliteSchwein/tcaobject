<?php

declare(strict_types=1);

namespace ThomasLudwig\Tcaobject\Domain\Model;


/**
 * This file is part of the "dummy" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021
 */

/**
 * Table2
 */
class Example2 extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * input2
     *
     * @var string
     */
    protected $input2 = '';

    /**
     * Returns the input2
     *
     * @return string $input2
     */
    public function getInput2()
    {
        return $this->input2;
    }

    /**
     * Sets the input2
     *
     * @param string $input2
     * @return void
     */
    public function setInput2(string $input2)
    {
        $this->input2 = $input2;
    }
}
