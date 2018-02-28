<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Fractal\Resource\Collection;
use App\Transformers\StockResSupTransformer;
use App\StockResSup;

class StockResSupController extends Controller
{
    public function show($id)
	{
		$stockResSup = StockResSup::where('id_ticker', strtoupper($id))
						// ->where('dt_trx', $dt)
						->first();

		if ($stockResSup) {          
			return fractal()
			// ->collection($stockResSup)
			->item($stockResSup)
			->transformWith(new StockResSupTransformer)		
			->toArray();
		} 
		return response()->json(['status' => 'error', 'message' => 'Data not found'],404);
	}
}
