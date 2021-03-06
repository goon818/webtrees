<?php

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRuleTachelhit - Select a plural form for a specified number.
 * nplurals=4; plural=(n==0 || n==1) ? 0 : (n>=2 && n<=10) ? 1 : 2;
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class PluralRuleTachelhit implements PluralRuleInterface
{
    public function plurals()
    {
        return 3;
    }

    public function plural($number)
    {
        $number = abs($number);

        if ($number === 0 || $number === 1) {
            return 0;
        } elseif ($number >= 2 && $number <= 10) {
            return 1;
        } else {
            return 2;
        }
    }
}
