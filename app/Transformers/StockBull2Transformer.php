<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\StockBull2;


class StockBull2Transformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(StockBull2 $bull)
    {
        return [
            'id_ticker' => $bull->id_ticker,
            'dt_trx'    => $bull->dt_trx,
            'ma1'       => $bull->ma1,
            'ma2'       => $bull->ma2,
            'ma3'       => $bull->ma3,            
            'vol_trx'   => $bull->vol_trx,
            'vol_prc'   => $bull->vol_prc,
            'up_p'      => $bull->up_p,
        ];
    }
}
