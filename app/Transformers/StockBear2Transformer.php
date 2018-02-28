<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\StockBear2;

class StockBear2Transformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(StockBear2 $down)
    {
        return [
            'id_ticker' => $down->id_ticker,
            'dt_trx'    => $down->dt_trx,
            'ma1'       => $down->ma1,
            'ma2'       => $down->ma2,
            'ma3'       => $down->ma3,
            'ma10'      => $down->ma10,
            'vol_trx'   => $down->vol_trx,
            'vol_prc'   => $down->vol_prc,
            'down_p'    => $down->down_p,
        ];
    }
}
