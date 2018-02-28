<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\StockBull1;

class StockBull1Transformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(StockBull1 $bull)
    {
        return [
            'id_ticker' => $bull->id_ticker,
            'dt_trx'    => $bull->dt_trx,
            'ma1'       => $bull->ma1,
            'ma2'       => $bull->ma2,                        
            'vol_trx'   => $bull->vol_trx,
            'vol_prc'   => $bull->vol_prc,
            'up_p'      => $bull->up_p,
        ];
    }
}
