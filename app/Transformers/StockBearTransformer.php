<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\StockBear;

class StockBearTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(StockBear $down)
    {
        return [
            'id_ticker' => $down->id_ticker,
            'dt_trx'    => $down->dt_trx,
            'ma1'       => $down->ma1,
            'ma2'       => $down->ma2,
            'ma3'       => $down->ma3,
            'ma4'       => $down->ma4,
            'ma5'       => $down->ma5,
            'ma10'      => $down->ma10,
            'ma20'      => $down->ma20,
            'ma50'      => $down->ma50,
            'ma100'     => $down->ma100,
            'vol_trx'   => $down->vol_trx,
            'vol_prc'   => $down->vol_prc,
            'down_p'    => $down->down_p,
        ];
    }
}
