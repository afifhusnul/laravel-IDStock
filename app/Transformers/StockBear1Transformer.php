<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\StockBear1;

class StockBear1Transformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(StockBear1 $down)
    {
        return [
            'id_ticker' => $down->id_ticker,
            'dt_trx'    => $down->dt_trx,
            'ma1'       => $down->ma1,
            'ma2'       => $down->ma2,            
            'vol_trx'   => $down->vol_trx,
            'vol_prc'   => $down->vol_prc,
            'down_p'    => $down->down_p,
        ];
    }
}

