<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\StockBull2Transformer;
use App\StockBull2;

class StockBull2Controller extends Controller
{
	public function index()
	{		
		$bull  = StockBull2::all();
		return fractal()
		->collection($bull)
		->transformWith(new StockBull2Transformer)
		->toArray();
	}
}
