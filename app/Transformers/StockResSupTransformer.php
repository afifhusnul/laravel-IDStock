<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\StockResSup;

class StockResSupTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(StockResSup $stockResSup)
    {
        return [
            'id_ticker'     => $stockResSup->id_ticker,
            'nm_ticker'     => $stockResSup->nm_ticker,
            'dt_trx'        => $stockResSup->dt_trx,
            'ma1'           => $stockResSup->ma1,
            'last_trx_vol'  => $stockResSup->last_trx_vol,
            'last_trx_prc'  => $stockResSup->last_trx_prc,
            'pivot_entry'   => $stockResSup->pivot_entry,
            'r1'            => $stockResSup->r1,
            'r2'            => $stockResSup->r2,
            'r3'            => $stockResSup->r3,
            's1'            => $stockResSup->s1,
            's2'            => $stockResSup->s2,
            's3'            => $stockResSup->s3,
        ];
    }
}
