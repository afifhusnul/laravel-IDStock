<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\StockBull3Transformer;
use App\StockBull3;

class StockBull3Controller extends Controller
{
    public function index()
	{		
		$bull  = StockBull3::all();
		return fractal()
		->collection($bull)
		->transformWith(new StockBull3Transformer)
		->toArray();
	}
}
