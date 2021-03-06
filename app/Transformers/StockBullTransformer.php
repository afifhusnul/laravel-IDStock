<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\StockBull;

class StockBullTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(StockBull $bull)
    {
        return [
            'id_ticker' => $bull->id_ticker,
            'dt_trx'    => $bull->dt_trx,
            'ma1'       => $bull->ma1,
            'ma2'       => $bull->ma2,
            'ma3'       => $bull->ma3,
            'ma4'       => $bull->ma4,
            'ma5'       => $bull->ma5,
            'ma10'      => $bull->ma10,
            'ma20'      => $bull->ma20,
            'ma50'      => $bull->ma50,
            'ma100'      => $bull->ma100,
            'vol_trx'   => $bull->vol_trx,
            'vol_prc'   => $bull->vol_prc,
            'up_p'      => $bull->up_p,
        ];
    }
}
