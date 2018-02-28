<?php

namespace App\Transformers;

use App\StockSession;
use League\Fractal\TransformerAbstract;


class StockSessionTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(StockSession $stockSession)
    {
        return [
            'id_ticker' => $stockSession->id_ticker,
            'trx_year'  => $stockSession->trx_year,
            'trx_mth'   => $stockSession->trx_mth,
            'prc_min'   => $stockSession->prc_min,
            'dt_min'    => $stockSession->dt_min,
            'prc_max'   => $stockSession->prc_max,
            'dt_max'    => $stockSession->dt_max,            
            'up_p'      => $stockSession->up_p,
        ];
    }
}
