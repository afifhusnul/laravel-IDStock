<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Fractal\Resource\Collection;
use App\Transformers\StockSessionTransformer;
use App\StockSession;

class StockSessionController extends Controller
{
	public function index($id)
	{
		$stockSession = StockSession::where('id_ticker', strtoupper($id))->get();

		if ($stockSession) {          
			return fractal()
			->collection($stockSession)      
			->transformWith(new StockSessionTransformer)		
			->toArray();
		} 
		return response()->json(['status' => 'error', 'message' => 'Data not found'],404);

		
	}
}
