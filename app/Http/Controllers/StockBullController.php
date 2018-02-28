<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\StockBullTransformer;
use App\StockBull;

class StockBullController extends Controller
{
	public function index()
	{		
		$bull  = StockBull::all();
		return fractal()
		->collection($bull)
		->transformWith(new StockBullTransformer)
		->toArray();
			
	}
}
