<?php

declare(strict_types=1);

namespace pointybeard\Helpers\Functions\Numbers;

if (false == function_exists(__NAMESPACE__.'\currency_format')) {
    /**
     * Takes a number and formats it to 2 decimals places by passing it through
     * number_format(). This helps to eliminate problems when doing floating point
     * number comparisons or operations when there is a tiny leftover after.
     * Helpful for ensuring that 0.00 is actualy 0 and not, for example,
     * -7.105427357601E-15 which can appear as 0 but is not 0 when doing operations.
     *
     * @param mixed $number        number to operate on
     * @param string $decimalPoint optionally specify the character to use for
     *                             the decimial point (default is '.')
     * @param string $thousands    optionally specify the character to use for
     *                             the thousands seperator (default is '')
     *
     * @return mixed formatted value
     */
    function currency_format($number, string $decimalPoint = '.', string $thousands = '')
    {
        // The point of this method is to remove strange leftover floating point
        // noise. E.g. even though the number might be 0, its actually
        // -7.105427357601E-15. This screws up comparisons since 0.0 does not equal
        // -7.105427357601E-15. Using number_format rectifies this problem.
        $number = number_format((float) $number, 2, $decimalPoint, $thousands);

        // Sometimes it's possible to end up with a -0.0 value. This is because
        // for example, -7.105427357601E-15 put through number_format will produce
        // -0.0. Howerver, only check this if $number is numeric. e.g. 1233.22
        // is numeric, but 1,233.22 is not (due to the thousands seperator)
        if (true == is_numeric($number) && -0.0 == (float) $number) {
            $number = +0.0;
        }

        return $number;
    }
}
