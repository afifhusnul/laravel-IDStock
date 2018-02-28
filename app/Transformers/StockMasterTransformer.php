<?php

namespace App\Transformers;

use App\StockMaster;
use League\Fractal\TransformerAbstract;


class StockMasterTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(StockMaster $master)
    {
        return [
            'id_ticker' => $master->id_ticker,
            'nm_ticker' => $master->nm_ticker,
        ];
    }
}
