<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\StockVolTransformer;
use App\StockVol;

class StockVolController extends Controller
{
    public function index()
	{		
		$stockVol  = StockVol::all();

		return fractal()
		->collection($stockVol)
		->transformWith(new StockVolTransformer)
		->toArray();

	}
}
