<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory IC - Canary Islands.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class TerritoryIc extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'IC';
    }
}
