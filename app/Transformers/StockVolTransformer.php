<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\StockVol;

class StockVolTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(StockVOl $vol)
    {
        return [
            'id_ticker' => $vol->id_ticker,
            'dt_trx'    => $vol->dt_trx,
            'ma1'       => $vol->ma1,
            'ma2'       => $vol->ma2,
            'up_p'      => $vol->up_p,
            'vol_prc'   => $vol->vol_prc,
            'last_vol'  => $vol->last_vol,
            'vol2'      => $vol->vol2,
            'vol3'      => $vol->vol3,
            'vol4'      => $vol->vol4,
            'vol5'      => $vol->vol5,
            'vol_5day'      => $vol->avg_vol_5day,
        ];
    }
}
