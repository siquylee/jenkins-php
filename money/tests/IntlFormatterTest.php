<?php
/*
 * This file is part of the Money package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Money;

use PHPUnit\Framework\TestCase;

/**
 * @requires extension intl
 */
class IntlFormatterTest extends TestCase
{
    /**
     * @covers \SebastianBergmann\Money\IntlFormatter::__construct
     * @covers \SebastianBergmann\Money\IntlFormatter::format
     * @uses   \SebastianBergmann\Money\Currency
     * @uses   \SebastianBergmann\Money\Money
     */
    public function testMoneyObjectCanBeFormattedAsString()
    {
        $f = new IntlFormatter('de_DE');
        $m = new Money(100, new Currency('EUR'));

        $this->assertEquals('1,00 €', $f->format($m));
    }
}
